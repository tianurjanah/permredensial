<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengalaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('pengalaman_model');

    }

    public function index()
    {
        $data['title'] = 'PENGALAMAN KERJA';
        $id = $this->session->userdata('login_session')['id_user'];
        $data['pengalaman'] = $this->pengalaman_model->data($id)->result();

        $this->load->view('pengalaman/index', $data);
    }
    public function approval($id)
    {
        $data['title'] = 'DATA PENGALAMAN KERJA';
        $data['pengalaman'] = $this->pengalaman_model->ambil_data_surat_pengalaman($id)->result();
        $data['user'] = $this->user_model->data()->result();

        $this->load->view('pengalaman/approve', $data);
    }

    public function tambah_pengalaman()
    {
        $data['title'] = 'TAMBAH PENGALAMAN';
        $this->load->view('pengalaman/form_tambah');

    }
    public function ubah_pengalaman($id)
    {
        $data['title'] = 'UBAH PENGALAMAN';
        // Menampilkan data berdasarkan id
        // Mengambil data ijazah
        $data['pengalaman'] = $this->pengalaman_model->ambil_detail_pengalaman($id)->result();

        // Memastikan variabel $ijazah terdefinisi
        if (empty($data['pengalaman'])) {
            $data['pengalaman'] = array();
        }

        $this->load->view('pengalaman/form_ubah', $data);
    }

    public function proses_tambah_pengalaman()
    {
        $config['upload_path'] = './assets/upload/berkas_pengalaman/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $surat_referensi = $_FILES['referensi']['name'];
        $error = $_FILES['referensi']['error'];

        $this->load->library('upload', $config);

        $id = $this->pengalaman_model->buat_kode();
        $perusahaan = $this->input->post('perusahaan');
        $user = $this->session->userdata('login_session')['id_user'];
        $masa_dari = $this->input->post('masa_dari');
        $masa_sampai = $this->input->post('masa_sampai');

        if ($surat_referensi == '') {
            $surat_referensi = 'cloud.png';
        } else {
            if (!$this->upload->do_upload('referensi')) {
                $error = $this->upload->display_errors();
                redirect('pengalaman/form_tambah');
            } else {
                $data = array('referensi' => $this->upload->data());
                $nama_file_referensi = $data['referensi']['file_name'];
                $ganti_referensi = str_replace(" ", "_", $nama_file_referensi);
            }
        }

        $data = array(
            'id_pengalaman' => $id,
            'id_user' => $user,
            'perusahaan' => $perusahaan,
            'kerja_dari' => $masa_dari,
            'kerja_sampai' => $masa_sampai,
            'referensi' => $ganti_referensi
        );

        $this->pengalaman_model->tambah_data($data, 'pengalaman');
        $this->session->set_flashdata('Pesan', '
		<script>
		$(document).ready(function() {
			swal.fire({
				title: "Berhasil ditambahkan!",
				icon: "success",
				confirmButtonColor: "#4e73df",
			});
		});
		</script>
		');

        redirect('pengalaman/index');
    }
    public function proses_ubah_pengalaman()
    {
        $config['upload_path'] = './assets/upload/berkas_pengalaman/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $namaFile_referensi = $_FILES['referensi']['name'];
        $error = $_FILES['referensi']['error'];

        $this->load->library('upload', $config);

        $id = $this->input->post('pengalaman');
        $perusahaan = $this->input->post('perusahaan');
        $user = $this->session->userdata('login_session')['id_user'];
        $masa_dari = $this->input->post('masa_dari');
        $masa_sampai = $this->input->post('masa_sampai');
        $where = array(
            'id_pengalaman' => $id
        );
        $referensilama = $this->pengalaman_model->ambilreferensi($where);

        if (!empty($_FILES['referensi']['name'])) {
            if (!$this->upload->do_upload('referensi')) {
                $error = $this->upload->display_errors();
                redirect('pengalaman/index');
            } else {
                $datareferensi = array('referensi' => $this->upload->data());
                $nama_file_referensi = $datareferensi['referensi']['file_name'];
                $gantireferensi = str_replace(" ", "_", $nama_file_referensi);
                $data['referensi'] = $gantireferensi;
            }
        } else {
            $gantireferensi = $referensilama;
        }

        $data = array(
            'id_pengalaman' => $id,
            'id_user' => $user,
            'perusahaan' => $perusahaan,
            'kerja_dari' => $masa_dari,
            'kerja_sampai' => $masa_sampai,
            'referensi' => $gantireferensi
        );

        $where = array(
            'id_pengalaman' => $id
        );

        $this->pengalaman_model->ubah_data($where, $data, 'pengalaman');
        $this->session->set_flashdata('Pesan', '
		<script>
		$(document).ready(function() {
			swal.fire({
				title: "Berhasil diubah!",
				icon: "success",
				confirmButtonColor: "#4e73df",
			});
		});
		</script>
		');
        redirect('pengalaman/index');
    }

    public function hapus_pengalaman($nomor)
    {
        $where = array('id_pengalaman' => $nomor);
        $referensi = $this->pengalaman_model->ambilreferensi($where);
        if ($referensi) {
            if ($referensi != 'cloud.png') {
                unlink('./assets/upload/berkas_pengalaman/' . $referensi);
            }
        }

        $this->pengalaman_model->hapus_data($where, 'pengalaman');
        $this->session->set_flashdata('Pesan', '
            <script>
            $(document).ready(function() {
                swal.fire({
                    title: "Berhasil dihapus!",
                    icon: "success",
                    confirmButtonColor: "#4e73df",
                });
            });
            </script>
        ');
        redirect('pengalaman/index');
    }



}
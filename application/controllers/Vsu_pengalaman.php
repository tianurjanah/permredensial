<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vsu_pengalaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('vsu_pengalaman_model');

    }

    public function index()
    {
        $data['title'] = 'VERIFIKASI PENGALAMAN';
        $id = $this->session->userdata('login_session')['id_user'];
        $data['vsu_pengalaman'] = $this->vsu_pengalaman_model->data($id)->result();

        $this->load->view('vsu_pengalaman/index', $data);
    }
    public function approval($id)
    {
        $data['title'] = 'VSU PENGALAMAN';
        $data['vsu_pengalaman'] = $this->vsu_pengalaman_model->ambil_data_surat_vpengalaman($id)->result();
        $data['user'] = $this->user_model->data()->result();

        $this->load->view('vsu_pengalaman/approve', $data);
    }

    public function tambah_pengalaman()
    {
        $data['title'] = 'TAMBAH PENGALAMAN';
        $this->load->view('vsu_pengalaman/form_tambah');

    }
    public function ubah_pengalaman($id)
    {
        $data['title'] = 'UBAH PENGALAMAN';
        // Menampilkan data berdasarkan id
        // Mengambil data ijazah
        $data['vsu_pengalaman'] = $this->vsu_pengalaman_model->ambil_detail_pengalaman($id)->result();

        // Memastikan variabel $ijazah terdefinisi
        if (empty($data['vsu_pengalaman'])) {
            $data['vsu_pengalaman'] = array();
        }

        $this->load->view('vsu_pengalaman/form_ubah', $data);
    }

    public function proses_tambah_pengalaman()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_pengalaman/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $surat_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->vsu_pengalaman_model->buat_kode();
        $user = $this->session->userdata('login_session')['id_user'];
        $perusahaan = $this->input->post('nama_perusahaan');
        $pengiriman = $this->input->post('pengiriman');

        if ($surat_balasan == '') {
            $surat_balasan = 'cloud.png';
        } else {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_pengalaman/form_tambah');
            } else {
                $data = array('balasan' => $this->upload->data());
                $nama_file_balasan = $data['balasan']['file_name'];
                $ganti_balasan = str_replace(" ", "_", $nama_file_balasan);
            }
        }

        $data = array(
            'nomor_pengalamanvsu' => $id,
            'id_user' => $user,
            'nama_perusahaan' => $perusahaan,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $ganti_balasan
        );

        $this->vsu_pengalaman_model->tambah_data($data, 'vsu_pengalaman');
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

        redirect('vsu_pengalaman/index');
    }
    public function proses_ubah_pengalaman()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_pengalaman/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $namaFile_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->input->post('pengalaman');
        $user = $this->session->userdata('login_session')['id_user'];
        $perusahaan = $this->input->post('nama_perusahaan');
        $pengiriman = $this->input->post('pengiriman');
        $where = array(
            'nomor_pengalamanvsu' => $id
        );
        $balasanlama = $this->vsu_pengalaman_model->ambilbalasan($where);

        if (!empty($_FILES['balasan']['name'])) {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_pengalaman/index');
            } else {
                $databalasan = array('balasan' => $this->upload->data());
                $nama_file_balasan = $databalasan['balasan']['file_name'];
                $gantibalasan = str_replace(" ", "_", $nama_file_balasan);
                $data['referensi'] = $gantibalasan;
            }
        } else {
            $gantibalasan = $balasanlama;
        }

        $data = array(
            'nomor_pengalamanvsu' => $id,
            'id_user' => $user,
            'nama_perusahaan' => $perusahaan,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $gantibalasan
        );

        $where = array(
            'nomor_pengalamanvsu' => $id
        );

        $this->vsu_pengalaman_model->ubah_data($where, $data, 'vsu_pengalaman');
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
        redirect('vsu_pengalaman/index');
    }

    public function hapus_pengalaman($nomor)
    {
        $where = array('nomor_pengalamanvsu' => $nomor);
        $balasan = $this->vsu_pengalaman_model->ambilbalasan($where);
        if ($balasan) {
            if ($balasan != 'cloud.png') {
                unlink('./assets/upload/berkas_vsu_pengalaman/' . $balasan);
            }
        }

        $this->vsu_pengalaman_model->hapus_data($where, 'vsu_pengalaman');
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
        redirect('vsu_pengalaman/index');
    }



}
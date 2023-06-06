<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vsu_suratizin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('vsu_suratizin_model');

    }

    public function index()
    {
        $data['title'] = 'VERIFIKASI SURAT IZIN';
        $id = $this->session->userdata('login_session')['id_user'];
        $data['vsu_suratizin'] = $this->vsu_suratizin_model->data($id)->result();

        $this->load->view('vsu_suratizin/index', $data);
    }
    public function approval($id)
    {
        $data['title'] = 'VSU SURAT IZIN';
        $data['vsu_suratizin'] = $this->vsu_suratizin_model->ambil_data_surat_vsuratizin($id)->result();
        $data['user'] = $this->user_model->data()->result();

        $this->load->view('vsu_suratizin/approve', $data);
    }

    public function tambah_suratizin()
    {
        $data['title'] = 'TAMBAH SURAT IZIN';
        $this->load->view('vsu_suratizin/form_tambah');

    }
    public function ubah_vsu_suratizin($id)
    {
        $data['title'] = 'UBAH SURAT IZIN';
        // Menampilkan data berdasarkan id
        // Mengambil data ijazah
        $data['vsu_suratizin'] = $this->vsu_suratizin_model->ambil_detail_suratizin($id)->result();

        // Memastikan variabel $ijazah terdefinisi
        if (empty($data['vsu_suratizin'])) {
            $data['vsu_suratizin'] = array();
        }

        $this->load->view('vsu_suratizin/form_ubah', $data);
    }

    public function proses_tambah_suratizin()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_suratizin/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $surat_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->vsu_suratizin_model->buat_kode();
        $user = $this->session->userdata('login_session')['id_user'];
        $institusi = $this->input->post('institusi');
        $pengiriman = $this->input->post('pengiriman');

        if ($surat_balasan == '') {
            $surat_balasan = 'cloud.png';
        } else {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_suratizin/form_tambah');
            } else {
                $data = array('balasan' => $this->upload->data());
                $nama_file_balasan = $data['balasan']['file_name'];
                $ganti_balasan = str_replace(" ", "_", $nama_file_balasan);
            }
        }

        $data = array(
            'nomor_izinvsu' => $id,
            'id_user' => $user,
            'nama_institusi' => $institusi,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $ganti_balasan
        );

        $this->vsu_suratizin_model->tambah_data($data, 'vsu_suratizin');
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

        redirect('vsu_suratizin/index');
    }
    public function proses_ubah_suratizin()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_suratizin/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $namaFile_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->input->post('suratizin');
        $user = $this->session->userdata('login_session')['id_user'];
        $institusi = $this->input->post('institusi');
        $pengiriman = $this->input->post('pengiriman');
        $where = array(
            'nomor_izinvsu' => $id
        );
        $balasanlama = $this->vsu_suratizin_model->ambilbalasan($where);

        if (!empty($_FILES['balasan']['name'])) {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_suratizin/index');
            } else {
                $databalasan = array('balasan' => $this->upload->data());
                $nama_file_balasan = $databalasan['balasan']['file_name'];
                $gantibalasan = str_replace(" ", "_", $nama_file_balasan);
                $data['balasan'] = $gantibalasan;
            }
        } else {
            $gantibalasan = $balasanlama;
        }

        $data = array(
            'nomor_izinvsu' => $id,
            'id_user' => $user,
            'nama_institusi' => $institusi,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $gantibalasan
        );

        $where = array(
            'nomor_izinvsu' => $id
        );

        $this->vsu_suratizin_model->ubah_data($where, $data, 'vsu_suratizin');
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
        redirect('vsu_suratizin/index');
    }

    public function hapus_suratizin($nomor)
    {
        $where = array('nomor_izinvsu' => $nomor);
        $balasan = $this->vsu_suratizin_model->ambilbalasan($where);
        if ($balasan) {
            if ($balasan != 'cloud.png') {
                unlink('./assets/upload/berkas_vsu_suratizin/' . $balasan);
            }
        }

        $this->vsu_suratizin_model->hapus_data($where, 'vsu_suratizin');
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
        redirect('vsu_suratizin/index');
    }



}
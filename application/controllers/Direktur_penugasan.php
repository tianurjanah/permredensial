<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Direktur_penugasan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('direktur_penugasan_model');
        // $this->load->model('approve_pengajuan_model');

    }
    public function index()
    {
        $data['title'] = 'Surat Penugasan';
        $data['surpen'] = $this->direktur_penugasan_model->data();

        $this->load->view('templates/header', $data);
        $this->load->view('direktur_penugasan/index');
        $this->load->view('templates/footer');
    }

    public function tambah_pendidikan()
    {
        $data['title'] = 'TAMBAH PENDIDIKAN';
        $this->load->view('vsu_pendidikan/form_tambah');

    }
    public function ubah_pendidikan($id)
    {
        $data['title'] = 'UBAH PENDIDIKAN';
        // Menampilkan data berdasarkan id
        // Mengambil data ijazah
        $data['pendidikan'] = $this->vsu_pendidikan_model->ambil_detail_pendidikan($id)->result();

        // Memastikan variabel $ijazah terdefinisi
        if (empty($data['pendidikan'])) {
            $data['pendidikan'] = array();
        }

        $this->load->view('vsu_pendidikan/form_ubah', $data);
    }

    public function proses_tambah_pendidikan()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_pendidikan/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $surat_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->vsu_pendidikan_model->buat_kode();
        $user = $this->session->userdata('login_session')['id_user'];
        $institusi = $this->input->post('institusi');
        $pengiriman = $this->input->post('pengiriman');

        if ($surat_balasan == '') {
            $surat_balasan = 'cloud.png';
        } else {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_pendidikan/form_tambah');
            } else {
                $data = array('balasan' => $this->upload->data());
                $nama_file_balasan = $data['balasan']['file_name'];
                $ganti_balasan = str_replace(" ", "_", $nama_file_balasan);
            }
        }

        $data = array(
            'nomor_pendidikanvsu' => $id,
            'id_user' => $user,
            'nama_institusi' => $institusi,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $ganti_balasan
        );

        $this->vsu_pendidikan_model->tambah_data($data, 'vsu_pendidikan');
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

        redirect('vsu_pendidikan/index');
    }
    public function proses_ubah_pendidikan()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_pendidikan/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $namaFile_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->input->post('nomor_pendidikanvsu');
        $user = $this->session->userdata('login_session')['id_user'];
        $institusi = $this->input->post('nama_institusi');
        $pengiriman = $this->input->post('tgl_pengiriman');
        $where = array(
            'nomor_pendidikanvsu' => $id
        );
        $balasanlama = $this->vsu_pendidikan_model->ambilbalasan($where);

        if (!empty($_FILES['balasan']['name'])) {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_pendidikan/index');
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
            'nomor_pendidikanvsu' => $id,
            'id_user' => $user,
            'nama_institusi' => $institusi,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $gantibalasan
        );

        $where = array(
            'nomor_pendidikanvsu' => $id
        );

        $this->vsu_pendidikan_model->ubah_data($where, $data, 'vsu_pendidikan');
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
        redirect('vsu_pendidikan/index');
    }

    public function hapus_pendidikan($nomor)
    {
        $where = array('nomor_pendidikanvsu' => $nomor);
        $balasan = $this->vsu_pendidikan_model->ambilbalasan($where);
        if ($balasan) {
            if ($balasan != 'cloud.png') {
                unlink('./assets/upload/berkas_vsu_pendidikan/' . $balasan);
            }
        }

        $this->vsu_pendidikan_model->hapus_data($where, 'vsu_pendidikan');
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
        redirect('vsu_pendidikan/index');
    }

    public function cetak_penugasan($id)
    {
        // Load the TCPDF library
        $this->load->library('pdf');
        // $id = $this->session->userdata('login_session')['nama'];
        $data['surpen'] = $this->direktur_penugasan_model->data_detail($id);
        // Create a new PDF instance
        $pdf = new TCPDF();

        // Set PDF content and formatting
        $pdf->AddPage();
        $pdf->writeHTML($this->load->view('direktur_penugasan/surat_penugasan', $data, true), true, false, true, false, '');

        // Output the PDF to the browser
        ob_end_clean();
        $pdf->Output('Surat Penugasan.pdf', 'I');
    }



}
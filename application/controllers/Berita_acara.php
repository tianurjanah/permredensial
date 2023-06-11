<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_acara extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('berita_acara_model');

    }
    public function index()
    {
        $data['title'] = 'Hasil Kredensialing';
        $data['user'] = $this->user_model->data()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('berita_acara/index');
        $this->load->view('templates/footer');
    }

    public function cetak_acara()
    {
        // Load the TCPDF library
        $this->load->library('pdf');
        // $id = $this->session->userdata('login_session')['nama'];
        $data['mitra'] = $this->berita_acara_model->data();
        // Create a new PDF instance
        $pdf = new TCPDF();

        // Set PDF content and formatting
        $pdf->AddPage();
        $pdf->writeHTML($this->load->view('berita_acara/berita_acara', $data, true), true, false, true, false, '');

        // Output the PDF to the browser
        ob_end_clean();
        $pdf->Output('Berita_Acara.pdf', 'I');
    }

    public function tambah_pendidikan()
    {
        $data['title'] = 'TAMBAH PENDIDIKAN';
        $this->load->view('vsu_pendidikan/form_tambah');

    }
    public function ubah_acara($id)
    {
        $data['title'] = 'UBAH ACARA';
        // Menampilkan data berdasarkan id
        // Mengambil data ijazah
        $data['acara'] = $this->berita_acara_model->ambil_detail_acara($id)->result();


        // Memastikan variabel $ijazah terdefinisi
        if (empty($data['pendidikan'])) {
            $data['pendidikan'] = array();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('berita_acara/form_ubah');
        $this->load->view('templates/footer');
    }

    public function proses_ubah_acara($id_pengajuan_index)
    {

        $id = $this->berita_acara_model->buat_kode();
        $id_rekomendasi = $this->berita_acara_model->buat_kode_rekomendasi();
        $komite = $this->input->post('komite');
        $mitra = $this->input->post('mitra');
        $status = $this->input->post('status');
        $catatan = $this->input->post('catatan');

        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d");
        $user = $this->berita_acara_model->getuser($id_pengajuan_index);

        $data = array(
            'id_berita' => $id,
            'id_user' => $user[0]->id_user,
            'id_pengajuan_index' => $id_pengajuan_index,
            'komite' => $komite,
            'mitra' => $mitra,
            'tanggal' => $tanggal,
            'hari' => $this->berita_acara_model->gethari($tanggal),
            'nama' => $user[0]->nama,
            'status' => $status
        );

        $data_pengajuan = array(
            'status' => 'Approve',
            'catatan' => $catatan
        );

        $data_kompetensi = array(
            'id_rekomendasi' => $id_rekomendasi,
            'id_pengajuan_index' => $id_pengajuan_index,
            'mitra' => $mitra,
            'komite' => $komite,
            'status' => $status,
            'komentar' => $catatan,
            'tanggal' => $tanggal
        );

        $where = array('id' => $id_pengajuan_index);

        $this->berita_acara_model->ubah_data($where, $data_pengajuan, 'pengajuan_index');

        $this->berita_acara_model->tambah_data($data, 'berita_acara');

        $this->berita_acara_model->tambah_data($data_kompetensi, 'rekomendasi');


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
        redirect('berita_acara/index');
    }



}
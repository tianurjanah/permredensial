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

    public function proses_ubah_acara()
    {

        $id = $this->input->post('id_berita');
        $komite = $this->input->post('komite');
        $mitra = $this->input->post('mitra');
        $tanggal = $this->input->post('tanggal');
        $nama = $this->input->post('nama');
        $status = $this->input->post('status');
        $where = array(
            'id_berita' => $id
        );

        $data = array(
            'id_berita' => $id,
            'komite' => $komite,
            'mitra' => $mitra,
            'tanggal' => $tanggal,
            'nama' => $nama,
            'status' => $status
        );

        $where = array(
            'id_berita' => $id
        );

        $this->berita_acara_model->ubah_data($where, $data, 'berita_acara');
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
        redirect('berita_acara/berita_acara');
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



}
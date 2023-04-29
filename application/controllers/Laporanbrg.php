<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanbrg extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('download');
    $this->load->library('pagination');
    $this->load->helper('cookie');
    $this->load->model('barang_model');
    $this->load->model('perawatan_model');
  }
	
	public function index()
	{
		$data['title'] = 'Laporan Barang';
		$data['laporanbarang'] = $this->barang_model->datalaporan()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('laporanbrg/lap_barang', '$data');
		$this->load->view('templates/footer');
  }

  public function detailbrg($id)
	{
		$data['title'] = 'Laporan Barang';

    //menampilkan data berdasarkan id
    $data['data'] = $this->barang_model->detail_join($id, 'barang')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('laporanbrg/detailbrg');
		$this->load->view('templates/footer');
	}

  public function cetaklaporan()
	{
    $this->load->library('dompdf_gen');
    $user = $this->session->userdata('login_session')['username'];

    $data = array(
			'title' => 'Laporan Barang',
			'barang' => $this->barang_model->datalaporan()->result(),
			'date' => date('d - M - Y'),
      'user' => $user
		);

    $this->load->view('laporanbrg/cetaklaporanbrg', $data);

    $paper_size = 'A4';
    $orientation = 'portrait';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("Laporan_Barang_Inventaris.pdf", array('Attachment'=>0 ));
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanprw extends CI_Controller {

  	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('perawatan_model');
		$this->load->model('barang_model');
		$this->load->model('perbaikan_model');
  	}

	public function index()
	{
		$data['title'] = 'Perawatan';
	    $data['perawatan'] = $this->perawatan_model->dataJoin()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('laporanprw/lap_perawatan', $data);
		$this->load->view('templates/footer');
	}

	public function laporan() 
	{
		
		$b = $this->input->post('bulan');
		$t = $this->input->post('tahun');

		if(isset($_GET['b']) && isset($_GET['y'])){
			$b = $_GET['b'];
			$t = $_GET['y'];
		}

		$data = array(
			'title' => 'Laporan Perawatan',
			'perawatan' => $this->perawatan_model->datalap($b,$t),
			'b' => $b,
			't' => $t,
		);

		$this->load->view('templates/header', $data);
		$this->load->view('laporanprw/lap_perawatan', $data);
		$this->load->view('templates/footer', $data);
	}
	
  	public function detailprw($id)
	{
		$data['title'] = 'Perawatan';
        //menampilkan data berdasarkan id
        $data['data'] = $this->perawatan_model->detail_join($id, 'perawatan')->result();
		$data['barang'] = $this->barang_model->detail_join($id, 'barang')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('laporanprw/detailprw');
		$this->load->view('templates/footer');
	}

	public function filter()
    {
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $submittype = $this->input->post('submittype');
		$user = $this->session->userdata('login_session')['username'];

        if ($submittype == 'filter') {
            if(isset($_GET['tanggalawal']) && isset($_GET['tanggalakhir'])){
				$tanggalawal = $_GET['tanggalakhir'];
				$tanggalakhir = $_GET['tanggalakhir'];
			}
			
			$data = array(
				'title' => 'Laporan Perawatan',
				'perawatan' => $this->perawatan_model->filterbytanggal($tanggalawal,$tanggalakhir),
				'tanggalawal' => $tanggalawal,
				'tanggalakhir' => $tanggalakhir,
			);
	
			$this->load->view('templates/header', $data);
			$this->load->view('laporanprw/lap_perawatan', $data);
			$this->load->view('templates/footer');
			
        } else if ($submittype == 'print') {
            $this->load->library('dompdf_gen');

			$data = array(
				'title' => 'Laporan Perawatan',
				'subtitle' => "Dari tanggal ".$tanggalawal.' Sampai tanggal '.$tanggalakhir,
				'filtertanggal' => $this->perawatan_model->filterbytanggal($tanggalawal,$tanggalakhir),
				'tanggalawal' => $tanggalawal,
				'tanggalakhir' => $tanggalakhir,
				'date' => date('d - M - Y'),
				'user' => $user
			);

			$this->load->view('laporanprw/cetaklaporanprw', $data);

			$paper_size = 'A4';
			$orientation = 'portrait';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Laporan_Perawatan_Barang_Inventaris.pdf", array("Attachment"=> false));

			exit(0);
        }
    }
}
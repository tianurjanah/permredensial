<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanprb extends CI_Controller {

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
		$data['title'] = 'Perbaikan';
	  	$data['perbaikan'] = $this->perbaikan_model->dataJoin()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('laporanprb/lap_perbaikan', $data);
		$this->load->view('templates/footer', $data);
	}

  	public function laporan() 
	{
		$b = $this->input->post('bulan');
		$t = $this->input->post('tahun');

		if(isset($_GET['b']) && isset($_GET['y'])) {
			$b = $_GET['b'];
			$t = $_GET['y'];
		}

		$data = array(
			'title' => 'Laporan Perbaikan',
			'perbaikan' => $this->perbaikan_model->datalap($b,$t),
			'perawatan' => $this->perawatan_model->datalap($b,$t),
			'b' => $b,
			't' => $t,
		);

		$this->load->view('templates/header', $data);
		$this->load->view('laporanprb/lap_perbaikan', $data);
		$this->load->view('templates/footer', $data);
	}

	public function detailprb($id)
	{
		$data['title'] = 'Perbaikan';
        //menampilkan data berdasarkan id
        $data['data'] = $this->perbaikan_model->detail_join($id, 'perbaikan')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('laporanprb/detailprb', $data);
		$this->load->view('templates/footer');
	}

	public function filter()
    {
        $tanggalawal = $this->input->post('tanggalawal');
        $tanggalakhir = $this->input->post('tanggalakhir');
        $submittype = $this->input->post('submittype');
		$user = $this->session->userdata('login_session')['username'];

        if ($submittype == 'filter') {
			if(strtotime($tanggalawal) >= strtotime($tanggalakhir)){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
				<strong>Data Gagal Ditambahkan Karena Data tidak sesuai</strong> 
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
				
			  </div>');
				return redirect('laporanprb/lap_perbaikan');
			}
            // if(isset($_GET['tanggalawal']) && isset($_GET['tanggalakhir'])){
			// 	$tanggalawal = $_GET['tanggalakhir'];
			// 	$tanggalakhir = $_GET['tanggalakhir'];
			// }
			
			$data = array(
				'title' => 'Laporan Perbaikan',
				'perbaikan' => $this->perbaikan_model->filterbytanggal($tanggalawal,$tanggalakhir),
				'tanggalawal' => $tanggalawal,
				'tanggalakhir' => $tanggalakhir,
			);
	
			$this->load->view('templates/header', $data);
			$this->load->view('laporanprb/lap_perbaikan', $data);
			$this->load->view('templates/footer');
			
        } else if ($submittype == 'print') {
            $this->load->library('dompdf_gen');

			$data = array(
				'title' => 'Laporan Perbaikan',
				'subtitle' => "Dari tanggal ".$tanggalawal.' Sampai tanggal '.$tanggalakhir,
				'filterperbaikan' => $this->perbaikan_model->filterbytanggal($tanggalawal,$tanggalakhir),
				'tanggalawal' => $tanggalawal,
				'tanggalakhir' => $tanggalakhir,
				'date' => date('d - M - Y'),
				'user' => $user
			);

			$this->load->view('laporanprb/cetaklaporanprb', $data);

			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Laporan_Perbaikan_Barang_Inventaris.pdf", array("Attachment"=> false));

			exit(0);
        }
    }

	public function tambahLampid()
    {
        $nama_pelapor = $this->input->post('nama_pelapor');
        $tanggal_pelapor = $this->input->post('tanggal_lapor');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenisKelamin');
        $wargaNegara = $this->input->post('wargaNegara');
        $statusKK = $this->input->post('statusKK');
        $tgl_sekarang = date('d-m-Y');

        if (strtotime($tanggal_pelapor) <= strtotime($tgl_sekarang)) {
                if ($input) {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-primary  alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Ditambahkan</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');

                    return redirect('AdminDesa/C_AdminDesa/tampilKelolaLampid');
                } else {

                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger  alert-dismissible fade show" role="alert">
            <strong>Data Gagal Ditambahkan</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
                    return redirect('AdminDesa/C_AdminDesa/tampilKelolaLampid');
                }
            }
        }
}
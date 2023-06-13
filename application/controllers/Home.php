<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->helper('cookie');
		$this->load->model('barang_model');
		$this->load->model('perawatan_model');
		$this->load->model('perbaikan_model');
		$this->load->model('dashboard_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['jmlbarang'] = $this->barang_model->data()->num_rows();
		$data['jmlperawatan'] = $this->perawatan_model->data()->num_rows();
		$data['jmlperbaikan'] = $this->perbaikan_model->data()->num_rows();
		$data['jmlUser'] = $this->user_model->data()->num_rows();

		$data['yearnow'] = date('Y', strtotime('+0 year'));
		$data['previousyear'] = date('Y', strtotime('-1 year'));
		$data['twoyearago'] = date('Y', strtotime('-2 year'));

		$this->load->view('templates/header', $data);
		if ($this->session->userdata('login_session')['level'] == 'Admin') {
			$this->load->view('home/index_admin');
		}
		if ($this->session->userdata('login_session')['level'] == 'Mitra Bestari') {
			$this->load->view('home/index_mitra');
		}
		if ($this->session->userdata('login_session')['level'] == 'Direktur') {
			$this->load->view('home/index_direktur');
		}
		if ($this->session->userdata('login_session')['level'] == 'Pegawai') {
			$this->load->view('home/index_pegawai');
		}
		if ($this->session->userdata('login_session')['level'] == 'Komite') {
			$this->load->view('home/index_komite');
		}
		if ($this->session->userdata('login_session')['level'] == 'SDM') {
			$this->load->view('home/index_komite');
		}
		$this->load->view('templates/footer');

	}

	public function getTotalTransaksi()
	{
		$tahun = $this->input->post('tahun');
		$jmlBM = $this->dashboard_model->dataJoinLike($tahun)->num_rows();

		$data = array('jmlbm' => $jmlBM);
		echo json_encode($data);
	}

	public function getFilterTahun()
	{
		$tahun = $this->input->post('tahun');

		//Januari
		$januari = 'January';
		$last_januari = date('Y-m-t', strtotime($tahun . '-' . $januari . '-01'));
		$first_januari = date('Y-m-01', strtotime($tahun . '-' . $januari . '-01'));
		$bmJanuari = $this->dashboard_model->jmlperbulan($first_januari, $last_januari)->num_rows();

		//Februari
		$februari = 'February';
		$last_februari = date('Y-m-t', strtotime($tahun . '-' . $februari . '-01'));
		$first_februari = date('Y-m-01', strtotime($tahun . '-' . $februari . '-01'));
		$bmFebruari = $this->dashboard_model->jmlperbulan($first_februari, $last_februari)->num_rows();

		//Maret
		$maret = 'March';
		$last_maret = date('Y-m-t', strtotime($tahun . '-' . $maret . '-01'));
		$first_maret = date('Y-m-01', strtotime($tahun . '-' . $maret . '-01'));
		$bmMaret = $this->dashboard_model->jmlperbulan($first_maret, $last_maret)->num_rows();

		//april
		$april = 'April';
		$last_april = date('Y-m-t', strtotime($tahun . '-' . $april . '-01'));
		$first_april = date('Y-m-01', strtotime($tahun . '-' . $april . '-01'));
		$bmApril = $this->dashboard_model->jmlperbulan($first_april, $last_april)->num_rows();

		//mei
		$mei = 'May';
		$last_mei = date('Y-m-t', strtotime($tahun . '-' . $mei . '-01'));
		$first_mei = date('Y-m-01', strtotime($tahun . '-' . $mei . '-01'));
		$bmMei = $this->dashboard_model->jmlperbulan($first_mei, $last_mei)->num_rows();

		//juni
		$juni = 'June';
		$last_juni = date('Y-m-t', strtotime($tahun . '-' . $juni . '-01'));
		$first_juni = date('Y-m-01', strtotime($tahun . '-' . $juni . '-01'));
		$bmJuni = $this->dashboard_model->jmlperbulan($first_juni, $last_juni)->num_rows();

		//juli
		$juli = 'July';
		$last_juli = date('Y-m-t', strtotime($tahun . '-' . $juli . '-01'));
		$first_juli = date('Y-m-01', strtotime($tahun . '-' . $juli . '-01'));
		$bmJuli = $this->dashboard_model->jmlperbulan($first_juli, $last_juli)->num_rows();

		//agustus
		$agustus = 'August';
		$last_agustus = date('Y-m-t', strtotime($tahun . '-' . $agustus . '-01'));
		$first_agustus = date('Y-m-01', strtotime($tahun . '-' . $agustus . '-01'));
		$bmAgustus = $this->dashboard_model->jmlperbulan($first_agustus, $last_agustus)->num_rows();

		//september
		$september = 'September';
		$last_september = date('Y-m-t', strtotime($tahun . '-' . $september . '-01'));
		$first_september = date('Y-m-01', strtotime($tahun . '-' . $september . '-01'));
		$bmSeptember = $this->dashboard_model->jmlperbulan($first_september, $last_september)->num_rows();

		//oktober
		$oktober = 'October';
		$last_oktober = date('Y-m-t', strtotime($tahun . '-' . $oktober . '-01'));
		$first_oktober = date('Y-m-01', strtotime($tahun . '-' . $oktober . '-01'));
		$bmOktober = $this->dashboard_model->jmlperbulan($first_oktober, $last_oktober)->num_rows();

		//november
		$november = 'November';
		$last_november = date('Y-m-t', strtotime($tahun . '-' . $november . '-01'));
		$first_november = date('Y-m-01', strtotime($tahun . '-' . $november . '-01'));
		$bmNovember = $this->dashboard_model->jmlperbulan($first_november, $last_november)->num_rows();

		//desember
		$desember = 'December';
		$last_desember = date('Y-m-t', strtotime($tahun . '-' . $desember . '-01'));
		$first_desember = date('Y-m-01', strtotime($tahun . '-' . $desember . '-01'));
		$bmDesember = $this->dashboard_model->jmlperbulan($first_desember, $last_desember)->num_rows();


		$data = array(
			'bmJanuari' => $bmJanuari,
			'bmFebruari' => $bmFebruari,
			'bmMaret' => $bmMaret,
			'bmApril' => $bmApril,
			'bmMei' => $bmMei,
			'bmJuni' => $bmJuni,
			'bmJuli' => $bmJuli,
			'bmAgustus' => $bmAgustus,
			'bmSeptember' => $bmSeptember,
			'bmOktober' => $bmOktober,
			'bmNovember' => $bmNovember,
			'bmDesember' => $bmDesember
		);
		echo json_encode($data);
	}

}
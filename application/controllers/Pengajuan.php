<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('user_model');
		$this->load->model('kompetensi_model');
	}

	public function index()
	{
		$data['title'] = 'Pengajuan';
		// $data['user'] = $this->user_model->data()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('pengajuan/index');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah Pengajuan';

		$data['bagian1'] = $this->kompetensi_model->bagian1()->result();
		$data['bagian2'] = $this->kompetensi_model->bagian2()->result();
		$data['bagian3'] = $this->kompetensi_model->bagian3()->result();
		$data['bagian4'] = $this->kompetensi_model->bagian4()->result();
		$data['bagian5'] = $this->kompetensi_model->bagian5()->result();
		$data['bagian6'] = $this->kompetensi_model->bagian6()->result();
		$data['bagian7'] = $this->kompetensi_model->bagian7()->result();
		$data['bagian8'] = $this->kompetensi_model->bagian8()->result();
		$data['bagian9'] = $this->kompetensi_model->bagian9()->result();
		$data['bagian9a'] = $this->kompetensi_model->bagian9a()->result();
		$data['bagian9b'] = $this->kompetensi_model->bagian9b()->result();
		$data['bagian9c'] = $this->kompetensi_model->bagian9c()->result();
		$data['bagian9d'] = $this->kompetensi_model->bagian9d()->result();
		$data['bagian9e'] = $this->kompetensi_model->bagian9e()->result();
		$data['bagian9f'] = $this->kompetensi_model->bagian9f()->result();
		$data['bagian9g'] = $this->kompetensi_model->bagian9g()->result();
		$data['bagian9h'] = $this->kompetensi_model->bagian9h()->result();
		$data['bagian9i'] = $this->kompetensi_model->bagian9i()->result();
		$data['bagian9j'] = $this->kompetensi_model->bagian9j()->result();
		$data['bagian10kmr'] = $this->kompetensi_model->bagian10kmr()->result();
		$data['bagian10smltr'] = $this->kompetensi_model->bagian10smltr()->result();
		$data['bagian10cts'] = $this->kompetensi_model->bagian10cts()->result();
		$data['bagian10re'] = $this->kompetensi_model->bagian10re()->result();
		$data['bagian10mvre'] = $this->kompetensi_model->bagian10mvre()->result();
		$data['bagian10brkt'] = $this->kompetensi_model->bagian10brkt()->result();
		$data['bagian10tps2'] = $this->kompetensi_model->bagian10tps2()->result();
		$data['bagian10crh'] = $this->kompetensi_model->bagian10crh()->result();
		$data['bagian10ikkk'] = $this->kompetensi_model->bagian10ikkk()->result();
		$data['bagian10mnjl'] = $this->kompetensi_model->bagian10mnjl()->result();
		$data['bagian11'] = $this->kompetensi_model->bagian11()->result();
		$data['bagian12'] = $this->kompetensi_model->bagian12()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('pengajuan/tambah_pengajuan');
		$this->load->view('templates/footer');
	}

	public function proses_tambah()
	{
		$kode = $this->kompetensi_model->buat_kode();
		$data_index = array(
			'id' => $kode,
			'id_user' => $this->session->userdata('login_session')['id_user'],
			'tanggal_pengajuan' => date("Y-m-d"),
			'kategori' => 'Pengajuan Test'
		);
		$this->kompetensi_model->tambah_data($data_index, 'pengajuan_index');

		$selectedBagian1 = $this->input->post("bagian1");
		// var_dump($selectedBagian1);


		foreach ($selectedBagian1 as $bagian1) {
			// var_dump($bagian1);
			$id_kb = $this->kompetensi_model->ambilidkb($bagian1);

			var_dump($id_kb);
			$data = array(
				'id_pengajuan_index' => $kode,
				'id_nakes' => $this->session->userdata('login_session')['id_user'],
				'id_kompetensi' => $id_kb,
				'status' => 'Diminta'
			);

			$this->kompetensi_model->tambah_data($data, 'pengajuan');
		}
		redirect('pengajuan/index');

	}

}
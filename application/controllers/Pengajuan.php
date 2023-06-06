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
		$id = $this->session->userdata('login_session')['id_user'];
		$data['pengajuan_index'] = $this->kompetensi_model->ambil_detail_pengajuan_index($id)->result();
		$this->load->view('templates/header', $data);
		$this->load->view('pengajuan/index', $data);
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
		$kategori = $this->input->post("kategori");
		$selectedBagian1 = $this->input->post("bagian1");
		$selectedBagian2 = $this->input->post("bagian2");
		$selectedBagian3 = $this->input->post("bagian3");
		$selectedBagian4 = $this->input->post("bagian4");
		$selectedBagian5 = $this->input->post("bagian5");
		$selectedBagian6 = $this->input->post("bagian6");
		$selectedBagian7 = $this->input->post("bagian7");
		$selectedBagian8 = $this->input->post("bagian8");
		$selectedBagian9 = $this->input->post("bagian9");
		$selectedBagian9a = $this->input->post("bagian9a");
		$selectedBagian9b = $this->input->post("bagian9b");
		$selectedBagian9c = $this->input->post("bagian9c");
		$selectedBagian9d = $this->input->post("bagian9d");
		$selectedBagian9e = $this->input->post("bagian9e");
		$selectedBagian9f = $this->input->post("bagian9f");
		$selectedBagian9g = $this->input->post("bagian9g");
		$selectedBagian9h = $this->input->post("bagian9h");
		$selectedBagian9i = $this->input->post("bagian9i");
		$selectedBagian9j = $this->input->post("bagian9j");
		$selectedBagian10kmr = $this->input->post("bagian10kmr");
		$selectedBagian10smltr = $this->input->post("bagian10smltr");
		$selectedBagian10cts = $this->input->post("bagian10cts");
		$selectedBagian10re = $this->input->post("bagian10re");
		$selectedBagian10mvre = $this->input->post("bagian10mvre");
		$selectedBagian10brkt = $this->input->post("bagian10brkt");
		$selectedBagian10tps2 = $this->input->post("bagian10tps2");
		$selectedBagian10crh = $this->input->post("bagian10crh");
		$selectedBagian10ikkk = $this->input->post("bagian10ikkk");
		$selectedBagian10mnjl = $this->input->post("bagian10mnjl");
		$selectedBagian11 = $this->input->post("bagian11");
		$selectedBagian12 = $this->input->post("bagian12");
		date_default_timezone_set('Asia/Jakarta');

		$kode = $this->kompetensi_model->buat_kode();
		$data_index = array(
			'id' => $kode,
			'id_user' => $this->session->userdata('login_session')['id_user'],
			'tanggal_pengajuan' => date("Y-m-d H:i:s"),
			'kategori' => $kategori,
			'status' => 'Diminta'
		);
		$this->kompetensi_model->tambah_data($data_index, 'pengajuan_index');

		// BAGIAN 1
		if (!empty($selectedBagian1)) {
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
		}

		// BAGIAN 2
		if (!empty($selectedBagian2)) {
			foreach ($selectedBagian2 as $bagian2) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian2);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 3
		if (!empty($selectedBagian3)) {
			foreach ($selectedBagian3 as $bagian3) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian3);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 4
		if (!empty($selectedBagian4)) {
			foreach ($selectedBagian4 as $bagian4) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian4);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 5
		if (!empty($selectedBagian5)) {
			foreach ($selectedBagian5 as $bagian5) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian5);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 6
		if (!empty($selectedBagian6)) {
			foreach ($selectedBagian6 as $bagian6) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian6);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 7
		if (!empty($selectedBagian7)) {
			foreach ($selectedBagian7 as $bagian7) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian7);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 8
		if (!empty($selectedBagian8)) {
			foreach ($selectedBagian8 as $bagian8) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian8);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9
		if (!empty($selectedBagian9)) {
			foreach ($selectedBagian9 as $bagian9) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9A
		if (!empty($selectedBagian9a)) {
			foreach ($selectedBagian9a as $bagian9a) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9a);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9B
		if (!empty($selectedBagian9b)) {
			foreach ($selectedBagian9b as $bagian9b) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9b);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9C
		if (!empty($selectedBagian9c)) {
			foreach ($selectedBagian9c as $bagian9c) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9c);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9D
		if (!empty($selectedBagian9d)) {
			foreach ($selectedBagian9d as $bagian9d) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9d);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9E
		if (!empty($selectedBagian9e)) {
			foreach ($selectedBagian9e as $bagian9e) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9e);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9F
		if (!empty($selectedBagian9f)) {
			foreach ($selectedBagian9f as $bagian9f) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9f);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9G
		if (!empty($selectedBagian9g)) {
			foreach ($selectedBagian9g as $bagian9g) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9g);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9H
		if (!empty($selectedBagian9h)) {
			foreach ($selectedBagian9h as $bagian9h) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9h);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9I
		if (!empty($selectedBagian9i)) {
			foreach ($selectedBagian9i as $bagian9i) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9i);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 9J
		if (!empty($selectedBagian9j)) {
			foreach ($selectedBagian9j as $bagian9j) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian9j);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10KMR
		if (!empty($selectedBagian10kmr)) {
			foreach ($selectedBagian10kmr as $bagian10kmr) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10kmr);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10SMLTR
		if (!empty($selectedBagian10smltr)) {
			foreach ($selectedBagian10smltr as $bagian10smltr) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10smltr);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10CTS
		if (!empty($selectedBagian10cts)) {
			foreach ($selectedBagian10cts as $bagian10cts) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10cts);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10RE
		if (!empty($selectedBagian10re)) {
			foreach ($selectedBagian10re as $bagian10re) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10re);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10MVRE
		if (!empty($selectedBagian10mvre)) {
			foreach ($selectedBagian10mvre as $bagian10mvre) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10mvre);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10BRKT
		if (!empty($selectedBagian10brkt)) {
			foreach ($selectedBagian10brkt as $bagian10brkt) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10brkt);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10TPS2
		if (!empty($selectedBagian10tps2)) {
			foreach ($selectedBagian10tps2 as $bagian10tps2) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10tps2);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10RCH
		if (!empty($selectedBagian10crh)) {
			foreach ($selectedBagian10crh as $bagian10crh) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10crh);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10IKKK
		if (!empty($selectedBagian10ikkk)) {
			foreach ($selectedBagian10ikkk as $bagian10ikkk) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10ikkk);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 10MNJL
		if (!empty($selectedBagian10mnjl)) {
			foreach ($selectedBagian10mnjl as $bagian10mnjl) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian10mnjl);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 11
		if (!empty($selectedBagian11)) {
			foreach ($selectedBagian11 as $bagian11) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian11);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		// BAGIAN 12
		if (!empty($selectedBagian12)) {
			foreach ($selectedBagian12 as $bagian12) {
				// var_dump($bagian1);
				$id_kb = $this->kompetensi_model->ambilidkb($bagian12);

				var_dump($id_kb);
				$data = array(
					'id_pengajuan_index' => $kode,
					'id_nakes' => $this->session->userdata('login_session')['id_user'],
					'id_kompetensi' => $id_kb,
					'status' => 'Diminta'
				);

				$this->kompetensi_model->tambah_data($data, 'pengajuan');
			}
		}

		redirect('pengajuan/index');

	}

}
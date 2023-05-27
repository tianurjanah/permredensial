<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('barang_model');
		$this->load->model('perawatan_model');
		$this->load->model('kategori_model');
		$this->load->model('user_model');
  	}
	
	public function index()
	{
		$data['title'] = 'Biodata Diri';
		$data['barang'] = $this->barang_model->dataJoin()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('biodatadiri/index', '$data');
		$this->load->view('templates/footer');
    }

    public function tambah($id)
	{
        $data['title'] = 'Pengajuan';
		 //data untuk select
		$data['kategori'] = $this->kategori_model->data()->result();
		$where = array('id_user'=>$id);
		$data['user'] = $this->user_model->detail_data($where, 'user')->result();

		$data['ktg'] = $this->kategori_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		// $this->load->view('barang/form_tambah');
		$this->load->view('biodatadiri/index');
		$this->load->view('templates/footer');
    }
}
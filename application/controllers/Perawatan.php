<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawatan extends CI_Controller {

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
		$this->load->view('perawatan/index');
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
        $data['title'] = 'Perawatan';
        
        //data untuk select
		$data['perawatan'] = $this->perawatan_model->data()->result();
		$data['barang'] = $this->barang_model->data()->result();
		//jml
		$data['jmlbarang'] = $this->barang_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('perawatan/form_tambah');
		$this->load->view('templates/footer');
    }
    
	public function ubah($id)
	{
        $data['title'] = 'Perawatan';

        //menampilkan data berdasarkan id
		$where = array('kode_perawatan'=>$id);
        $data['data'] = $this->perawatan_model->detail_join($id)->result();
        $data['barang'] = $this->barang_model->data()->result();
        //jml
		$data['jmlbarang'] = $this->barang_model->data()->num_rows();
        
		$this->load->view('templates/header', $data);
		$this->load->view('perawatan/form_ubah');
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
			'title' => 'perawatan',
			'perawatan' => $this->perawatan_model->datalap($b,$t),
			'b' => $b,
			't' => $t,
		);

		$this->load->view('templates/header', $data);
		$this->load->view('perawatan/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function detail($id)
	{
		$data['title'] = 'Perawatan';
        //menampilkan data berdasarkan id
        $data['data'] = $this->perawatan_model->detail_join($id, 'perawatan')->result();
		$data['barang'] = $this->barang_model->detail_join($id, 'barang')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('perawatan/detail');
		$this->load->view('templates/footer');
	}

	public function proses_tambah()
	{
		// $kode = $this->input->post('kode_perawatan');
		$kode_perawatan = $this->perawatan_model->buat_kode(); 
		$id_barang = $this->input->post('id_barang');
		$nama = $this->input->post('nama');
		$tanggal_perawatan = $this->input->post('tanggal_perawatan');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
		
		$bulan = date("n",strtotime($tanggal_perawatan));
		$tahun = date("Y",strtotime($tanggal_perawatan));

		$data=array(
			'nama'=>$nama,
			'kode_perawatan'=>$kode_perawatan,
			'kode_barang'=>$id_barang,
			'tanggal_perawatan'=>$tanggal_perawatan,
			'status'=>$status,
			'keterangan'=>$keterangan
		);

		$this->perawatan_model->tambah_data($data, 'perawatan');
		$this->session->set_flashdata('Pesan','
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
    	redirect('perawatan/laporan?b='.$bulan.'&y='.$tahun, 'refresh');
	}

	public function proses_ubah()
	{
		$kode = $this->input->post('kode_perawatan');
        // $kode_perawatan = $this->input->post('kode_perawatan'); 
		// $kode_barang = $this->input->post('kode_barang');
		$tanggal_perawatan = $this->input->post('tanggal_perawatan');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
		
		$bulan = date("n",strtotime($tanggal_perawatan));
		$tahun = date("Y",strtotime($tanggal_perawatan));

		$data=array(
			// 'kode_perawatan'=> $kode_perawatan,
			// 'kode_barang'=> $kode_barang,
			'tanggal_perawatan'=>$tanggal_perawatan,
			'status'=>$status,
			'keterangan'=>$keterangan
		);

		$where = array(
			'kode_perawatan'=>$kode
		);

		$this->perawatan_model->ubah_data1($where, $data, 'perawatan');
		$this->session->set_flashdata('Pesan','
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
    	redirect('perawatan/laporan?b='.$bulan.'&y='.$tahun);
	}

	public function proses_hapus($id,$bulan,$tahun)
	{
		
		$where = array('kode_perawatan' => $id );
		
		$this->perawatan_model->hapus_data($where, 'perawatan');
		$this->session->set_flashdata('Pesan','
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
		redirect('perawatan/laporan?b='.$bulan.'&y='.$tahun);
	}

	public function getData()
	{
		$id = $this->input->post('id');
    	$where = array('kode_perawatan' => $id );
    	$data = $this->perawatan_model->detail_data($where, 'perawatan')->result();
    	echo json_encode($data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perbaikan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
		$this->load->library('pagination');
		$this->load->helper('cookie');
		$this->load->model('perbaikan_model');
		$this->load->model('perawatan_model');
		$this->load->model('barang_model');
  	}

	public function index()
	{
		$data['title'] = 'Perbaikan';
	    $data['perbaikan'] = $this->perbaikan_model->dataJoin()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('perbaikan/index', $data);
		$this->load->view('templates/footer', $data);
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
		$this->load->view('perbaikan/form_ubahprw');
		$this->load->view('templates/footer');
	}

	public function ubahprw($id)
	{
        $data['title'] = 'Perbaikan';

        //menampilkan data berdasarkan id
		$where = array('kode_perbaikan'=>$id);
        $data['data'] = $this->perbaikan_model->detail_join($id)->result();
		$data['perbaikan'] = $this->perbaikan_model->data()->result();
        
		$this->load->view('templates/header', $data);
		$this->load->view('perbaikan/form_ubahprb');
		$this->load->view('templates/footer');
	}

	public function detailprw($id)
	{
		$data['title'] = 'Perbaikan';
        //menampilkan data berdasarkan id
		$data['data'] = $this->perawatan_model->detail_join($id, 'perawatan')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('perbaikan/detailprw');
		$this->load->view('templates/footer');
	}

	public function detailprb($id)
	{
		$data['title'] = 'Perbaikan';
        //menampilkan data berdasarkan id
        $data['data'] = $this->perbaikan_model->detail_join($id, 'perbaikan')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('perbaikan/detailprw1', $data);
		$this->load->view('templates/footer');
	}

	// public function proses_ubahprw()
	// {
	// 	$kode = $this->input->post('id_perbaikan');
	// 	$kode_perbaikan = $this->perbaikan_model->buat_kode(); 
	// 	$kode_barangprb = $this->input->post('kode_barangprb');
	// 	$kode_perawatan = $this->input->post('kode_perawatan');
	// 	$namaprb = $this->input->post('namaprb');
	// 	$tanggal_perbaikan = $this->input->post('tanggal_perbaikan');
	// 	$statusprb = $this->input->post('statusprb');
	// 	$kerusakan = $this->input->post('kerusakan');
		
	// 	$bulan = date("n",strtotime($tanggal_perbaikan));
	// 	$tahun = date("Y",strtotime($tanggal_perbaikan));

	// 	$data=array(
	// 		'kode_perbaikan'=>$kode_perbaikan,
	// 		'kode_barangprb'=>$kode_barangprb,
	// 		'kode_perawatan'=>$kode_perawatan,
	// 		'namaprb'=>$namaprb,
	// 		'tanggal_perbaikan'=>$tanggal_perbaikan,
	// 		'statusprb'=>$statusprb,
	// 		'kerusakan'=>$kerusakan
	// 	);

	// 	$this->perbaikan_model->tambah_data($data, 'perbaikan');
	// 	$this->session->set_flashdata('Pesan','
	// 	<script>
	// 	$(document).ready(function() {
	// 		swal.fire({
	// 			title: "Berhasil ditambahkan!",
	// 			icon: "success",
	// 			confirmButtonColor: "#4e73df",
	// 		});
	// 	});
	// 	</script>
	// 	');
    // 	redirect('perbaikan/laporan?b='.$bulan.'&y='.$tahun, 'refresh');
	// }

	public function proses_ubahprw()
	{

		$kode = $this->input->post('kode_perbaikan');
		$kode_perbaikan = $this->perbaikan_model->buat_kode(); 
		$kode_barangprb = $this->input->post('kode_barangprb');
		$kode_perawatan = $this->input->post('kode_perawatan');
		$namaprb = $this->input->post('namaprb');
		$tanggal_perbaikan = $this->input->post('tanggal_perbaikan');
		$statusprb = $this->input->post('statusprb');
		$kerusakan = $this->input->post('kerusakan');
		
		$bulan = date("n",strtotime($tanggal_perbaikan));
		$tahun = date("Y",strtotime($tanggal_perbaikan));

		$data=array(
			'kode_perbaikan'=>$kode_perbaikan,
			'kode_barangprb'=>$kode_barangprb,
			'kode_perawatan'=>$kode_perawatan,
			'namaprb'=>$namaprb,
			'tanggal_perbaikan'=>$tanggal_perbaikan,
			'statusprb'=>$statusprb,
			'kerusakan'=>$kerusakan
		);
		
		$perawatan = sizeof($this->perbaikan_model->get($kode_perawatan));
		
		if($perawatan == 0){
			$this->perbaikan_model->tambah_data($data, 'perbaikan');
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
			redirect('perbaikan/laporan?b='.$bulan.'&y='.$tahun, 'refresh');
		} else{
			$this->session->set_flashdata('Pesan','
			<script>
			$(document).ready(function() {
				swal.fire({
					title: "Perawatan Telah Ditambahkan Sebelumnya!",
					icon: "warning",
					confirmButtonColor: "#4e73df",
				});
			});
			</script>
			');
			redirect('perbaikan/laporan?b='.$bulan.'&y='.$tahun, 'refresh');
		}
		
	}

	public function proses_ubah()
	{
		$kode = $this->input->post('kode_perbaikan');
		$tanggal_perbaikan = $this->input->post('tanggal_perbaikan');
		$statusprb = $this->input->post('statusprb');
		$penanganan = $this->input->post('penanganan');
		$kebutuhan_komponen = $this->input->post('kebutuhan_komponen');
		$total_biaya = $this->input->post('total_biaya');
		$kode_perawatan = $this->input->post('kode_perawatan');
		
		$bulan = date("n",strtotime($tanggal_perbaikan));
		$tahun = date("Y",strtotime($tanggal_perbaikan));

		$data=array(
			'tanggal_perbaikan'=>$tanggal_perbaikan,
			'statusprb'=>$statusprb,
			'penanganan'=>$penanganan,
			'kebutuhan_komponen'=>$kebutuhan_komponen,
			'total_biaya'=>$total_biaya
		);

		$where = array(
			'kode_perbaikan'=>$kode
		);
		
		$data2=array(
			
			'status'=>"Diperbaiki"
		);

		$this->perbaikan_model->ubah_data($where, $data, 'perbaikan');
		$this->perawatan_model->ubah_data($kode_perawatan, $data2, 'perawatan');
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
    	redirect('perbaikan/laporan?b='.$bulan.'&y='.$tahun);
	}

	public function laporan() 
	{
		$b = $this->input->post('bulan');
		$t = $this->input->post('tahun');
		$st = 'Perlu Diperbaiki';

		if(isset($_GET['b']) && isset($_GET['y'])) {
			$b = $_GET['b'];
			$t = $_GET['y'];
		}

		$data = array(
			'title' => 'Perbaikan',
			'perbaikan' => $this->perbaikan_model->datalap($b,$t),
			'perawatan' => $this->perawatan_model->datalaprb($b,$t,$st),
			'b' => $b,
			't' => $t,
			'st' => $st,
		);

		$this->load->view('templates/header', $data);
		$this->load->view('perbaikan/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function getData()
	{
		$id = $this->input->post('id');
    	$where = array('kode_perbaikan' => $id );
    	$data = $this->perbaikan_model->detail_data($where, 'perbaikan')->result();
    	echo json_encode($data);
	}
}
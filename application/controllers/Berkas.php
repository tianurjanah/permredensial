<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas extends CI_Controller {

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
		$this->load->model('berkas_model');
  	}
	
	public function index()
	{
		$data['title'] = 'BERKAS PENGAJUAN';
		$data['biodata'] = $this->berkas_model->dataJoin()->result();

		$data['suratlamaran'] = $this->berkas_model->getSuratlamaranPath();
		$data['user'] = $this->user_model->data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('berkas/index', '$data');
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
		$this->load->view('barang/formulir');
		$this->load->view('templates/footer');
    }
    
    public function ubah($id)
	{
        $data['title'] = 'Pengajuan';

        //menampilkan data berdasarkan id
		$where = array('id_barang'=>$id);
        $data['data'] = $this->barang_model->detail_data($where, 'barang')->result();

		$data['kategori'] = $this->kategori_model->data()->result();

		$data['ktg'] = $this->kategori_model->data()->num_rows();

		$this->load->view('templates/header', $data);
		$this->load->view('barang/form_ubah');
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title'] = 'Pengajuan';

        //menampilkan data berdasarkan id
        $data['data'] = $this->barang_model->detail_join($id, 'barang')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('barang/detail');
		$this->load->view('templates/footer');
	}

	public function proses_tambah()
	{

        $config['upload_path']   = './assets/upload/berkas_biodata/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';
	
		$namaFile = $_FILES['photo']['name'];
		$error = $_FILES['photo']['error'];

        $this->load->library('upload', $config);
        
		$kode = 	$this->berkas_model->buat_kode();
		$nama_barang = $this->input->post('nama_barang');
		$posisi = 	$this->input->post('posisi');
		$kategori = 	$this->input->post('kategori');
        $tanggal_masuk = 	$this->input->post('tanggal_masuk');
        
        if ($namaFile == '') {
            $ganti = 'box.png';
        }else{
          	if (! $this->upload->do_upload('photo')&&('file')) {
				$error = $this->upload->display_errors();
				redirect('barang/tambah');
          	}
          	else{
				$data = array('photo' => $this->upload->data());
				$nama_file= $data['photo']['file_name'];
				$ganti = str_replace(" ", "_", $nama_file);
          	}
      	}
		
		$data=array(
			'id_barang'=> $kode,
			'nama_barang'=> $nama_barang,
			'posisi'=> $posisi,
			'kategori'=> $kategori,
            'tanggal_masuk'=> $tanggal_masuk,
            'foto' => $ganti
		);

		$this->barang_model->tambah_data($data, 'barang');
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
    	redirect('barang');
	}

	public function proses_ubah()
	{
        $config['upload_path']   = './assets/upload/barang/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';
	
		$namaFile = $_FILES['photo']['name'];
		$error = $_FILES['photo']['error'];
		
		$namaLamaran = $_FILES['suratlamaran']['name'];
		$errorLamaran = $_FILES['suratlamaran']['error'];


        $this->load->library('upload', $config);
        
		$kode =    $this->input->post('idbarang');
		$barang =  $this->input->post('barang');
		$posisi = 	$this->input->post('posisi');
		$kategori = 	$this->input->post('kategori');
        $tanggal_masuk = 	$this->input->post('tanggal_masuk');
        
        $flama = $this->input->post('fotoLama');

        if ($namaFile == '' ) {
            $ganti = $flama;
        }else{
          	if (! $this->upload->do_upload('photo')) {
				$error = $this->upload->display_errors();
				redirect('barang/ubah/'.$kode);
			}
			else{
  
				$data = array('photo' => $this->upload->data());
				$nama_file= $data['photo']['file_name'];
				$ganti = str_replace(" ", "_", $nama_file);
				if($flama == 'box.png'){

            }else{
              	unlink('./assets/upload/barang/'.$flama.'');
            }
  
          }

      	}
		
		$data=array(
			'nama_barang'=> $barang,
			'posisi'=> $posisi,
			'kategori'=> $kategori,
            'tanggal_masuk'=> $tanggal_masuk,
            'foto' => $ganti
		);

		$where = array(
			'id_barang'=>$kode
		);

		$this->barang_model->ubah_data($where, $data, 'barang');
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
    	redirect('barang');
	}

	public function proses_hapus($id)
	{
		$where = array('id_barang' => $id );
		$foto = $this->barang_model->ambilFoto($where);
		if($foto){
			if($foto == 'box.png'){

			}else{
				unlink('./assets/upload/barang/'.$foto.'');
			}
			
			$this->barang_model->hapus_data($where, 'barang');
		}

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
		redirect('barang');
	}

	public function getData()
	{
		$id = $this->input->post('id');
    	$where = array('id_barang' => $id );
    	$data = $this->barang_model->detail_data($where, 'barang')->result();
    	echo json_encode($data);
	}

	public function biodata_tambah(){
    $config['upload_path']   = './assets/upload/berkas_biodata/';
    $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF|tiff|TIFF|PDF|pdf';

    $kode = $this->berkas_model->buat_kode();
    $user = $this->session->userdata('login_session')['id_user'];

    $this->load->library('upload', $config);

    $data = array(
        'id_biodata' => $kode,
        'id_user' => $user
    );

    // Proses upload dan perubahan file surat lamaran
    if (!empty($_FILES['suratlamaran']['name'])) {
        if (!$this->upload->do_upload('suratlamaran')) {
            $errorLamaran = $this->upload->display_errors();
            redirect('berkas/index');
        } else {
            $datalamaran = array('suratlamaran' => $this->upload->data());
            $nama_file_lamaran = $datalamaran['suratlamaran']['file_name'];
            $gantilamaran = str_replace(" ", "_", $nama_file_lamaran);
            $data['surat_lamaran'] = $gantilamaran;
        }
    }

    // Proses upload dan perubahan file CV
    if (!empty($_FILES['currivitae']['name'])) {
        if (!$this->upload->do_upload('currivitae')) {
            $errorCV = $this->upload->display_errors();
            redirect('berkas/index');
        } else {
            $datacv = array('currivitae' => $this->upload->data());
            $nama_file_cv = $datacv['currivitae']['file_name'];
            $ganticv = str_replace(" ", "_", $nama_file_cv);
            $data['cv'] = $ganticv;
        }
    }

    // Proses upload dan perubahan file formulir data karyawan
    if (!empty($_FILES['datakaryawan']['name'])) {
        if (!$this->upload->do_upload('datakaryawan')) {
            $errordatakaryawan = $this->upload->display_errors();
            redirect('berkas/index');
        } else {
            $datakaryawan = array('datakaryawan' => $this->upload->data());
            $nama_file_datakaryawan = $datakaryawan['datakaryawan']['file_name'];
            $gantidatakaryawan = str_replace(" ", "_", $nama_file_datakaryawan);
            $data['formulir_data'] = $gantidatakaryawan;
        }
    }

    // Proses upload dan perubahan file scan KTP
    if (!empty($_FILES['scanktp']['name'])) {
        if (!$this->upload->do_upload('scanktp')) {
            $errorscanktp = $this->upload->display_errors();
            redirect('berkas/index');
        } else {
            $datascan = array('scanktp' => $this->upload->data());
            $nama_file_scanktp = $datascan['scanktp']['file_name'];
            $gantiscanktp = str_replace(" ", "_", $nama_file_scanktp);
            $data['ktp'] = $gantiscanktp;
        }
    }

    $where = array('id_user' => $this->session->userdata('login_session')['id_user']);
    $existingData = $this->berkas_model->detail_data($where, 'biodata');
    if ($existingData) {
        $this->berkas_model->ubah_data($where, $data, 'biodata');
        $pesan = 'Data berhasil diubah!';
    } else {
        $this->berkas_model->tambah_data($data, 'biodata');
        $pesan = 'Data berhasil ditambahkan!';
    }

    $this->session->set_flashdata('Pesan', '
        <script>
        $(document).ready(function() {
            swal.fire({
                title: "Berhasil!",
                text: "' . $pesan . '",
                icon: "success",
                confirmButtonColor: "#4e73df",
            });
        });
        </script>
    ');

    redirect('berkas/index');
	}

	// ========================================================================//
		
	public function berkas_ijazah()
	{
		$data['title'] = 'BERKAS PENGAJUAN';
		$data['biodata'] = $this->berkas_model->dataJoin()->result();
		$data['user'] = $this->user_model->data()->result();

		$data['suratlamaran'] = $this->berkas_model->getSuratlamaranPath();

		$this->load->view('berkas_ijazah/index', $data);
    }

	public function tambah_ijazah()
	{
        $data['title'] = 'Pengajuan';
		 //data untuk select
		$data['kategori'] = $this->kategori_model->data()->result();
		$where = array('id_user'=>$this->session->userdata('login_session')['id_user']);
		$data['user'] = $this->user_model->detail_data($where, 'user')->result();

		$data['ktg'] = $this->kategori_model->data()->num_rows();

		$this->load->view('berkas_ijazah/form_tambah');
    }
}
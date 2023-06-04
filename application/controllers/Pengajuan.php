<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	public function __construct() {
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

	public function ubah($id)
	{
		$data['title'] = 'User';
		$where = array('id_user'=>$id);
		$data['user'] = $this->user_model->detail_data($where, 'user')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('user/form_ubah');
		$this->load->view('templates/footer');
	}

	public function detail_data($id)
  	{
		$data['title'] = 'User';

		$where = array('id_user'=>$id);
		$data['data'] = $this->user_model->detail_data($where, 'user')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('user/detail');
		$this->load->view('templates/footer');
  	}

	public function proses_hapus($id)
	{
		$where = array('id_user' => $id );
		$foto = $this->user_model->ambilFoto($where);
		if($foto){
			if($foto == 'user.png'){

			}else{
				unlink('./assets/upload/pengguna/'.$foto.'');
			}
			
			$this->user_model->hapus_data($where, 'user');
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
		redirect('user');
	}
	
	public function proses_tambah()
	{
		
		$config['upload_path']   = './assets/upload/pengguna/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF';
	
		$namaFile = $_FILES['photo']['name'];
		$error = $_FILES['photo']['error'];

		$this->load->library('upload', $config);
		
		$kode = $this->user_model->buat_kode(); 
		$namaL = $this->input->post('namaL');
		$user = $this->input->post('user');
		$notelp = $this->input->post('notelp');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$pass = $this->input->post('pwd');
		$status = "Aktif";
	
	
		if ($namaFile == '') {
		  	$ganti = 'user.png';
		}else{
			if (! $this->upload->do_upload('photo')) {
			  $error = $this->upload->display_errors();
		  	redirect('user/tambah');
			}
			else{
	
			  $data = array('photo' => $this->upload->data());
			  $nama_file= $data['photo']['file_name'];
			  $ganti = str_replace(" ", "_", $nama_file);
	
	
			}

		}

		$data=array(
			'id_user'=>$kode,
			'nama'=>$namaL,
			'username'=>$user,
			'notelp'=>$notelp,
			'email'=>$email,
			'level'=>$level,
			'password'=>md5($pass),
			'status'=>$status,
			'foto'=>$ganti
				);
	  
		  $this->user_model->tambah_data($data, 'user');
		  $this->session->set_flashdata('Pesan','
			<script>
			$(document).ready(function() {
			swal.fire({
				title: "Berhasil ditambah!",
				icon: "success",
				confirmButtonColor: "#4e73df",
			});
			});
			</script>
			');
		  redirect('user');

	}

	public function proses_ubah()
	{
		$config['upload_path']   = './assets/upload/pengguna/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF';
	
		$namaFile = $_FILES['photo']['name'];
		$error = $_FILES['photo']['error'];

		$this->load->library('upload', $config);
		
		$kode = $this->input->post('iduser');
		$namaL = $this->input->post('namaL');
		$user = $this->input->post('user');
		$notelp = $this->input->post('notelp');
		$email = $this->input->post('email');
		$level = $this->input->post('level');
		$status = $this->input->post('status');
		$pass = $this->input->post('pwd');
		$passLama = $this->input->post('pwdLama');

		$flama = $this->input->post('fotoLama');

		if($pass == ''){
			$passUpdate = $passLama;
		}else{
			$passUpdate = md5($pass);
		}
	
	
		if ($namaFile == '') {
		  	$ganti = $flama;
		}else{
			if (! $this->upload->do_upload('photo')) {
			  $error = $this->upload->display_errors();
		  	redirect('user/ubah/'.$kode);
			}
			else{
			  $data = array('photo' => $this->upload->data());
			  $nama_file= $data['photo']['file_name'];
			  $ganti = str_replace(" ", "_", $nama_file);
			  if($flama !== 'user.png'){
				unlink('./assets/upload/pengguna/'.$flama.'');
			  }
	
			}

		}

		$data=array(
			'nama'=>$namaL,
			'username'=>$user,
			'notelp'=>$notelp,
			'email'=>$email,
			'level'=>$level,
			'password'=>$passUpdate,
			'status'=>$status,
			'foto'=>$ganti
				);

		$where = array('id_user'=>$kode);
	  
		  $this->user_model->ubah_databio($where, $data, 'user');
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
		  redirect('user');
	}
    
}
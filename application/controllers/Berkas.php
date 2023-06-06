<?php
ob_start();
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas extends CI_Controller
{

	public function __construct()
	{
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
		$id = $this->session->userdata('login_session')['id_user'];
		$data['biodata'] = $this->berkas_model->ambil_data_barang($id)->result();
		$data['user'] = $this->user_model->data()->result();
		$data['sehat'] = $this->berkas_model->ambil_data_sehat($id)->result();
		$this->load->view('templates/header', $data);
		$this->load->view('berkas/index', $data);
		$this->load->view('templates/footer');
	}

	public function biodata_tambah()
	{

		$config['upload_path'] = './assets/upload/berkas_biodata/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

		$namaFile_lamaran = $_FILES['suratlamaran']['name'];
		$namaFile_cv = $_FILES['currivitae']['name'];
		$namaFile_formulir = $_FILES['datakaryawan']['name'];
		$namaFile_ktp = $_FILES['scanktp']['name'];
		$errorlamaran = $_FILES['suratlamaran']['error'];
		$errorcv = $_FILES['currivitae']['error'];
		$errorformulir = $_FILES['datakaryawan']['error'];
		$errorktp = $_FILES['scanktp']['error'];

		$this->load->library('upload', $config);

		$kode = $this->berkas_model->buat_kode();
		$user = $this->session->userdata('login_session')['id_user'];

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

	//=================== TAMBAH IJAZAH
	public function berkas_ijazah()
	{
		$data['title'] = 'BERKAS PENGAJUAN';
		$id = $this->session->userdata('login_session')['id_user'];
		$data['ijazah'] = $this->berkas_model->ambil_data_ijazah($id)->result();
		$data['user'] = $this->user_model->data()->result();

		$this->load->view('berkas_ijazah/index', $data);
	}

	public function tambah_ijazah()
	{
		$data['title'] = 'Pengajuan';
		//data untuk select
		$data['kategori'] = $this->kategori_model->data()->result();

		$data['ktg'] = $this->kategori_model->data()->num_rows();

		$this->load->view('berkas_ijazah/form_tambah');
	}

	public function ubah_ijazah($nomor)
	{
		$data['title'] = 'UBAH IJAZAH';

		// Mengambil data ijazah
		$data['ijazah'] = $this->berkas_model->ambil_detail_ijazah($nomor)->result();

		// Memastikan variabel $ijazah terdefinisi
		if (empty($data['ijazah'])) {
			$data['ijazah'] = array();
		}

		$this->load->view('berkas_ijazah/form_ubah', $data);
	}


	public function detail($id)
	{
		$data['title'] = 'Surat Izin';

		//menampilkan data berdasarkan id
		$data['data'] = $this->berkas_model-- > detail_join($id, 'ijazah')->result();

		$this->load->view('berkas_ijazah/detail');
	}

	public function proses_tambah_ijazah()
	{

		$config['upload_path'] = './assets/upload/berkas_ijazah/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

		$namaFile_lampiran = $_FILES['lampiran']['name'];
		$namaFile_transkip = $_FILES['transkip']['name'];
		$errorlampiran = $_FILES['lampiran']['error'];
		$errortranskip = $_FILES['transkip']['error'];


		$this->load->library('upload', $config);

		$nomor_ijazah = $this->input->post('nomor_ijazah');
		$user = $this->session->userdata('login_session')['id_user'];
		$gelar = $this->input->post('gelar');

		if ($namaFile_lampiran == '') {
			$ganti_lampiran = 'cloud.png';
		} else {
			if (!$this->upload->do_upload('lampiran')) {
				$error = $this->upload->display_errors();
				redirect('berkas_ijazah/form_tambah');
			} else {
				$data = array('lampiran' => $this->upload->data());
				$nama_file_lampiran = $data['lampiran']['file_name'];
				$ganti_lampiran = str_replace(" ", "_", $nama_file_lampiran);
			}
		}

		if ($namaFile_transkip == '') {
			$ganti_transkip = 'cloud.png';
		} else {
			if (!$this->upload->do_upload('transkip')) {
				$error = $this->upload->display_errors();
				redirect('berkas_ijazah/form_tambah');
			} else {
				$data = array('transkip' => $this->upload->data());
				$nama_file_transkip = $data['transkip']['file_name'];
				$ganti_transkip = str_replace(" ", "_", $nama_file_transkip);
			}
		}

		$data = array(
			'nomor_ijazah' => $nomor_ijazah,
			'id_user' => $user,
			'gelar' => $gelar,
			'lampiran' => $ganti_lampiran,
			'transkip' => $ganti_transkip
		);

		$this->berkas_model->tambah_data_ijazah($data, 'ijazah');
		$this->session->set_flashdata('Pesan', '
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
		redirect('berkas/berkas_ijazah');
	}

	public function proses_ubah_ijazah()
	{
		$config['upload_path'] = './assets/upload/berkas_ijazah/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

		$namaFile_lampiran = $_FILES['lampiran']['name'];
		$namaFile_transkip = $_FILES['transkip']['name'];
		$errorLampiran = $_FILES['lampiran']['error'];
		$errorTranskip = $_FILES['transkip']['error'];

		$this->load->library('upload', $config);

		$nomor_ijazah = $this->input->post('nomor_ijazah');
		$user = $this->session->userdata('login_session')['id_user'];
		$gelar = $this->input->post('gelar');
		$where = array(
			'nomor_ijazah' => $nomor_ijazah
		);
		$lampiranlama = $this->berkas_model->ambilLampiran_ijazah($where);
		$transkiplama = $this->berkas_model->ambilTranskip_ijazah($where);

		if (!empty($_FILES['lampiran']['name'])) {
			if (!$this->upload->do_upload('lampiran')) {
				$errorLampiran = $this->upload->display_errors();
				redirect('berkas/berkas_ijazah');
			} else {
				$datalampiran = array('lampiran' => $this->upload->data());
				$nama_file_lampiran = $datalampiran['lampiran']['file_name'];
				$gantilampiran = str_replace(" ", "_", $nama_file_lampiran);
				$data['lampiran'] = $gantilampiran;
			}
		} else {
			$gantilampiran = $lampiranlama;
		}

		// Proses upload dan perubahan file formulir data karyawan
		if (!empty($_FILES['transkip']['name'])) {
			if (!$this->upload->do_upload('transkip')) {
				$errorTranskip = $this->upload->display_errors();
				redirect('berkas/berkas_ijazah');
			} else {
				$datatranskip = array('transkip' => $this->upload->data());
				$nama_file_transkip = $datatranskip['transkip']['file_name'];
				$gantitranskip = str_replace(" ", "_", $nama_file_transkip);
				$data['transkip'] = $gantitranskip;
			}
		} else {
			$gantitranskip = $transkiplama;
		}

		$data = array(
			'nomor_ijazah' => $nomor_ijazah,
			'id_user' => $user,
			'gelar' => $gelar,
			'lampiran' => $gantilampiran,
			'transkip' => $gantitranskip
		);

		$where = array(
			'nomor_ijazah' => $nomor_ijazah
		);

		$this->berkas_model->ubah_data_ijazah($where, $data, 'ijazah');
		$this->session->set_flashdata('Pesan', '
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
		redirect('berkas/berkas_ijazah');
	}

	public function proses_hapus_ijazah($nomor)
	{
		$where = array('nomor_ijazah' => $nomor);
		$lampiran = $this->berkas_model->ambilLampiran_ijazah($where);
		$transkip = $this->berkas_model->ambilTranskip_ijazah($where);
		if ($lampiran) {
			if ($lampiran != 'cloud.png') {
				unlink('./assets/upload/berkas_ijazah/' . $lampiran);
			}
		}

		if ($transkip) {
			if ($transkip != 'cloud.png') {
				unlink('./assets/upload/berkas_ijazah/' . $transkip);
			}
		}

		$this->berkas_model->hapus_data_ijazah($where, 'ijazah');
		$this->session->set_flashdata('Pesan', '
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
		redirect('berkas/berkas_ijazah');
	}

	public function getData_ijazah()
	{
		$id = $this->input->post('nomor_ijazah');
		$where = array('nomor_ijazah' => $id);
		$data['ijazah'] = $this->berkas_model->ambil_data_ijazah($id)->result();
		echo json_encode($data);
	}


	public function approval_ijazah($id)
	{
		$data['title'] = 'IJAZAH';
		$data['ijazah'] = $this->berkas_model->ambil_data_surat_ijazah($id)->result();
		$data['user'] = $this->user_model->data()->result();

		$this->load->view('berkas_ijazah/ijazah_approve', $data);
	}


	//============Keterangan Sehat=========

	public function biodata_sehat()
	{

		$config['upload_path'] = './assets/upload/berkas_sehat/';
		$config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

		$namaFile_keterangan = $_FILES['surat_keterangan']['name'];
		$errorketerangan = $_FILES['surat_keterangan']['error'];

		$this->load->library('upload', $config);

		$id = $this->berkas_model->buat_kode_sehat();
		$kode = $this->session->userdata('login_session')['id_user'];

		// Proses upload dan perubahan file surat lamaran
		if (!empty($_FILES['surat_keterangan']['name'])) {
			if (!$this->upload->do_upload('surat_keterangan')) {
				$errorketerangan = $this->upload->display_errors();
				redirect('berkas/index');
			} else {
				$dataketerangan = array('surat_keterangan' => $this->upload->data());
				$nama_file_keterangan = $dataketerangan['surat_keterangan']['file_name'];
				$gantiketerangan = str_replace(" ", "_", $nama_file_keterangan);
			}
		}

		$data = array(
			'id_sehat' => $id,
			'id_user' => $kode,
			'surat_keterangan' => $gantiketerangan
		);

		$where = array('id_user' => $this->session->userdata('login_session')['id_user']);
		$existingData = $this->berkas_model->detail_data_sehat($where, 'sehat');
		if ($existingData) {
			$this->berkas_model->ubah_data_sehat($where, $data, 'sehat');
			$pesan = 'Data berhasil diubah!';
		} else {
			$this->berkas_model->tambah_data_sehat($data, 'sehat');
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

}
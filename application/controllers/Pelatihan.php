<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelatihan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('pelatihan_model');
    }

	public function index()
	{
		$data['title'] = 'SERTIFIKASI PELATIHAN KERJA';
		$id = $this->session->userdata('login_session')['id_user'];
		$data['pelatihan'] = $this->pelatihan_model->ambil_data_pelatihan($id)->result();
		$data['user'] = $this->user_model->data()->result();

		$this->load->view('pelatihan/index', $data);
	}

	public function tambah_pelatihan()
	{
		$data['title'] = 'TAMBAH PELATIHAN';

		$this->load->view('pelatihan/form_tambah');
	}

	public function ubah_pelatihan($nomor)
	{
		$data['title'] = 'UBAH PELATIHAN';

		// Mengambil data ijazah
		$data['pelatihan'] = $this->pelatihan_model->ambil_detail_pelatihan($nomor)->result();

		// Memastikan variabel $ijazah terdefinisi
		if (empty($data['pelatihan'])) {
			$data['pelatihan'] = array();
		}

		$this->load->view('pelatihan/form_ubah', $data);
	}


	public function detail($id)
	{
		$data['title'] = 'DETAIL SERTIFIKASI PELATIHAN KERJA';

		//menampilkan data berdasarkan id
		$data['data'] = $this->pelatihan_model-- > detail_join($id, 'pelatihan')->result();

		$this->load->view('berkas_ijazah/detail');
	}

	public function proses_tambah_pelatihan()
	{
		$id_pelatihan = $this->input->post('id_pelatihan');
		$user = $this->session->userdata('login_session')['id_user'];
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$berlaku = $this->input->post('berlaku');
		$penyelenggara	 = $this->input->post('penyelenggara');

		$data = array(
			'id_pelatihan' => $id_pelatihan,
			'id_user' => $user,
			'nama_pelatihan' => $nama_pelatihan,
			'berlaku' => $berlaku,
			'penyelenggara' => $penyelenggara
		);

		$this->pelatihan_model->tambah_data_pelatihan($data, 'pelatihan');
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
		redirect('pelatihan/index');
	}

	public function proses_ubah_pelatihan($nomor)
	{
		$id_pelatihan = $this->input->post('id_pelatihan');
		$user = $this->session->userdata('login_session')['id_user'];
		$nama_pelatihan = $this->input->post('nama_pelatihan');
		$berlaku = $this->input->post('berlaku');
		$penyelenggara	 = $this->input->post('penyelenggara');

		$data = array(
			'id_pelatihan' => $id_pelatihan,
			'id_user' => $user,
			'nama_pelatihan' => $nama_pelatihan,
			'berlaku' => $berlaku,
			'penyelenggara' => $penyelenggara
		);

		$where = array(
			'id_pelatihan' => $nomor
		);


		$this->pelatihan_model->ubah_data_pelatihan($where, $data, 'pelatihan');
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
		redirect('pelatihan/index');
	}

	public function proses_hapus_pelatihan($nomor)
	{
		$where = array('id_pelatihan' => $nomor);
		
		$this->pelatihan_model->hapus_data_pelatihan($where, 'pelatihan');
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
		redirect('pelatihan/index');
	}

	public function getData_pelatihan()
	{
		$id = $this->input->post('id_pelatihan');
		$where = array('id_pelatihan' => $id);
		$data['pelatihan'] = $this->pelatihan_model->ambil_data_pelatihan($id)->result();
		echo json_encode($data);
	}

}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratIzin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('surat_izin_model');
    }

	public function index()
	{
		$data['title'] = 'SURAT IZIN';
		$id = $this->session->userdata('login_session')['id_user'];
		$data['surat_izin'] = $this->surat_izin_model->ambil_data_surat_izin($id)->result();
		$data['user'] = $this->user_model->data()->result();

		$this->load->view('surat_izin/index', $data);
	}

	public function tambah_surat_izin()
	{
		$data['title'] = 'Tambah Surat Izin';

		$this->load->view('surat_izin/form_tambah');
	}

	public function ubah_surat_izin($nomor)
	{
		$data['title'] = 'UBAH SURAT IZIN';

		// Mengambil data ijazah
		$data['surat_izin'] = $this->surat_izin_model->ambil_detail_surat_izin($nomor)->result();

		// Memastikan variabel $ijazah terdefinisi
		if (empty($data['surat_izin'])) {
			$data['surat_izin'] = array();
		}

		$this->load->view('surat_izin/form_ubah', $data);
	}


	public function detail($id)
	{
		$data['title'] = 'Surat Izin';

		//menampilkan data berdasarkan id
		$data['data'] = $this->surat_izin_model-- > detail_join($id, 'surat_izin')->result();

		$this->load->view('berkas_ijazah/detail');
	}

	public function proses_tambah_surat_izin()
	{
		$nomor_izin = $this->input->post('nomor_izin');
		$user = $this->session->userdata('login_session')['id_user'];
		$jenis_surat = $this->input->post('jenis_surat');
		$mengeluarkan = $this->input->post('mengeluarkan');
		$masa_berlaku = $this->input->post('masa_berlaku');

		$data = array(
			'nomor_izin' => $nomor_izin,
			'id_user' => $user,
			'jenis_surat' => $jenis_surat,
			'mengeluarkan' => $mengeluarkan,
			'masa_berlaku' => $masa_berlaku
		);

		$this->surat_izin_model->tambah_data_surat_izin($data, 'surat_izin');
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
		redirect('suratizin/index');
	}

	public function proses_ubah_surat_izin($nomor)
	{
		$nomor_izin = $this->input->post('nomor_izin');
		$user = $this->session->userdata('login_session')['id_user'];
		$jenis_surat = $this->input->post('jenis_surat');
		$mengeluarkan = $this->input->post('mengeluarkan');
		$masa_berlaku = $this->input->post('masa_berlaku');
	
		$data = array(
			'nomor_izin' => $nomor_izin,
			'id_user' => $user,
			'jenis_surat' => $jenis_surat,
			'mengeluarkan' => $mengeluarkan,
			'masa_berlaku' => $masa_berlaku
		);

		$where = array(
			'nomor_izin' => $nomor
		);


		$this->surat_izin_model->ubah_data_surat_izin($where, $data, 'surat_izin');
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
		redirect('suratizin/index');
	}

	public function proses_hapus_surat_izin($nomor)
	{
		$where = array('nomor_izin' => $nomor);
		
		$this->surat_izin_model->hapus_data_surat_izin($where, 'surat_izin');
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
		redirect('suratizin/index');
	}

	public function getData_surat_izin()
	{
		$id = $this->input->post('nomor_izin');
		$where = array('nomor_izin' => $id);
		$data['surat_izin'] = $this->surat_izin_model->ambil_data_surat_izin($id)->result();
		echo json_encode($data);
	}

}
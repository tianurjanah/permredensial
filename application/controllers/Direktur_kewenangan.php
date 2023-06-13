<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Direktur_kewenangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('user_model');
        $this->load->model('direktur_kewenangan_model');
        $this->load->model('direktur_penugasan_model');
        $this->load->model('proses_pengajuan_model');
        // $this->load->model('approve_pengajuan_model');

    }
    public function index()
    {
        $data['title'] = 'Rincian Kewenangan';
        $data['surpen'] = $this->direktur_kewenangan_model->data();

        $this->load->view('templates/header', $data);
        $this->load->view('direktur_kewenangan/index');
        $this->load->view('templates/footer');
    }

    public function tambah_pendidikan()
    {
        $data['title'] = 'TAMBAH PENDIDIKAN';
        $this->load->view('vsu_pendidikan/form_tambah');

    }
    public function ubah_pendidikan($id)
    {
        $data['title'] = 'UBAH PENDIDIKAN';
        // Menampilkan data berdasarkan id
        // Mengambil data ijazah
        $data['pendidikan'] = $this->vsu_pendidikan_model->ambil_detail_pendidikan($id)->result();

        // Memastikan variabel $ijazah terdefinisi
        if (empty($data['pendidikan'])) {
            $data['pendidikan'] = array();
        }

        $this->load->view('vsu_pendidikan/form_ubah', $data);
    }

    public function proses_tambah_pendidikan()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_pendidikan/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $surat_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->vsu_pendidikan_model->buat_kode();
        $user = $this->session->userdata('login_session')['id_user'];
        $institusi = $this->input->post('institusi');
        $pengiriman = $this->input->post('pengiriman');

        if ($surat_balasan == '') {
            $surat_balasan = 'cloud.png';
        } else {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_pendidikan/form_tambah');
            } else {
                $data = array('balasan' => $this->upload->data());
                $nama_file_balasan = $data['balasan']['file_name'];
                $ganti_balasan = str_replace(" ", "_", $nama_file_balasan);
            }
        }

        $data = array(
            'nomor_pendidikanvsu' => $id,
            'id_user' => $user,
            'nama_institusi' => $institusi,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $ganti_balasan
        );

        $this->vsu_pendidikan_model->tambah_data($data, 'vsu_pendidikan');
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

        redirect('vsu_pendidikan/index');
    }
    public function proses_ubah_pendidikan()
    {
        $config['upload_path'] = './assets/upload/berkas_vsu_pendidikan/';
        $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

        $namaFile_balasan = $_FILES['balasan']['name'];
        $error = $_FILES['balasan']['error'];

        $this->load->library('upload', $config);

        $id = $this->input->post('nomor_pendidikanvsu');
        $user = $this->session->userdata('login_session')['id_user'];
        $institusi = $this->input->post('nama_institusi');
        $pengiriman = $this->input->post('tgl_pengiriman');
        $where = array(
            'nomor_pendidikanvsu' => $id
        );
        $balasanlama = $this->vsu_pendidikan_model->ambilbalasan($where);

        if (!empty($_FILES['balasan']['name'])) {
            if (!$this->upload->do_upload('balasan')) {
                $error = $this->upload->display_errors();
                redirect('vsu_pendidikan/index');
            } else {
                $databalasan = array('balasan' => $this->upload->data());
                $nama_file_balasan = $databalasan['balasan']['file_name'];
                $gantibalasan = str_replace(" ", "_", $nama_file_balasan);
                $data['balasan'] = $gantibalasan;
            }
        } else {
            $gantibalasan = $balasanlama;
        }

        $data = array(
            'nomor_pendidikanvsu' => $id,
            'id_user' => $user,
            'nama_institusi' => $institusi,
            'tgl_pengiriman' => $pengiriman,
            'balasan' => $gantibalasan
        );

        $where = array(
            'nomor_pendidikanvsu' => $id
        );

        $this->vsu_pendidikan_model->ubah_data($where, $data, 'vsu_pendidikan');
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
        redirect('vsu_pendidikan/index');
    }

    public function hapus_pendidikan($nomor)
    {
        $where = array('nomor_pendidikanvsu' => $nomor);
        $balasan = $this->vsu_pendidikan_model->ambilbalasan($where);
        if ($balasan) {
            if ($balasan != 'cloud.png') {
                unlink('./assets/upload/berkas_vsu_pendidikan/' . $balasan);
            }
        }

        $this->vsu_pendidikan_model->hapus_data($where, 'vsu_pendidikan');
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
        redirect('vsu_pendidikan/index');
    }

    public function cetak_kewenangan($id_pengajuan_index)
    {
        // Load the TCPDF library
        $this->load->library('pdf');
        // $id = $this->session->userdata('login_session')['nama'];
        $data['user'] = $this->direktur_kewenangan_model->getpengguna($id_pengajuan_index);

        $data['bagian1'] = $this->direktur_kewenangan_model->getKompetensiDatab1($id_pengajuan_index);
        $data['bagian2'] = $this->direktur_kewenangan_model->getKompetensiDatab2($id_pengajuan_index);
        $data['bagian3'] = $this->direktur_kewenangan_model->getKompetensiDatab3($id_pengajuan_index);
        $data['bagian4'] = $this->direktur_kewenangan_model->getKompetensiDatab4($id_pengajuan_index);
        $data['bagian5'] = $this->direktur_kewenangan_model->getKompetensiDatab5($id_pengajuan_index);
        $data['bagian6'] = $this->direktur_kewenangan_model->getKompetensiDatab6($id_pengajuan_index);
        $data['bagian7'] = $this->direktur_kewenangan_model->getKompetensiDatab7($id_pengajuan_index);
        $data['bagian8'] = $this->direktur_kewenangan_model->getKompetensiDatab8($id_pengajuan_index);
        $data['bagian9'] = $this->direktur_kewenangan_model->getKompetensiDatab9($id_pengajuan_index);
        $data['bagian9a'] = $this->direktur_kewenangan_model->getKompetensiDatab9a($id_pengajuan_index);
        $data['bagian9b'] = $this->direktur_kewenangan_model->getKompetensiDatab9b($id_pengajuan_index);
        $data['bagian9c'] = $this->direktur_kewenangan_model->getKompetensiDatab9c($id_pengajuan_index);
        $data['bagian9d'] = $this->direktur_kewenangan_model->getKompetensiDatab9d($id_pengajuan_index);
        $data['bagian9e'] = $this->direktur_kewenangan_model->getKompetensiDatab9e($id_pengajuan_index);
        $data['bagian9f'] = $this->direktur_kewenangan_model->getKompetensiDatab9f($id_pengajuan_index);
        $data['bagian9g'] = $this->direktur_kewenangan_model->getKompetensiDatab9g($id_pengajuan_index);
        $data['bagian9h'] = $this->direktur_kewenangan_model->getKompetensiDatab9h($id_pengajuan_index);
        $data['bagian9i'] = $this->direktur_kewenangan_model->getKompetensiDatab9i($id_pengajuan_index);
        $data['bagian9j'] = $this->direktur_kewenangan_model->getKompetensiDatab9j($id_pengajuan_index);
        $data['bagian10kmr'] = $this->direktur_kewenangan_model->getKompetensiDatab10kmr($id_pengajuan_index);
        $data['bagian10smltr'] = $this->direktur_kewenangan_model->getKompetensiDatab10smltr($id_pengajuan_index);
        $data['bagian10cts'] = $this->direktur_kewenangan_model->getKompetensiDatab10cts($id_pengajuan_index);
        $data['bagian10re'] = $this->direktur_kewenangan_model->getKompetensiDatab10re($id_pengajuan_index);
        $data['bagian10mvre'] = $this->direktur_kewenangan_model->getKompetensiDatab10mvre($id_pengajuan_index);
        $data['bagian10brkt'] = $this->direktur_kewenangan_model->getKompetensiDatab10brkt($id_pengajuan_index);
        $data['bagian10tps2'] = $this->direktur_kewenangan_model->getKompetensiDatab10tps2($id_pengajuan_index);
        $data['bagian10crh'] = $this->direktur_kewenangan_model->getKompetensiDatab10crh($id_pengajuan_index);
        $data['bagian10ikkk'] = $this->direktur_kewenangan_model->getKompetensiDatab10ikkk($id_pengajuan_index);
        $data['bagian10mnjl'] = $this->direktur_kewenangan_model->getKompetensiDatab10mnjl($id_pengajuan_index);
        $data['bagian11'] = $this->direktur_kewenangan_model->getKompetensiDatab11($id_pengajuan_index);
        $data['bagian12'] = $this->direktur_kewenangan_model->getKompetensiDatab12($id_pengajuan_index);

        // Create a new PDF instance
        $pdf = new TCPDF();

        // Set PDF content and formatting
        $pdf->AddPage();
        $pdf->writeHTML($this->load->view('direktur_kewenangan/rincian_kewenangan', $data, true), true, false, true, false, '');

        // Output the PDF to the browser
        ob_end_clean();
        $pdf->Output('Surat Kewenangan.pdf', 'I');
    }


}
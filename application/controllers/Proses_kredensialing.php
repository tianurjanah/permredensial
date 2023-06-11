<?php
defined('BASEPATH') or exit('No direct script access allowed');

class proses_kredensialing extends CI_Controller
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
        $this->load->model('berkas_model');
        $this->load->model('approve_pengajuan_model');
        $this->load->model('proses_pengajuan_model');
        $this->load->model('kategori_model');

    }
    public function index()
    {
        $data['title'] = 'Approve Pengajuan Kredensial';
        $data['user'] = $this->user_model->data()->result();

        $data['pengajuan_idx'] = $this->kompetensi_model->ambil_pengajuan_index()->result();


        $this->load->view('templates/header', $data);
        $this->load->view('proses_kredensialing/index', $data);
        $this->load->view('templates/footer');
    }

    public function index_kredensialing()
    {
        $data['title'] = 'Approve Pengajuan Kredensial';
        $data['user'] = $this->user_model->data()->result();
        $data['pengajuan_idx'] = $this->kompetensi_model->ambil_pengajuan_index()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('jadwal_kredensial/index', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pengajuan_index)
    {
        $data['title'] = 'Approve Pengajuan';

        $data['ktg'] = $this->proses_pengajuan_model->ambil_kategori($id_pengajuan_index)->result();

        $data['bagian1'] = $this->proses_pengajuan_model->getKompetensiDatab1($id_pengajuan_index);
        $data['bagian2'] = $this->proses_pengajuan_model->getKompetensiDatab2($id_pengajuan_index);
        $data['bagian3'] = $this->proses_pengajuan_model->getKompetensiDatab3($id_pengajuan_index);
        $data['bagian4'] = $this->proses_pengajuan_model->getKompetensiDatab4($id_pengajuan_index);
        $data['bagian5'] = $this->proses_pengajuan_model->getKompetensiDatab5($id_pengajuan_index);
        $data['bagian6'] = $this->proses_pengajuan_model->getKompetensiDatab6($id_pengajuan_index);
        $data['bagian7'] = $this->proses_pengajuan_model->getKompetensiDatab7($id_pengajuan_index);
        $data['bagian8'] = $this->proses_pengajuan_model->getKompetensiDatab8($id_pengajuan_index);
        $data['bagian9'] = $this->proses_pengajuan_model->getKompetensiDatab9($id_pengajuan_index);
        $data['bagian9a'] = $this->proses_pengajuan_model->getKompetensiDatab9a($id_pengajuan_index);
        $data['bagian9b'] = $this->proses_pengajuan_model->getKompetensiDatab9b($id_pengajuan_index);
        $data['bagian9c'] = $this->proses_pengajuan_model->getKompetensiDatab9c($id_pengajuan_index);
        $data['bagian9d'] = $this->proses_pengajuan_model->getKompetensiDatab9d($id_pengajuan_index);
        $data['bagian9e'] = $this->proses_pengajuan_model->getKompetensiDatab9e($id_pengajuan_index);
        $data['bagian9f'] = $this->proses_pengajuan_model->getKompetensiDatab9f($id_pengajuan_index);
        $data['bagian9g'] = $this->proses_pengajuan_model->getKompetensiDatab9g($id_pengajuan_index);
        $data['bagian9h'] = $this->proses_pengajuan_model->getKompetensiDatab9h($id_pengajuan_index);
        $data['bagian9i'] = $this->proses_pengajuan_model->getKompetensiDatab9i($id_pengajuan_index);
        $data['bagian9j'] = $this->proses_pengajuan_model->getKompetensiDatab9j($id_pengajuan_index);
        $data['bagian10kmr'] = $this->proses_pengajuan_model->getKompetensiDatab10kmr($id_pengajuan_index);
        $data['bagian10smltr'] = $this->proses_pengajuan_model->getKompetensiDatab10smltr($id_pengajuan_index);
        $data['bagian10cts'] = $this->proses_pengajuan_model->getKompetensiDatab10cts($id_pengajuan_index);
        $data['bagian10re'] = $this->proses_pengajuan_model->getKompetensiDatab10re($id_pengajuan_index);
        $data['bagian10mvre'] = $this->proses_pengajuan_model->getKompetensiDatab10mvre($id_pengajuan_index);
        $data['bagian10brkt'] = $this->proses_pengajuan_model->getKompetensiDatab10brkt($id_pengajuan_index);
        $data['bagian10tps2'] = $this->proses_pengajuan_model->getKompetensiDatab10tps2($id_pengajuan_index);
        $data['bagian10crh'] = $this->proses_pengajuan_model->getKompetensiDatab10crh($id_pengajuan_index);
        $data['bagian10ikkk'] = $this->proses_pengajuan_model->getKompetensiDatab10ikkk($id_pengajuan_index);
        $data['bagian10mnjl'] = $this->proses_pengajuan_model->getKompetensiDatab10mnjl($id_pengajuan_index);
        $data['bagian11'] = $this->proses_pengajuan_model->getKompetensiDatab11($id_pengajuan_index);
        $data['bagian12'] = $this->proses_pengajuan_model->getKompetensiDatab12($id_pengajuan_index);
        $data['id_pengajuan_index'] = $id_pengajuan_index;

        $this->load->view('templates/header', $data);
        $this->load->view('proses_kredensialing/ubah');
        $this->load->view('templates/footer');
    }

    public function ubah_jadwal($id)
    {
        $data['title'] = 'Approve Pengajuan';
        $where = array('id_user' => $id);

        $data['user'] = $id;

        $data['approve'] = $this->approve_pengajuan_model->ambil_data_approve($id)->result();

        $data['user'] = $this->user_model->data_mitra();

        $this->load->view('templates/header', $data);
        $this->load->view('jadwal_kredensialing/approve');
        $this->load->view('templates/footer');
    }

    public function proses_diterima($id)
    {
        $kode = $this->input->post('id');
        $status = $this->input->post('status');
        $catatan = $this->input->post('catatan');

        $data = array(
            'status' => $status,
            'catatan' => $catatan
        );

        $where = array(
            'id' => $kode
        );

        $this->approve_pengajuan_model->ubah_terima($where, $data, 'pengajuan_index');
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

        redirect('approve_pengajuan/index');
    }
    public function proses_jadwal($id)
    {
        $kode = $this->input->post('id');
        $mitra = $this->input->post('mitra');
        $jadwal = $this->input->post('jadwal');
        $pukul = $this->input->post('pukul');

        $data = array(
            'mitra' => $mitra,
            'jadwal' => $jadwal,
            'pukul' => $pukul
        );

        $where = array(
            'id' => $kode
        );

        $this->approve_pengajuan_model->ubah_terima($where, $data, 'pengajuan_index');
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

        redirect('approve_pengajuan/index_jadwal');
    }

    public function proses_ubah($id)
    {
        // Load the form validation library if you haven't already
        $this->load->library('form_validation');

        // Set validation rules
        // Form validation failed, handle errors or redirect to the form page
        // Form validation passed, update the status based on the radio button values
        $bagian1 = $this->input->post('bagian1');
        $bagian2 = $this->input->post('bagian2');
        $bagian3 = $this->input->post('bagian3');
        $bagian4 = $this->input->post('bagian4');
        $bagian5 = $this->input->post('bagian5');
        $bagian6 = $this->input->post('bagian6');
        $bagian7 = $this->input->post('bagian7');
        $bagian8 = $this->input->post('bagian8');
        $bagian9 = $this->input->post('bagian9');
        $bagian9a = $this->input->post('bagian9a');
        $bagian9b = $this->input->post('bagian9b');
        $bagian9c = $this->input->post('bagian9c');
        $bagian9d = $this->input->post('bagian9d');
        $bagian9e = $this->input->post('bagian9e');
        $bagian9f = $this->input->post('bagian9f');
        $bagian9g = $this->input->post('bagian9g');
        $bagian9h = $this->input->post('bagian9h');
        $bagian9i = $this->input->post('bagian9i');
        $bagian9j = $this->input->post('bagian9j');
        $bagian10kmr = $this->input->post('bagian10kmr');
        $bagian10smltr = $this->input->post('bagian10smltr');
        $bagian10cts = $this->input->post('bagian10cts');
        $bagian10re = $this->input->post('bagian10re');
        $bagian10mvre = $this->input->post('bagian10mvre');
        $bagian10brkt = $this->input->post('bagian10brkt');
        $bagian10tps2 = $this->input->post('bagian10tps2');
        $bagian10crh = $this->input->post('bagian10crh');
        $bagian10ikkk = $this->input->post('bagian10ikkk');
        $bagian10mnjl = $this->input->post('bagian10mnjl');
        $bagian11 = $this->input->post('bagian11');
        $bagian12 = $this->input->post('bagian12');

        // Assuming you have a model called "Your_model" to interact with the database
        if (!empty($bagian1)) {
            foreach ($bagian1 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian2)) {
            foreach ($bagian2 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian3)) {
            foreach ($bagian3 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian4)) {
            foreach ($bagian4 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian5)) {
            foreach ($bagian5 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian6)) {
            foreach ($bagian6 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian7)) {
            foreach ($bagian7 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian8)) {
            foreach ($bagian8 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9)) {
            foreach ($bagian9 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9a)) {
            foreach ($bagian9a as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9b)) {
            foreach ($bagian9b as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9c)) {
            foreach ($bagian9c as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9d)) {
            foreach ($bagian9d as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9e)) {
            foreach ($bagian9e as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9f)) {
            foreach ($bagian9f as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9g)) {
            foreach ($bagian9g as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9h)) {
            foreach ($bagian9h as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9i)) {
            foreach ($bagian9i as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian9j)) {
            foreach ($bagian9j as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10kmr)) {
            foreach ($bagian10kmr as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10smltr)) {
            foreach ($bagian10smltr as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10cts)) {
            foreach ($bagian10cts as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10re)) {
            foreach ($bagian10re as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10mvre)) {
            foreach ($bagian10mvre as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10brkt)) {
            foreach ($bagian10brkt as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10tps2)) {
            foreach ($bagian10tps2 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10crh)) {
            foreach ($bagian10crh as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian10ikkk)) {
            foreach ($bagian10ikkk as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian1mnjl)) {
            foreach ($bagian10mnjl as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian11)) {
            foreach ($bagian11 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }
        if (!empty($bagian12)) {
            foreach ($bagian12 as $id_kb => $status) {
                $data = array(
                    'status' => $status
                );
                $this->proses_pengajuan_model->ubah_pengajuan($id, $id_kb, $data);
            }
        }

        $data_index = array(
            'status' => 'Diverifikasi'
        );
        $where = array(
            'id' => $id
        );
        $this->kompetensi_model->ubah_data($where, $data_index, 'pengajuan_index');

        redirect('proses_kredensialing/index');

    }
}
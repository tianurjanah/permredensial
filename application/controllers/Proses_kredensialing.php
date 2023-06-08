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



}
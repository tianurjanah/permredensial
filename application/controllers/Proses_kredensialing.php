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

    }
    public function index()
    {
        $data['title'] = 'Approve Pengajuan Kredensial';
        $data['user'] = $this->user_model->data()->result();

        $data['pengajuan_idx'] = $this->kompetensi_model->ambil_pengajuan_index()->result();

        $data['bagian1'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian2'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian3'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian4'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian5'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian6'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian7'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian8'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9a'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9b'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9c'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9d'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9e'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9f'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9g'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9h'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9i'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian9j'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10kmr'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10smltr'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10cts'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10re'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10mvre'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10brkt'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10tps2'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10crh'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10ikkk'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian10mnjl'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian11'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);
        $data['bagian12'] = $this->approve_pengajuan_model->getKompetensiData($id_pengajuan_index);

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

    public function ubah($id)
    {
        $data['title'] = 'Approve Pengajuan';
        $where = array('id_user' => $id);
        $data['user'] = $id;
        $data['biodata'] = $this->berkas_model->ambil_data_barang($id)->result();
        $data['sehat'] = $this->berkas_model->ambil_data_sehat($id)->result();
        $data['approve'] = $this->approve_pengajuan_model->ambil_data_approve($id)->result();

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
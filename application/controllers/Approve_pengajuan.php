<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Approve_pengajuan extends CI_Controller
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
        $data['title'] = 'Approve Pengajuan';
        $data['user'] = $this->user_model->data()->result();

        $data['pengajuan_idx'] = $this->kompetensi_model->ambil_pengajuan_index()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('approve_pengajuan/index', $data);
        $this->load->view('templates/footer');
    }

    public function index_jadwal()
    {
        $data['title'] = 'Jadwal Kredensialing';
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
        $this->load->view('approve_pengajuan/approve');
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
        $this->load->view('jadwal_kredensial/approve');
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
        $status = $this->input->post('status');
        $catatan = $this->input->post('catatan');

        $data = array(
            'mitra' => $mitra,
            'jadwal' => $jadwal,
            'pukul' => $pukul,
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
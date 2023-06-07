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
        $data['title'] = 'Approve Pengajuan Kredensial';
        $data['user'] = $this->user_model->data()->result();

        $data['pengajuan_idx'] = $this->kompetensi_model->ambil_pengajuan_index()->result();

        $this->load->view('templates/header', $data);
        $this->load->view('approve_pengajuan/index', $data);
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


    // public function proses_tambah_pendidikan()
    // {
    //     $config['upload_path'] = './assets/upload/berkas_vsu_pendidikan/';
    //     $config['allowed_types'] = 'png|jpg|JPG|jpeg|JPEG|gif|GIF|tif|TIF||tiff|TIFF|PDF|pdf';

    //     $surat_balasan = $_FILES['balasan']['name'];
    //     $error = $_FILES['balasan']['error'];

    //     $this->load->library('upload', $config);

    //     $id = $this->vsu_pendidikan_model->buat_kode();
    //     $user = $this->session->userdata('login_session')['id_user'];
    //     $institusi = $this->input->post('institusi');
    //     $pengiriman = $this->input->post('pengiriman');

    //     if ($surat_balasan == '') {
    //         $surat_balasan = 'cloud.png';
    //     } else {
    //         if (!$this->upload->do_upload('balasan')) {
    //             $error = $this->upload->display_errors();
    //             redirect('vsu_pendidikan/form_tambah');
    //         } else {
    //             $data = array('balasan' => $this->upload->data());
    //             $nama_file_balasan = $data['balasan']['file_name'];
    //             $ganti_balasan = str_replace(" ", "_", $nama_file_balasan);
    //         }
    //     }

    //     $data = array(
    //         'nomor_pendidikanvsu' => $id,
    //         'id_user' => $user,
    //         'nama_institusi' => $institusi,
    //         'tgl_pengiriman' => $pengiriman,
    //         'balasan' => $ganti_balasan
    //     );

    //     $this->vsu_pendidikan_model->tambah_data($data, 'vsu_pendidikan');
    //     $this->session->set_flashdata('Pesan', '
    // 	<script>
    // 	$(document).ready(function() {
    // 		swal.fire({
    // 			title: "Berhasil ditambahkan!",
    // 			icon: "success",
    // 			confirmButtonColor: "#4e73df",
    // 		});
    // 	});
    // 	</script>
    // 	');

    //     redirect('vsu_pendidikan/index');
    // }

    public function proses_diterima($id)
{
    $kode = $this->input->post('id');
    $catatan = $this->input->post('catatan');

    $data = array(
        'status' => 'Diterima',
        'catatan' => $catatan
    );

    $where = array(
        'id' => $kode
    );

    $this->approve_pengajuan_model->ubah_terima($where, $data, 'pengajuan_index');

        // Perubahan untuk mengubah value "Diterima" pada kolom status
        $this->db->where('id', $kode);
        $this->db->update('pengajuan_index');

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
<?php
class direktur_approve_model extends ci_model
{
    function data()
    {
        $this->db->select('*');
        $this->db->from('rekomendasi');

        $query = $this->db->get();
        return $query->result();
    }

    function data_detail($id)
    {
        $this->db->select('*');
        $this->db->from('rekomendasi');
        $this->db->where('id_rekomendasi', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function ubah_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

    }
    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function ambil_detail_acara($id)
    {
        $this->db->select('*');
        $this->db->from('pengajuan_index');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query;
    }

    public function getuser($id_rekomendasi)
    {
        $this->db->select('user.id_user, user.nama, user.nip');
        $this->db->from('user');
        $this->db->join('rekomendasi', 'rekomendasi.id_user = user.id_user', 'right');
        $this->db->where('rekomendasi.id_rekomendasi', $id_rekomendasi);
        $query = $this->db->get();
        return $query->result();
    }
    public function getDirektur($id)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id);

        $query = $this->db->get();
        return $query;
    }
    public function buat_kode()
    {
        $this->db->select('RIGHT(surat_penugasan.id_penugasan,4) as kode', FALSE);
        $this->db->order_by('id_penugasan', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('surat_penugasan'); //cek dulu apakah ada sudah ada kode di tabel.
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = $kodemax . "/" . "SPKK" . "/" . date("m") . "/" . date("Y");
        return $kodejadi;
    }
    public function buat_kode_rekomendasi()
    {
        $this->db->select('RIGHT(rekomendasi.id_rekomendasi,4) as kode', FALSE);
        $this->db->order_by('id_rekomendasi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('rekomendasi'); //cek dulu apakah ada sudah ada kode di tabel.
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "SR-" . $kodemax;
        return $kodejadi;
    }

    public function getHari($date)
    {
        // Mengubah format tanggal ke dalam format "Y-m-d" jika diperlukan
        $formattedDate = date('Y-m-d', strtotime($date));

        // Mendapatkan nama hari berdasarkan tanggal yang dimasukkan
        $dayOfWeek = date('l', strtotime($formattedDate));

        if ($dayOfWeek == 'Monday') {
            $hari = 'Senin';
        } else if ($dayOfWeek == 'Tuesday') {
            $hari = 'Selasa';
        } else if ($dayOfWeek == 'Wednesday') {
            $hari = 'Rabu';
        } else if ($dayOfWeek == 'Thursday') {
            $hari = 'Kamis';
        } else if ($dayOfWeek == 'Friday') {
            $hari = 'Jum`at';
        } else if ($dayOfWeek == 'Saturday') {
            $hari = 'Sabtu';
        } else if ($dayOfWeek == 'Sunday') {
            $hari = 'Minggu';
        }

        return $hari;
    }
    public function getTanggal($date)
    {
        // Mengubah format tanggal menjadi "d-m-Y" (misalnya: 27-05-2023)
        $formattedDate = date('d-m-Y', strtotime($date));

        return $formattedDate;
    }
}
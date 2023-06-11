<?php
class berita_acara_model extends ci_model
{
    function data()
    {
        $this->db->select('*');
        $this->db->from('berita_acara');
        $this->db->where('mitra', 'Mitraaa');

        $query = $this->db->get();
        return $query->result();
    }

    public function ubah_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

    }
    public function ambil_detail_acara($id)
    {
        $this->db->select('*');
        $this->db->from('pengajuan_index');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query;
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
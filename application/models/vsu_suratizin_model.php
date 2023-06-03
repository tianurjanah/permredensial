<?php
class vsu_suratizin_model extends ci_model
{


    function data($id)
    {
        $this->db->select('*');
        $this->db->from('vsu_suratizin');
        $this->db->where('id_user', $id);

        $query = $this->db->get();
        return $query;
    }
    public function buat_kode()
    {
        $this->db->select('RIGHT(vsu_suratizin.nomor_izinvsu,4) as kode', FALSE);
        $this->db->order_by('nomor_izinvsu', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('vsu_suratizin'); //cek dulu apakah ada sudah ada kode di tabel.
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "IZIN-" . $kodemax;
        return $kodejadi;
    }

    public function tambah_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);

        if ($this->db->affected_rows() > 0) {
            return TRUE;
        }
        return false;
    }
    public function ambil_detail_suratizin($id)
    {
        $this->db->select('*');
        $this->db->from('vsu_suratizin');
        $this->db->where('nomor_izinvsu', $id);

        $query = $this->db->get();
        return $query;
    }
    public function ambilbalasan($where)
    {
        $this->db->select('balasan');
        $this->db->where($where);
        $query = $this->db->get('vsu_suratizin');

        if ($query->num_rows() > 0) {
            $data = $query->row();
            $balasan = $data->balasan;
            return $balasan;
        }

        return null;
    }

    public function ubah_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

    }

}
<?php
class pengalaman_model extends ci_model
{


    function data($id)
    {
        $this->db->select('*');
        $this->db->from('pengalaman');
        $this->db->where('id_user', $id);

        $query = $this->db->get();
        return $query;
    }
    public function buat_kode()
    {
        $this->db->select('RIGHT(pengalaman.id_pengalaman,4) as kode', FALSE);
        $this->db->order_by('id_pengalaman', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pengalaman'); //cek dulu apakah ada sudah ada kode di tabel.
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "PK-" . $kodemax;
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
    public function ambil_detail_pengalaman($id)
    {
        $this->db->select('*');
        $this->db->from('pengalaman');
        $this->db->where('id_pengalaman', $id);

        $query = $this->db->get();
        return $query;
    }
    public function ambilreferensi($where)
    {
        $this->db->select('referensi');
        $this->db->where($where);
        $query = $this->db->get('pengalaman');

        if ($query->num_rows() > 0) {
            $data = $query->row();
            $referensi = $data->referensi;
            return $referensi;
        }

        return null;
    }

    public function ubah_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

    }
    public function ambil_data_surat_pengalaman($id)
    {
        $this->db->select('*');
        $this->db->from('pengalaman');
        $this->db->where('id_user', $id);

        $query = $this->db->get();
        return $query;
    }

}
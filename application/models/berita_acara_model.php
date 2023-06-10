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
}
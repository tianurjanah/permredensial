<?php
class approve_pengajuan_model extends ci_model
{
    function data()
    {
        $this->db->order_by('nama_kategori', 'ASC');
        return $query = $this->db->get('kategori');
    }

    public function ambilId($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function ubah_terima($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);

    }
    public function detail_data_approve($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function ambil_data_approve($id)
    {
        $this->db->select('*');
        $this->db->from('pengajuan_index');
        $this->db->where('id_user', $id);

        $query = $this->db->get();
        return $query;
    }

}
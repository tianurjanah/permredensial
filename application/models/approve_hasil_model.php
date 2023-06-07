<?php
class kategori_model extends ci_model
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

}
<?php
class approve_hasil_model extends ci_model
{
    function data()
    {
        $this->db->select('*');
        $this->db->from('rekomendasi');

        $query = $this->db->get();
        return $query;
    }

    public function ambilId($table, $where)
    {
        return $this->db->get_where($table, $where);
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
}
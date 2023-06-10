<?php
class hasil_kredensialing_model extends CI_Model
{

    function data()
    {
        $this->db->select('*');
        $this->db->from('pengajuan_index');

        $query = $this->db->get();
        return $query->result();
    }

    function getMitra($id)
    {
        $this->db->select('mitra');
        $this->db->from('pengajuan_index');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query->result();
    }
}
?>
<?php
class hasil_kredensialing_model extends CI_Model
{

    function data()
    {
        $this->db->select('*');
        $this->db->from('pengajuan_index');
        $this->db->where('status', 'Diverifikasi');

        $query = $this->db->get();
        return $query->result();
    }
}
?>
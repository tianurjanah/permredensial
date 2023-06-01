<?php
class surat_izin_model extends ci_model
{


    function data()
    {
        $this->db->order_by('id_user', 'DESC');
        return $query = $this->db->get('user');
    }

}
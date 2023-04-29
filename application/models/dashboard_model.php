<?php
class dashboard_model extends ci_model{

    function jmlperbulan($tglAwal, $tglAkhir)
    {
        $this->db->select('*');
        $this->db->from('perbaikan as bk');

        $this->db->where('bk.tanggal_perbaikan >=', $tglAwal);
        $this->db->where('bk.tanggal_perbaikan <=', $tglAkhir);
        return $query = $this->db->get();
    }

    public function dataJoinLike($tahun)
    {
        $this->db->select('*');
        $this->db->from('barang as bk');
      
        $this->db->like('bk.tanggal_masuk', $tahun);
        $this->db->order_by('bk.id_barang','DESC');
        return $query = $this->db->get();
    }
}
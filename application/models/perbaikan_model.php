<?php
class perbaikan_model extends ci_model{

   function get($kode_perbaikan)
   {
       $this->db->where('kode_perawatan', $kode_perbaikan);
       return $this->db->get('perbaikan')->result_array();
   
   }

    function data()
    {
        $this->db->order_by('kode_perbaikan','ASC');
        return $query = $this->db->get('perbaikan');
    }

    public function dataJoin()
    {
      $this->db->select('*');
      $this->db->from('perbaikan as p');
      $this->db->join('perawatan as b', 'p.kode_perawatan = b.kode_perawatan');
      $this->db->join('barang as r', 'p.kode_barangprb = r.id_barang');

      $this->db->order_by('p.kode_perbaikan','ASC');
      return $query = $this->db->get();
    }

    public function detail_join($where)
    {
      $this->db->select('*');
      $this->db->from('perbaikan as p');
      $this->db->where('p.kode_perbaikan', $where);
      // $this->db->join('perawatan as b', 'b.id_perawatan = p.kode_perawatan');
      $this->db->join('barang as r', 'p.kode_barangprb = r.id_barang');

      $this->db->order_by('p.kode_perbaikan','ASC');
      return $query = $this->db->get();
    }

    public function ambilFoto($where)
    {
      $this->db->order_by('id_barang','ASC');
      $this->db->limit(1);
      $query = $this->db->get_where('barang', $where);   
      
      $data = $query->row();
      $foto= $data->foto;
      
      return $foto;
    }

    public function ambilId($table, $where)
    {
       return $this->db->get_where($table, $where);
    }
    public function tambah_data($data, $table)
    {
       $this->db->insert($table, $data);
    }
    public function detail_data($where, $table)
    {
       return $this->db->get_where($table, $where);
    }

    public function ubah_data($where, $data, $table)
    {
       $this->db->where($where);
       $this->db->update($table, $data);
    }

    public function buat_kode()   {
      $this->db->select('RIGHT(perbaikan.kode_perbaikan,4) as kode', FALSE);
      $this->db->order_by('kode_perbaikan','desc');
      $this->db->limit(1);
      $query = $this->db->get('perbaikan');      //cek dulu apakah ada sudah ada kode di tabel.
      if($query->num_rows() <> 0){
       //jika kode ternyata sudah ada.
       $data = $query->row();
       $kode = intval($data->kode) + 1;
      }
      else {
       //jika kode belum ada
       $kode = 1;
      }
      $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
      $kodejadi = "PRB-".$kodemax;    
      return $kodejadi;
    }

    public function datalap($b,$t){
      $this->db->select('*');
      $this->db->from('perbaikan');
      $this->db->join('perawatan', 'perawatan.kode_perawatan = perbaikan.kode_perawatan', 'left'); 
      $this->db->join('barang', 'barang.id_barang = perbaikan.kode_barangprb', 'left'); 
      $this->db->where('MONTH(perbaikan.tanggal_perbaikan)',$b);
      $this->db->where('YEAR(perbaikan.tanggal_perbaikan)',$t);
      $this->db->order_by('tanggal_perbaikan','statusprb', 'ASC');
      $query = $this->db->get(); 
      return $query->result();
    }

    public function filterbytanggal($tanggalawal, $tanggalakhir)
   {
      $this->db->select('*');
      $this->db->from('perbaikan');
      $this->db->join('perawatan', 'perawatan.kode_perawatan = perbaikan.kode_perawatan', 'left'); 
      $this->db->join('barang', 'barang.id_barang = perbaikan.kode_barangprb', 'left');
      $this->db->where('tanggal_perbaikan >=', $tanggalawal);
      $this->db->where('tanggal_perbaikan <=', $tanggalakhir);
      
      $this->db->order_by('tanggal_perbaikan','ASC');
      $query = $this->db->get();
      return $query->result();
   }
}
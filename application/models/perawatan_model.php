<?php
class perawatan_model extends ci_model{

   function get($kode_perawatan)
   {
       $this->db->where('kode_perawatan', $kode_perawatan);
       return $this->db->get('perawatan')->result_array();
   
   }

    function data()
    {
        $this->db->order_by('kode_perawatan','ASC');
        return $query = $this->db->get('perawatan');
    }

    public function dataJoin()
    {
      $this->db->select('*');
      $this->db->from('perawatan as p');
      $this->db->join('barang as b', 'p.kode_barang = b.id_barang');

      $this->db->order_by('p.kode_perawatan','ASC');
      return $query = $this->db->get();
    }

    public function detail_join($where)
    {
      $this->db->select('*');
      $this->db->from('perawatan as p');
      $this->db->where('p.kode_perawatan', $where);
      $this->db->join('barang as b', 'b.id_barang = p.kode_barang');

      $this->db->order_by('p.kode_perawatan','ASC');
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

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
         if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return false;

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

    public function ubah_data1($where, $data, $table)
    {
       $this->db->where($where);
       $this->db->update($table, $data);
    }


    public function ubah_data($where, $data, $table)
    {
       $this->db->where('kode_perawatan', $where);
       $this->db->update($table, $data);
    }

    public function buat_kode()   {
      $this->db->select('RIGHT(perawatan.kode_perawatan,4) as kode', FALSE);
      $this->db->order_by('kode_perawatan','desc');
      $this->db->limit(1);
      $query = $this->db->get('perawatan');      //cek dulu apakah ada sudah ada kode di tabel.
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
      $kodejadi = "PRW-".$kodemax;    
      return $kodejadi;
 }
   
   public function datalap($b,$t){
      $this->db->select('*');
      $this->db->from('perawatan');
      $this->db->join('barang', 'barang.id_barang = perawatan.kode_barang', 'left');
      $this->db->where('MONTH(perawatan.tanggal_perawatan)',$b);
      $this->db->where('YEAR(perawatan.tanggal_perawatan)',$t);

      $this->db->order_by('tanggal_perawatan', 'ASC');
      $query = $this->db->get(); 
      return $query->result();
   }

   public function datalaprb($b,$t,$st){
      $this->db->select('*');
      $this->db->from('perawatan');
      $this->db->join('barang', 'barang.id_barang = perawatan.kode_barang', 'left');
      $this->db->where('status',$st); 
      $this->db->where('MONTH(perawatan.tanggal_perawatan)',$b);
      $this->db->where('YEAR(perawatan.tanggal_perawatan)',$t);

      $this->db->order_by('tanggal_perawatan', 'ASC');
      $query = $this->db->get(); 
      return $query->result();
   }

   public function filterbytanggal($tanggalawal, $tanggalakhir)
   {
      $this->db->select('*');
      $this->db->from('perawatan');
      $this->db->join('barang', 'barang.id_barang = perawatan.kode_barang', 'left');
      $this->db->where('tanggal_perawatan >=', $tanggalawal);
      $this->db->where('tanggal_perawatan <=', $tanggalakhir);
      
      $this->db->order_by('tanggal_perawatan','ASC');
      $query = $this->db->get();
      return $query->result();
   }
}
<?php
class berkas_model extends ci_model
{


  function data()
  {
    $this->db->order_by('id_biodata', 'ASC');
    return $query = $this->db->get('biodata');
  }

  public function dataJoin()
  {
    $this->db->select('*');
    $this->db->from('biodata as b');
    $this->db->join('user as u', 'b.id_user = u.id_user');

    $this->db->order_by('b.id_user', 'ASC');
    return $query = $this->db->get();
  }

  public function detail_join($where)
  {
    $this->db->select('*');
    $this->db->from('barang as b');
    $this->db->where('b.id_barang', $where);
    $this->db->join('kategori as p', 'b.kategori = p.id_kategori');

    $this->db->order_by('b.id_barang', 'ASC');
    return $query = $this->db->get();
  }

  function datalaporan()
  {
    $this->db->select('*');
    $this->db->from('barang as p');
    $this->db->join('kategori as b', 'p.kategori = b.id_kategori');

    $this->db->order_by('p.id_barang', 'ASC');
    return $query = $this->db->get();
  }

  public function ambil_data_barang($id)
  {
    $this->db->select('*');
    $this->db->from('biodata');
    $this->db->where('id_user', $id);

    $query = $this->db->get();
    return $query;
  }

  public function get($id = null)
  {
    $this->db->select('barang.*, id_barang.name as id_barang');
    $this->db->from('barang');
    $this->db->join('perawatan', 'perawatan.id_perawatan = barang.id_perawatan');
    if ($id != null) {
      $this->db->where('perawatan', $id);
    }
    $this->db->order_by('id_barang', 'asc');
    $query = $this->db->get();
    return $query;
  }

  public function ambilFoto($where)
  {
    $this->db->order_by('id_biodata', 'ASC');
    $this->db->limit(1);
    $query = $this->db->get_where('biodata', $where);

    $data = $query->row();
    $foto = $data->foto;

    return $foto;
  }

  function getById($id)
  {
    $query = $this->db->query("SELECT nama_barang FROM barang WHERE id_barang = '" . $id . "'");
    return $query->row_array();
  }
  public function ambilId($table, $where)
  {
    return $this->db->get_where($table, $where);
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

  public function detail_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function tambah_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function ubah_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);

  }

  public function buat_kode()
  {
    $this->db->select('RIGHT(biodata.id_biodata,4) as kode', FALSE);
    $this->db->order_by('id_biodata', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('biodata'); //cek dulu apakah ada sudah ada kode di tabel.
    if ($query->num_rows() <> 0) {
      //jika kode ternyata sudah ada.
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      //jika kode belum ada
      $kode = 1;
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
    $kodejadi = "BIO-" . $kodemax;
    return $kodejadi;
  }

  public function datalap($b, $t)
  {
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->where('MONTH(barang.tanggal_masuk)', $b);
    $this->db->where('YEAR(barang.tanggal_masuk)', $t);
    $this->db->order_by('tanggal_masuk', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }

  public function getSuratlamaranPath()
  {
    $query = $this->db->get('biodata');
    if ($query->num_rows() > 0) {
      $result = $query->row();
      return $result->surat_lamaran;
    } else {
      return null;
    }
  }

  //==========IJAZAH============
  public function ambil_data_ijazah($id)
  {
    $this->db->select('*');
    $this->db->from('ijazah');
    $this->db->where('id_user', $id);

    $query = $this->db->get();
    return $query;
  }
  public function ambil_detail_ijazah($nomor)
  {
    $this->db->select('*');
    $this->db->from('ijazah');
    $this->db->where('nomor_ijazah', $nomor);

    $query = $this->db->get();
    return $query;
  }
  public function tambah_data_ijazah($data, $table)
  {
    $this->db->insert($table, $data);
  }
  public function ubah_data_ijazah($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);

  }

  public function hapus_data_ijazah($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);

    if ($this->db->affected_rows() > 0) {
      return TRUE;
    }
    return false;
  }

  public function ambilLampiran_ijazah($where)
  {
    $this->db->select('lampiran');
    $this->db->where($where);
    $query = $this->db->get('ijazah');

    if ($query->num_rows() > 0) {
      $data = $query->row();
      $lampiran = $data->lampiran;
      return $lampiran;
    }

    return null;
  }

  public function ambilTranskip_ijazah($where)
  {
    $this->db->select('transkip');
    $this->db->where($where);
    $query = $this->db->get('ijazah');

    if ($query->num_rows() > 0) {
      $data = $query->row();
      $transkip = $data->transkip;
      return $transkip;
    }

    return null;
  }

  //====== KETERANGAN SEHAT =======
  public function buat_kode_sehat()
  {
    $this->db->select('RIGHT(sehat.id_sehat,4) as kode', FALSE);
    $this->db->order_by('id_sehat', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('sehat'); //cek dulu apakah ada sudah ada kode di tabel.
    if ($query->num_rows() <> 0) {
      //jika kode ternyata sudah ada.
      $data = $query->row();
      $kode = intval($data->kode) + 1;
    } else {
      //jika kode belum ada
      $kode = 1;
    }
    $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
    $kodejadi = "SKS-" . $kodemax;
    return $kodejadi;
  }

  public function detail_data_sehat($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function ubah_data_sehat($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);

  }

  public function tambah_data_sehat($data, $table)
  {
    $this->db->insert($table, $data);
  }
  public function ambil_data_sehat($id)
  {
    $this->db->select('*');
    $this->db->from('sehat');
    $this->db->where('id_user', $id);

    $query = $this->db->get();
    return $query;
  }
}
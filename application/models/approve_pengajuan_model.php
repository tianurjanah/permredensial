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
    public function ubah_jadwal($where, $data, $table)
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

    public function getKompetensiData($id_pengajuan_index)
    {
        $this->db->select('kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', 'b1');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }
}
<?php
class proses_pengajuan_model extends ci_model
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
    public function ubah_pengajuan($id, $id_kb, $data)
    {
        $this->db->where('id_pengajuan_index', $id);
        $this->db->where('id_kompetensi', $id_kb);
        $this->db->update('pengajuan', $data);
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
    public function ambil_kategori($id)
    {
        $this->db->select('ketegori');
        $this->db->from('pengajuan_index');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query;
    }

    public function getKompetensiDatab1($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi ');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', 'b1');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab2($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '2');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab3($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '3');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab4($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '4');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab5($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '5');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab6($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '6');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab7($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '7');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab8($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '8');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9a($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9a');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9b($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9b');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9c($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9c');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9d($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9d');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9e($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9e');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9f($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9f');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9g($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9g');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9h($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9h');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9i($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9i');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab9j($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '9j');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10kmr($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10kmr');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10smltr($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10smltr');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10cts($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10cts');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10re($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10re');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10mvre($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10mvre');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10brkt($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10brkt');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10tps2($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10tps2');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10crh($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10crh');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10ikkk($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10ikkk');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab10mnjl($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '10mnjl');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab11($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '11');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }

    public function getKompetensiDatab12($id_pengajuan_index)
    {
        $this->db->select('kompetensi.id_kb, kompetensi.bagian, kompetensi.kompetensi');
        $this->db->from('kompetensi');
        $this->db->join('pengajuan', 'pengajuan.id_kompetensi = kompetensi.id_kb', 'right');
        $this->db->where('kompetensi.bagian', '12');
        $this->db->where('pengajuan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();

    }
}
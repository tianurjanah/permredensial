<?php
class direktur_kewenangan_model extends ci_model
{
    function data()
    {
        $this->db->select('*');
        $this->db->from('surat_penugasan');

        $query = $this->db->get();
        return $query->result();
    }

    function data_detail($id)
    {
        $this->db->select('*');
        $this->db->from('surat_penugasan');
        $this->db->where('id_pengajuan_index', $id);

        $query = $this->db->get();
        return $query->result();
    }

    public function getpengguna($id_pengajuan_index)
    {
        $this->db->select('user.nama');
        $this->db->from('user');
        $this->db->join('surat_penugasan', 'surat_penugasan.id_user = user.id_user', 'right');
        $this->db->where('surat_penugasan.id_pengajuan_index', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();
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

    public function ambil_detail_acara($id)
    {
        $this->db->select('*');
        $this->db->from('pengajuan_index');
        $this->db->where('id', $id);

        $query = $this->db->get();
        return $query;
    }

    public function getuser($id_pengajuan_index)
    {
        $this->db->select('user.id_user, user.nama');
        $this->db->from('user');
        $this->db->join('pengajuan_index', 'pengajuan_index.id_user = user.id_user', 'right');
        $this->db->where('pengajuan_index.id', $id_pengajuan_index);
        $query = $this->db->get();
        return $query->result();
    }

    public function buat_kode()
    {
        $this->db->select('RIGHT(berita_acara.id_berita,4) as kode', FALSE);
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('berita_acara'); //cek dulu apakah ada sudah ada kode di tabel.
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "BA-" . $kodemax;
        return $kodejadi;
    }
    public function buat_kode_rekomendasi()
    {
        $this->db->select('RIGHT(rekomendasi.id_rekomendasi,4) as kode', FALSE);
        $this->db->order_by('id_rekomendasi', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('rekomendasi'); //cek dulu apakah ada sudah ada kode di tabel.
        if ($query->num_rows() <> 0) {
            //jika kode ternyata sudah ada.
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            //jika kode belum ada
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
        $kodejadi = "SR-" . $kodemax;
        return $kodejadi;
    }

    public function getHari($date)
    {
        // Mengubah format tanggal ke dalam format "Y-m-d" jika diperlukan
        $formattedDate = date('Y-m-d', strtotime($date));

        // Mendapatkan nama hari berdasarkan tanggal yang dimasukkan
        $dayOfWeek = date('l', strtotime($formattedDate));

        if ($dayOfWeek == 'Monday') {
            $hari = 'Senin';
        } else if ($dayOfWeek == 'Tuesday') {
            $hari = 'Selasa';
        } else if ($dayOfWeek == 'Wednesday') {
            $hari = 'Rabu';
        } else if ($dayOfWeek == 'Thursday') {
            $hari = 'Kamis';
        } else if ($dayOfWeek == 'Friday') {
            $hari = 'Jum`at';
        } else if ($dayOfWeek == 'Saturday') {
            $hari = 'Sabtu';
        } else if ($dayOfWeek == 'Sunday') {
            $hari = 'Minggu';
        }

        return $hari;
    }
    public function getTanggal($date)
    {
        // Mengubah format tanggal menjadi "d-m-Y" (misalnya: 27-05-2023)
        $formattedDate = date('d-m-Y', strtotime($date));

        return $formattedDate;
    }
    public function getKompetensiDatab1($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', 'b1');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab2($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '2');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab3($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '3');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab4($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '4');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab5($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '5');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab6($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '6');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab7($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '7');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab8($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9a($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9a');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9b($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9b');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9c($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9c');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9d($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9d');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9e($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9e');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9f($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9f');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9g($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9g');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9h($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9h');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9i($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9i');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab9j($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '9j');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10kmr($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10kmr');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10smltr($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10smltr');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10cts($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10cts');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10re($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10re');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10mvre($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10mvre');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10brkt($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10brkt');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10tps2($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10tps2');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10crh($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10crh');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10ikkk($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10ikkk');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab10mnjl($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '10mnjl');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab11($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '11');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
    public function getKompetensiDatab12($id_pengajuan_index)
    {
        $this->db->select('k.bagian, k.kompetensi, p.status');
        $this->db->from('kompetensi AS k');
        $this->db->join('pengajuan AS p', 'p.id_kompetensi = k.id_kb', 'right');
        $this->db->where('k.bagian', '12');
        $this->db->where('p.id_pengajuan_index', $id_pengajuan_index);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    }
}
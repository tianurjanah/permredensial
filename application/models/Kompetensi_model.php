<?php
class kompetensi_model extends ci_model{


    function bagian1()
    {
        $this->db->where('bagian','b1');
        return $query = $this->db->get('kompetensi');
    }

    function bagian2()
    {
        $this->db->where('bagian','2');
        return $query = $this->db->get('kompetensi');
    }

    function bagian3()
    {
        $this->db->where('bagian','3');
        return $query = $this->db->get('kompetensi');
    }

    function bagian4()
    {
        $this->db->where('bagian','4');
        return $query = $this->db->get('kompetensi');
    }

    function bagian5()
    {
        $this->db->where('bagian','5');
        return $query = $this->db->get('kompetensi');
    }

    function bagian6()
    {
        $this->db->where('bagian','6');
        return $query = $this->db->get('kompetensi');
    }


    function bagian7()
    {
        $this->db->where('bagian','7');
        return $query = $this->db->get('kompetensi');
    }

    function bagian8()
    {
        $this->db->where('bagian','8');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9()
    {
        $this->db->where('bagian','9');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9a()
    {
        $this->db->where('bagian','9a');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9b()
    {
        $this->db->where('bagian','9b');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9c()
    {
        $this->db->where('bagian','9c');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9d()
    {
        $this->db->where('bagian','9d');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9e()
    {
        $this->db->where('bagian','9e');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9f()
    {
        $this->db->where('bagian','9f');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9g()
    {
        $this->db->where('bagian','9g');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9h()
    {
        $this->db->where('bagian','9h');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9i()
    {
        $this->db->where('bagian','9i');
        return $query = $this->db->get('kompetensi');
    }

    function bagian9j()
    {
        $this->db->where('bagian','9j');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10kmr()
    {
        $this->db->where('bagian','10kmr');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10smltr()
    {
        $this->db->where('bagian','10smltr');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10cts()
    {
        $this->db->where('bagian','10cts');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10re()
    {
        $this->db->where('bagian','10re');
        return $query = $this->db->get('kompetensi');
    }

    function bagian()
    {
        $this->db->where('bagian','');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10mvre()
    {
        $this->db->where('bagian','10mvre');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10brkt()
    {
        $this->db->where('bagian','10brkt');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10tps2()
    {
        $this->db->where('bagian','10tps2');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10crh()
    {
        $this->db->where('bagian','10crh');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10ikkk()
    {
        $this->db->where('bagian','10ikkk');
        return $query = $this->db->get('kompetensi');
    }

    function bagian10mnjl()
    {
        $this->db->where('bagian','10mnjl');
        return $query = $this->db->get('kompetensi');
    }

    function bagian11()
    {
        $this->db->where('bagian','11');
        return $query = $this->db->get('kompetensi');
    }

    function bagian12()
    {
        $this->db->where('bagian','12');
        return $query = $this->db->get('kompetensi');
    }
    
    public function ambilId($table, $where)
    {
       return $this->db->get_where($table, $where);
    }

    public function detail_data($where, $table)
    {
       return $this->db->get_where($table,$where);
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
}

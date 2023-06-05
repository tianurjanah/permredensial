<?php
class login_model extends ci_model
{

    public function cek_login($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function checkLogin($username, $password)
    {
        $checkUsername = $this->db->query("SELECT id_user,nama,status FROM user WHERE username='$username' ");
        $hasil = $checkUsername->num_rows();

        if ($hasil > 0) {

            $checkPassword = $this->db->query("SELECT id_user,nama,status,username FROM user WHERE username='$username' AND password ='$password' ");

            $hasil = $checkPassword->num_rows();

            if ($hasil > 0) {
                $data = $checkPassword->row_array();
                $data['status'] = "ditemukan";
                return $data;
            }
            $data['status'] = "password";
            return $data;
        }
        $data['status'] = "username";
        return $data;
    }
}
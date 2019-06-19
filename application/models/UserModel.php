<?php

class UserModel extends CI_Model
{

    function user_list()
    {
        $hasil = $this->db->query("SELECT * FROM master_user");
        return $hasil->result();
    }

    function simpan_user($username, $email, $pass, $nama, $gudang, $level)
    {
        $hasil = $this->db->query("INSERT INTO master_user(username,email,password,nama,id_gudang,level)VALUES('$username','$email','$pass','$nama','$gudang','$level')");
        return $hasil;
    }

    function get_user_by_kode($username)
    {
        $hsl = $this->db->query("SELECT * FROM master_user WHERE username='$username'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'username' => $data->username,
                    'email' => $data->email,
                    'password' => $data->password,
                    'nama' => $data->nama,
                    'id_gudang' => $data->id_gudang,
                    'level' => $data->level
                );
            }
        }
        return $hasil;
    }

    function update_user($username, $email, $pass, $nama, $gudang, $level)
    {
        $hasil = $this->db->query("UPDATE master_user SET username='$username',email='$$email', password='$pass', nama='$nama', id_gudang='$gudang', level='$level' WHERE username='$username'");
        return $hasil;
    }

    function hapus_user($username)
    {
        $hasil = $this->db->query("DELETE FROM master_user WHERE username'$username'");
        return $hasil;
    }

}
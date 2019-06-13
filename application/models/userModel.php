<?php

class UserModel extends CI_Model
{

    function userList()
    {
        $hasil = $this->db->query("SELECT * FROM master_user");
        return $hasil->result();
    }

    function simpan_barang($username, $email, $password, $nama, $gudang, $level)
    {
        $hasil = $this->db->query("INSERT INTO master_user(username,email,password,nama,id_gudang,level)VALUES('$username','$email','$password','$nama','$gudang','$level')");
        return $hasil;
    }

    function getUserbykode($username)
    {
        $hsl = $this->db->query("SELECT * FROM master_user WHERE id_bar='$username'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'username' => $data->username,
                    'email' => $data->email,
                    'password' => $data->password,
                    'nama' => $data->nama,
                    'id_gudang' => $data->gudang,
                    'level' => $data->level,
                    'status_bar' => $data->status
                );
            }
        }
        return $hasil;
    }

    function updateUser($username, $email, $password, $nama, $gudang, $level)
    {
        $hasil = $this->db->query("UPDATE master_user SET username='$username',email='$$email', password='$password', nama='$nama', id_gudang='$gudang', level='$level' WHERE barang_kode='$kobar'");
        return $hasil;
    }

    function hapus_barang($kobar)
    {
        $hasil = $this->db->query("DELETE FROM master_barang WHERE id_bar='$kobar'");
        return $hasil;
    }

}
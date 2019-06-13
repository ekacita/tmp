<?php


class SuplierModel extends CI_Model
{
    function listSuplier()
    {
        $hasil = $this->db->query("SELECT * FROM master_suplier");
        return $hasil->result();
    }

    function simpanSuplier($kode, $nama, $alamat, $kota, $email, $nomor, $status)
    {
        $hasil = $this->db->query("INSERT INTO master_suplier(id_sup,nama_sup,alamat_sup,kota,email_sup,nomor_sup,status_sup)VALUES('$kode','$nama','$alamat','$kota','$email','$nomor','$status')");
        return $hasil;
    }

    function getSuplierBykode($kode)
    {
        $hsl = $this->db->query("SELECT * FROM master_suplier WHERE id_sup='$kode'");
        if ($hsl->num_rows() > 0) {
            foreach ($hsl->result() as $data) {
                $hasil = array(
                    'kode' => $data->kode,
                    'nama' => $data->nama,
                    'alamat' => $data->alamat,
                    'kota' => $data->kota,
                    'email' => $data->email,
                    'nomor' => $data->nomor,
                    'status' => $data->status
                );
            }
        }
        return $hasil;
    }

    function updateSuplier($kode, $nama, $kota, $alamat, $email, $nomor, $status)
    {
        $hasil = $this->db->query("UPDATE master_suplier SET nama_sup='$nama', alamat_sup='$alamat', kota='$kota', email_sup='$email', nomor_sup='$nomor', status_sup='$status' WHERE id_sup='$kode'");
        return $hasil;
    }

    function hapusSuplier($kode)
    {
        $hasil = $this->db->query("DELETE FROM master_suplier WHERE id_sup'$kode'");
        return $hasil;
    }
}
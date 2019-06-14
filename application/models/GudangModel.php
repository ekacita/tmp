<?php

class gudangModel extends CI_Model{

    function gudang_list(){
        $hasil=$this->db->query("SELECT * FROM master_gudang");
        return $hasil->result();
    }

    function simpan_gudang($id, $nama, $status){
        $hasil=$this->db->query("INSERT INTO master_barang (id_gud,nama_gud,status_gud)VALUES('$id','$nama','$kel',$status')");
        return $hasil;
    }

    function get_gudang_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM master_gudang WHERE id_gud='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_gud' => $data->id,
                    'nama_gud' => $data->nama,
                    'status' => $data->status,
                    );
            }
        }
        return $hasil;
    }

    function update_gudang($id, $nama, $status){
        $hasil=$this->db->query("UPDATE master_gudang SET nama_gud='$nama', status_gud='$status' WHERE id_bar='$id'");
        return $hasil;
    }

    function hapus_gudang($id){
        $hasil=$this->db->query("DELETE FROM master_gudang WHERE id_gud='$id'");
        return $hasil;
    }

}
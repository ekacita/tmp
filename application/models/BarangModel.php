<?php
class BarangModel extends CI_Model{

    function barang_list(){
        $hasil=$this->db->query("SELECT * FROM master_barang");
        return $hasil->result();
    }

    function simpan_barang($kobar, $nabar, $beli, $jual, $kel, $reseller, $status){
        $hasil=$this->db->query("INSERT INTO master_barang (id_bar,nama_bar,id_kel,harga_beli,harga_jual,reseller,status_bar)VALUES('$kobar','$nabar','$kel','$beli','$jual','$reseller','$status')");
        return $hasil;
    }

    function get_barang_by_kode($kobar){
        $hsl=$this->db->query("SELECT * FROM master_barang WHERE id_bar='$kobar'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_bar' => $data->idbar,
                    'nama_bar' => $data->nama_bar,
                    'harga_beli' => $data->beli,
                    'harga_jual' => $data->jual,
                    'id_kel' => $data->idkel,
                    'reseller' => $data->reseller,
                    'status_bar' => $data->status
                );
            }
        }
        return $hasil;
    }

    function update_barang($kobar, $nabar, $beli, $jual, $kel, $reseller, $status){
        $hasil=$this->db->query("UPDATE master_barang SET nama_bar='$nabar',id_kel='$kel', harga_beli='$beli', harga_jual='$jual', reseller='$reseller', status_bar='$status' WHERE id_bar='$kobar'");
        return $hasil;
    }

    function hapus_barang($kobar){
        $hasil=$this->db->query("DELETE FROM master_barang WHERE id_bar='$kobar'");
        return $hasil;
    }

}
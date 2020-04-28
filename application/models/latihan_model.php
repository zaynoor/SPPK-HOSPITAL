<?php
    defined('BASEPATH') OR exit('no direct script access allowed');

    class latihan_model extends CI_Model{

    public function hitung($sel)
    {
        $query = $this->db->query("SELECT COUNT(id) as id FROM pasien where status='$sel'");
        return $query->row()->id;
    }

    public function tambahbarusharing($id, $nama, $nama_file, $tanggal, $pesan)
    {
        $query = $this->db->query("INSERT INTO `sharing` values('$id','$nama','$nama_file','$pesan','$tanggal')");
        return $query;
    }
    public function editsharing($id, $nama, $nama_file, $tanggal, $pesan)
    {
        $query = $this->db->query("UPDATE `sharing` set `nama` = '$nama', `nama_file` = '$nama_file', `waktu`= '$tanggal', `pesan`='$pesan' where id='$id'");
        return $query;
    }
    public function hapus_sharing($tab, $column, $id)
    {
        $query = $this->db->query("DELETE FROM $tab where $column ='$id'");
        return $query;
        $query2 = $this->db->query("DELETE FROM `comment` where id ='$id'");
        return $query2;
    }

    public function tambahbarucomment($id, $nama, $tanggal, $comment)
    {
        $query = $this->db->query("INSERT INTO `comment` values('$id','$nama','$comment','$tanggal')");
        return $query;
    }
    public function hitungcoment($sel)
    {
        $query = $this->db->query("SELECT COUNT(id) as id FROM comment where id='$sel'");
        return $query->row()->id;
    }
    public function bukakomen($id)
    {
        $query = $this->db->query("select * from comment where id='$id'");
        return $query->result_array();
    }
}
?>
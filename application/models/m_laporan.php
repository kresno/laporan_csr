<?php
/**
 *
 */

class M_laporan extends CI_Model{
    
    function __construct()
    {
    
    }

    public function insert($data)
    {
        return $this->db->insert("laporan", $data);
    }

    public function getall()
    {
        $this->db->select("nama, bidang, sasaran, anggaran, lokasi, file, tanggal_pelaksanaan, nama_kegiatan");
        $this->db->from("laporan");
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            return $query->result();
        } else
        {
            return false;
        }
    }
}

?>
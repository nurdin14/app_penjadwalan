<?php 
class M_penjadwalan extends CI_Model {

    public function tampil()
    {
        return $this->db->get('tb_jadwal');
    }
    public function insertJadwal($data)
    {
        $this->db->insert('tb_jadwal', $data);
    }
    public function deleteJadwal($where)
    {
        $this->db->delete('tb_jadwal', $where);
    }
}
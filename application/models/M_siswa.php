<?php 
class M_siswa extends CI_Model {

    public function tampil()
    {
        return $this->db->get('tb_siswa');
    }
    public function insertSiswa($data)
    {
        $this->db->insert('tb_siswa', $data);
    }
    public function ubah($where)
    {
        return $this->db->get_where('tb_siswa', $where);
    }
    public function updateSiswa($data, $where)
    {
        $this->db->update('tb_siswa', $data, $where);
    }
    public function deleteSiswa($where)
    {
        $this->db->delete('tb_siswa', $where);
    }
}
<?php 
class M_mapel extends CI_Model {

    public function tampil()
    {
        return $this->db->get('tb_mapel');
    }
    public function insertMapel($data)
    {
        $this->db->insert('tb_mapel', $data);
    }
    public function ubah($where)
    {
        return $this->db->get_where('tb_mapel', $where);
    }
    public function updateMapel($data, $where)
    {
        $this->db->update('tb_mapel', $data, $where);
    }
    public function deleteMapel($where)
    {
        $this->db->delete('tb_mapel', $where);
    }
}
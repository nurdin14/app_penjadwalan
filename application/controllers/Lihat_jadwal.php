<?php 
class Lihat_jadwal extends CI_Controller {
    public function index()
    {
        $data = [
            'title' => 'App Jadwal',
            'tampil' => $this->db->query("SELECT tb_jadwal.nama_tutor, tb_jadwal.hari, tb_jadwal.jam_mulai, tb_jadwal.jam_selesai, tb_siswa.nama_siswa, tb_mapel.mapel FROM tb_jadwal JOIN tb_siswa ON tb_jadwal.id_siswa = tb_siswa.id_siswa JOIN tb_mapel ON tb_jadwal.id_mapel = tb_mapel.id_mapel WHERE tb_jadwal.nama_tutor = tb_jadwal.nama_tutor")->result_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('lihat_jadwal/v_tampil', $data);
        $this->load->view('templates/footer');
    }
}
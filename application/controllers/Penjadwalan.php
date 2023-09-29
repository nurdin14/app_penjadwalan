<?php 
class Penjadwalan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_penjadwalan');
        $this->load->model('M_siswa');
        $this->load->model('M_mapel');
    }


    public function index()
    {
        $data = [
            'title' => 'App Jadwal',
            'tampil' => $this->M_penjadwalan->tampil()->result_array(),
            'siswa' => $this->M_siswa->tampil()->result_array(),
            'mapel' => $this->M_mapel->tampil()->result_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('penjadwalan/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function addPenjadwalan()
    {
        if(isset($_POST['simpan'])) {
            $data = [
                'id_jadwal'=> $this->input->post('id_jadwal'),
                'hari'=> $this->input->post('hari'),
                'jam_mulai'=> $this->input->post('jam_mulai'),
                'jam_selesai'=> $this->input->post('jam_selesai'),
                'nama_tutor'=> $this->input->post('nama_tutor'),
                'id_siswa'=> $this->input->post('id_siswa'),
                'id_mapel'=> $this->input->post('id_mapel'),
            ];

           $this->M_penjadwalan->insertJadwal($data);
           $this->session->set_flashdata('success', 'Data berhasil disimpan.');
           redirect('penjadwalan/index');
        }
    }

    public function hapus($id_jadwal)
    {
        $where = ['id_jadwal' => $id_jadwal];
        $this->M_penjadwalan->deleteJadwal($where);
        redirect('penjadwalan/index');
    }
}
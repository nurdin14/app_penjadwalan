<?php 
class Mapel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mapel');
    }


    public function index()
    {
        $data = [
            'title' => 'App Jadwal',
            'tampil' => $this->M_mapel->tampil()->result_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('mapel/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function addMapel()
    {
        if(isset($_POST['simpan'])) {
            $data = [
                'id_mapel'=> $this->input->post('id_mapel'),
                'kode_mapel'=> $this->input->post('kode_mapel'),
                'mapel'=> $this->input->post('mapel')
            ];

           $this->M_mapel->insertMapel($data);
           $this->session->set_flashdata('success', 'Data berhasil disimpan.');
           redirect('mapel/index');
        }
    }

    public function ubah($id_mapel)
    {
        $where = ['id_mapel' => $id_mapel];
        $data = [
            'title' => 'App Jadwal',
            'tampil' => $this->M_mapel->ubah($where)->row_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('mapel/v_ubah', $data);
        $this->load->view('templates/footer');
    }

    public function ubahMapel()
    {
        if(isset($_POST['simpan'])) {
            $data = [
                'id_mapel' => $this->input->post('id_mapel'),
                'kode_mapel' => $this->input->post('kode_mapel'),
                'mapel' => $this->input->post('mapel')
            ];

            $where = ['id_mapel' => $this->input->post('id_mapel')];
            $this->M_mapel->updateMapel($data, $where);
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect('mapel/index');
        }
    }

    public function hapus($id_mapel)
    {
        $where = ['id_mapel' => $id_mapel];
        $this->M_mapel->deleteMapel($where);
        redirect('mapel/index');
    }
}
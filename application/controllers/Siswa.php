<?php 
class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_siswa');
    }


    public function index()
    {
        $data = [
            'title' => 'App Jadwal',
            'tampil' => $this->M_siswa->tampil()->result_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('siswa/v_tampil', $data);
        $this->load->view('templates/footer');
    }

    public function addSiswa()
    {
        if(isset($_POST['simpan'])) {
            $data = [
                'id_siswa'=> $this->input->post('id_siswa'),
                'nama_siswa'=> $this->input->post('nama_siswa'),
                'nama_ortu'=> $this->input->post('nama_ortu'),
                'no_hp'=> $this->input->post('no_hp'),
                'alamat'=> $this->input->post('alamat'),
            ];

           $this->M_siswa->insertSiswa($data);
           $this->session->set_flashdata('success', 'Data berhasil disimpan.');
           redirect('siswa/index');
        }
    }

    public function ubah($id_siswa)
    {
        $where = ['id_siswa' => $id_siswa];
        $data = [
            'title' => 'App Jadwal',
            'tampil' => $this->M_siswa->ubah($where)->row_array()
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('siswa/v_ubah', $data);
        $this->load->view('templates/footer');
    }

    public function ubahSiswa()
    {
        if(isset($_POST['simpan'])) {
            $data = [
                'id_siswa' => $this->input->post('id_siswa'),
                'nama_siswa' => $this->input->post('nama_siswa'),
                'nama_ortu' => $this->input->post('nama_ortu'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
            ];

            $where = ['id_siswa' => $this->input->post('id_siswa')];
            $this->M_siswa->updateSiswa($data, $where);
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
            redirect('siswa/index');
        }
    }

    public function hapus($id_siswa)
    {
        $where = ['id_siswa' => $id_siswa];
        $this->M_siswa->deleteSiswa($where);
        redirect('siswa/index');
    }
}
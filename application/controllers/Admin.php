<?php
class Admin extends CI_Controller {
    
    public function index()
    {
        $data = [
            'title' => 'App Penjadwalan'
        ];

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard');
        $this->load->view('templates/footer');
    }
}
?>


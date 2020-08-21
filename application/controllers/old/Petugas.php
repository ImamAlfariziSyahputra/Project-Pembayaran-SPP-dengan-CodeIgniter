<?php 

class Petugas extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Petugas';
        $data['css'] = 'petugas.css';
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('sekolah/petugas.php');
        $this->load->view('templates/footer.php');
    }
}

?>
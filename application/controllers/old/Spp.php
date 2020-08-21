<?php 

class Spp extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_spp');
    }

    public function index()
    {
        $data['judul'] = 'Data SPP';
        $data['css'] = 'spp.css';

        $data['spp'] = $this->Model_spp->getAllSpp();
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('spp/index.php', $data);
        $this->load->view('templates/footer.php');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data SPP';
        $data['css'] = 'spp.css';

        $this->form_validation->set_rules('tahun', 'Nama', 'required|numeric');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');
        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('spp/tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_spp->tambahDataSpp();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('spp');
        }        
    }

    public function hapus($id)
    {
        $this->Model_spp->hapusDataSpp($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('spp');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data SPP';
        $data['css'] = 'spp.css';
        $data['spp'] = $this->Model_spp->getSppById($id);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('spp/ubah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_spp->ubahDataSpp();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('spp');
        }        
    }


}

?>
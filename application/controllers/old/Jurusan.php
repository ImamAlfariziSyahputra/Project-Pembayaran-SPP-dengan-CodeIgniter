<?php 

class Jurusan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jurusan');
    }

    public function index()
    {
        $data['judul'] = 'Jurusan';
        $data['css'] = 'jurusan.css';

        $data['jurusan'] = $this->Model_jurusan->getAllJurusan();
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('jurusan/index.php');
        $this->load->view('templates/footer.php');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Jurusan';
        $data['css'] = 'jurusan.css';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('jurusan/tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_jurusan->tambahDataJurusan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('jurusan');
        }
    }

    public function hapus($id)
    {
        $this->Model_jurusan->hapusDataJurusan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jurusan');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Jurusan';
        $data['css'] = 'jurusan.css';
        $data['jurusan'] = $this->Model_jurusan->getJurusanById($id);

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('jurusan/ubah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_jurusan->ubahDataJurusan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jurusan');
        }        
    }
}

?>
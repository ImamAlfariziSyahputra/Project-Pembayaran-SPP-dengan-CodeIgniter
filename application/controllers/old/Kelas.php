<?php 

class Kelas extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_kelas');
        $this->load->model('Model_jurusan');
    }

    public function index()
    {
        $data['judul'] = 'Kelas';
        $data['css'] = 'kelas.css';

        $data['kelas'] = $this->Model_kelas->getAllKelas();
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('kelas/index.php');
        $this->load->view('templates/footer.php');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Kelas';
        $data['css'] = 'kelas.css';

        $data['jurusan'] = $this->Model_jurusan->getAllJurusan();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('kelas/tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_kelas->tambahDataKelas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelas');
        }        
    }

    public function hapus($id)
    {
        $this->Model_kelas->hapusDataKelas($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Kelas';
        $data['css'] = 'kelas.css';
        $data['kelas'] = $this->Model_kelas->getKelasById($id);
        $data['jurusan'] = $this->Model_jurusan->getAllJurusan();

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('kelas/ubah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_kelas->ubahDataKelas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelas');
        }        
    }


}

?>
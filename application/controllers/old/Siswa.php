<?php 

class Siswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_siswa');
        $this->load->model('Model_kelas');
        $this->load->model('Model_spp');
    }

    public function index()
    {
        $data['judul'] = 'Siswa';
        $data['css'] = 'siswa.css';

        $data['siswa'] = $this->Model_siswa->getAllSiswa();
        
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('siswa/index.php');
        $this->load->view('templates/footer.php');
    }
    public function tambah()
    {
        $data['judul'] = 'Siswa';
        $data['css'] = 'siswa.css';
        
        $data['kelas'] = $this->Model_kelas->getAllKelas();
        $data['spp'] = $this->Model_spp->getAllSpp();

        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no', 'No Telepon', 'required|numeric');
        
        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('siswa/tambah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_siswa->tambahDataSiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }

    public function hapus($id)
    {
        $this->Model_siswa->hapusDataSiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('siswa');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Siswa';
        $data['css'] = 'siswa.css';
        $data['siswa'] = $this->Model_siswa->getSiswaById($id);
        $data['kelas'] = $this->Model_kelas->getAllKelas();
        $data['spp'] = $this->Model_spp->getAllSpp();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/sidebar.php', $data);
            $this->load->view('siswa/ubah.php', $data);
            $this->load->view('templates/footer.php');
        } else {
            $this->Model_siswa->ubahDataSiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('siswa');
        }        
    }
        
}

?>
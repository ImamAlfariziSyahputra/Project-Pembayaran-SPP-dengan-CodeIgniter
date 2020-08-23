<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        user_level();
        $this->load->model('Model_kelas');
        $this->load->model('Model_jurusan');
    }

    public function index()
    {
        $data['title'] = 'Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Model_kelas->getAllKelas();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/kelas/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->Model_jurusan->getAllJurusan();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/kelas/tambah');
            $this->load->view('templates/footer');
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
        $data['title'] = 'Form Ubah Data Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $this->Model_kelas->getKelasById($id);
        $data['jurusan'] = $this->Model_jurusan->getAllJurusan();
        

        $this->form_validation->set_rules('nama', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/kelas/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_kelas->ubahDataKelas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelas');
        }
    }
    
}
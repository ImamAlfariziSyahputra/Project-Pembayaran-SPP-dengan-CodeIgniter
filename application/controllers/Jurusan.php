<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        user_level();
        $this->load->model('Model_jurusan');
    }

    public function index()
    {
        $data['title'] = 'Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jurusan'] = $this->Model_jurusan->getAllJurusan();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/jurusan/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Jurusan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/jurusan/tambah');
            $this->load->view('templates/footer');
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

    public function edit($id)
    {
        $data['title'] = 'Form Ubah Data Jurusan';
        $data['jurusan'] = $this->Model_jurusan->getJurusanById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/jurusan/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_jurusan->ubahDataJurusan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jurusan');
        }
    }
    
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_siswa');
        $this->load->model('Model_kelas');
        $this->load->model('Model_spp');
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getAllSiswa();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/siswa/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['kelas'] = $this->Model_kelas->getAllKelas();
        $data['spp'] = $this->Model_spp->getAllSpp();

        $this->form_validation->set_rules('nisn', 'NISN', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no', 'No Telepon', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/siswa/tambah');
            $this->load->view('templates/footer');
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
        $data['title'] = 'Form Ubah Data Siswa';
        $data['siswa'] = $this->Model_siswa->getSiswaById($id);
        $data['kelas'] = $this->Model_kelas->getAllKelas();
        $data['spp'] = $this->Model_spp->getAllSpp();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nisn', 'Nisn', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no', 'No Telp', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/siswa/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_siswa->ubahDataSiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('siswa');
        }
    }
    
}
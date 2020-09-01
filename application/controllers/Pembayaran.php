<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        user_level();
        $this->load->model('Model_pembayaran');
        $this->load->model('Model_siswa');
        $this->load->model('Model_spp');
    }

    public function index()
    {
        $data['title'] = 'Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getAllSiswa();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('petugas/pembayaran/index');
        $this->load->view('templates/footer');
    }

    public function bayar($id)
    {
        $data['title'] = 'Form Pembayaran';
        $data['siswa'] = $this->Model_siswa->getSiswaById($id);
        $data['siswas'] = $this->Model_siswa->getAllSiswa();
        $data['spp'] = $this->Model_spp->getAllSpp();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // $this->form_validation->set_rules('nisn', 'Nama', 'required');
        // $this->form_validation->set_rules('tgl_bayar', 'Tanggal Bayar', 'required');
        // $this->form_validation->set_rules('bulan_bayar', 'Bulan Bayar', 'required');
        // $this->form_validation->set_rules('tahun_bayar', 'Tahun Bayar', 'required');
        // $this->form_validation->set_rules('id_spp', 'Nominal', 'required');
        $this->form_validation->set_rules('jumlah_bayar', 'Jumlah Bayar', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('petugas/pembayaran/bayar');
            $this->load->view('templates/footer');
        } else {
            $this->Model_pembayaran->tambahBayar();
            $this->session->set_flashdata('flash', 'Ditambah');
            redirect('user/history');
        }
    }

    // public function tambah()
    // {
    //     $data['title'] = 'Form Tambah Data Jurusan';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    //     if ($this->form_validation->run() == FALSE) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar');
    //         $this->load->view('templates/topbar');
    //         $this->load->view('admin/jurusan/tambah');
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Model_jurusan->tambahDataJurusan();
    //         $this->session->set_flashdata('flash', 'Ditambahkan');
    //         redirect('jurusan');
    //     }
    // }

    // public function hapus($id)
    // {
    //     $this->Model_jurusan->hapusDataJurusan($id);
    //     $this->session->set_flashdata('flash', 'Dihapus');
    //     redirect('jurusan');
    // }

    
    
}
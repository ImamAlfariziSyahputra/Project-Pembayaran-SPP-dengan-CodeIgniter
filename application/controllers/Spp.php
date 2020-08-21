<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_spp');
    }

    public function index()
    {
        $data['title'] = 'SPP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['spp'] = $this->Model_spp->getAllSpp();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/spp/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data SPP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['css'] = 'spp.css';

        $this->form_validation->set_rules('tahun', 'Nama', 'required|numeric');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/spp/tambah');
            $this->load->view('templates/footer');
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
        $data['title'] = 'Form Ubah Data SPP';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['css'] = 'spp.css';
        $data['spp'] = $this->Model_spp->getSppById($id);

        $this->form_validation->set_rules('tahun', 'Tahun', 'required|numeric');
        $this->form_validation->set_rules('nominal', 'Nominal', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('admin/spp/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_spp->ubahDataSpp();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('spp');
        }
    }
    
}
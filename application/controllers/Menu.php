<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        user_level();
        $this->load->model('Model_menu');
    }
    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Model_menu->getAllMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('menu/index');
        $this->load->view('templates/footer');        
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('menu', 'Nama Menu', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('menu/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_menu->tambahDataMenu();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('menu');
        }
    }

    public function hapus($id)
    {
        $this->Model_menu->hapusDataMenu($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('menu');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Ubah Data Menu';
        $data['menu'] = $this->Model_menu->getMenuById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('menu', 'Nama Menu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('menu/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_menu->ubahDataMenu();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('menu');
        }
    }

}
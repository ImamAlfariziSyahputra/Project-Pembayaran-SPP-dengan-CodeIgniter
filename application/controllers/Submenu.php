<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Submenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_submenu');
        $this->load->model('Model_menu');
    }
    public function index()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['submenu'] = $this->Model_submenu->getAllSubMenu();
        $data['menu'] = $this->Model_menu->getAllMenu();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('submenu/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Submenu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->Model_menu->getAllMenu();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('submenu/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_submenu->tambahDataSubMenu();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('submenu');
        }
    }

    public function hapus($id)
    {
        $this->Model_submenu->hapusDataSubmenu($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('submenu');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Submenu';
        $data['submenu'] = $this->Model_submenu->getSubMenuById($id);
        $data['menu'] = $this->Model_menu->getAllMenu();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'Url', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('submenu/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Model_submenu->ubahDataSubmenu();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('submenu');
        }
    }
}

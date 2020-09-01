<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        user_level();
        $this->load->model('Model_user');
        $this->load->model('Model_pembayaran');
        $this->load->model('Model_siswa');
    }

    public function index()
    {
        $data['title'] = 'Beranda';
        $data['css'] = 'home.css';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/headeruser', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footeruser');
        
    }

    public function myProfile()
    {
        $data['title'] = 'Profil Saya';
        $data['css'] = 'myprofile.css';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/headeruser', $data);
        $this->load->view('user/profile/index');
        $this->load->view('templates/footeruser');
    }
    public function ubahProfile()
    {
        $data['title'] = 'Ubah Profil';
        $data['css'] = 'editprofile.css';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/headeruser', $data);
            $this->load->view('user/profile/edit', $data);
            $this->load->view('templates/footeruser');
        } else {
            $this->Model_user->ubahDataUser();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('user/myprofile');
        }
    }

    public function history()
    {
        $data['title'] = 'Histori Pembayaran';
        $data['css'] = 'history.css';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->Model_siswa->getAllSiswa();
        $data['pembayaran'] = $this->Model_pembayaran->getAllPembayaran();

        $this->load->view('templates/headeruser', $data);
        $this->load->view('user/history/index');
        $this->load->view('templates/footeruser');
    }

    // -----------------OLD--------------------------------------

    // public function index()
    // {
    //     $data['title'] = 'Home';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('user/index');
    //     $this->load->view('templates/footer');
    // }
    
    // public function myProfile()
    // {
    //     $data['title'] = 'My Profile';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('user/profile/old/index');
    //     $this->load->view('templates/footer');
    // }

    // public function ubahProfile()
    // {
    //     $data['title'] = 'Edit Profile';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    //     $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
    //     if ($this->form_validation->run() == false) {
    //         $this->load->view('templates/header', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('user/profile/old/edit', $data);
    //         $this->load->view('templates/footer');
    //     } else {
    //         $this->Model_user->ubahDataUser();
    //         $this->session->set_flashdata('flash', 'Diubah');
    //         redirect('user');
    //     }
    // }

    // public function history()
    // {
    //     $data['title'] = 'Histori Pembayaran';
    //     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    //     $data['siswa'] = $this->Model_siswa->getAllSiswa();
    //     $data['pembayaran'] = $this->Model_pembayaran->getAllPembayaran();


    //     $this->load->view('templates/header', $data);
    //     $this->load->view('templates/sidebar');
    //     $this->load->view('templates/topbar');
    //     $this->load->view('user/history/old/index');
    //     $this->load->view('templates/footer');
    // }

}

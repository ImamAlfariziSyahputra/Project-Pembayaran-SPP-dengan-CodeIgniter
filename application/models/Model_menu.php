<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_menu extends CI_Model
{
    public function getAllMenu()
    {
        return $this->db->get('user_menu')->result_array();
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function tambahDataMenu()
    {
        $data = [
            "menu"  => $this->input->post('menu', true)
        ];

        $this->db->insert('user_menu', $data);
    }

    public function ubahDataMenu()
    {
        $data = [
            "menu"  => $this->input->post('menu', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function hapusDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }
}
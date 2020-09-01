<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_spp extends CI_model 
{
    public function getAllSpp()
    {
        return $this->db->get('spp')->result_array();
    }

    public function getSppById($id)
    {
        return $this->db->get_where('spp', ['id_spp' => $id])->row_array();
    }

    public function tambahDataSpp()
    {
        $data = [
            "tahun"  => $this->input->post('tahun', true),
            "nominal" => $this->input->post('nominal', true)
        ];

        $this->db->insert('spp', $data);
    }

    public function ubahDataSpp()
    {
        $data = [
            "tahun"  => $this->input->post('tahun', true),
            "nominal" => $this->input->post('nominal', true)
        ];

        $this->db->where('id_spp', $this->input->post('id'));
        $this->db->update('spp', $data);
    }

    public function hapusDataSpp($id)
    {
        $this->db->where('id_spp', $id);
        $this->db->delete('spp');
    }
}

?>
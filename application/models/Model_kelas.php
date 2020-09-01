<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kelas extends CI_model 
{
    public function getAllKelas()
    {
        $query = "SELECT kelas.*, jurusan.nama_jurusan
                    FROM kelas JOIN jurusan
                    ON kelas.id_jurusan = jurusan.id_jurusan
                ";
        return $this->db->query($query)->result_array();

        // return $this->db->get('kelas')->result_array();
    }

    public function getKelasById($id)
    {
        return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
    }

    public function tambahDataKelas()
    {
        $data = [
            "nama_kelas"  => $this->input->post('nama', true),
            "id_jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->insert('kelas', $data);
    }

    public function ubahDataKelas()
    {
        $data = [
            "nama_kelas"  => $this->input->post('nama', true),
            "id_jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->where('id_kelas', $this->input->post('id'));
        $this->db->update('kelas', $data);
    }

    public function hapusDataKelas($id)
    {
        $this->db->where('id_kelas', $id);
        $this->db->delete('kelas');
    }
}

?>
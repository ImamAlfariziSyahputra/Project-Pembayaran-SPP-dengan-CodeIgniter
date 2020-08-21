<?php 

class Model_jurusan extends CI_model {


    public function getAllJurusan()
    {
        return $this->db->get('jurusan')->result_array();
    }

    public function getJurusanById($id)
    {
        return $this->db->get_where('jurusan', ['id_jurusan' => $id])->row_array();
    }

    public function tambahDataJurusan()
    {
        $data = [
            "nama_jurusan"  => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->insert('jurusan', $data);
    }

    public function ubahDataJurusan()
    {
        $data = [
            "nama_jurusan"  => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true)
        ];

        $this->db->where('id_jurusan', $this->input->post('id'));
        $this->db->update('jurusan', $data);
    }

    public function hapusDataJurusan($id)
    {
        $this->db->where('id_jurusan', $id);
        $this->db->delete('jurusan');
    }
}

?>
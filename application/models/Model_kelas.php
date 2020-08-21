<?php 

class Model_kelas extends CI_model {

    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
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
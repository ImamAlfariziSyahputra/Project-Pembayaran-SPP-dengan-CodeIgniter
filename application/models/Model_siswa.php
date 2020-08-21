<?php 

class Model_siswa extends CI_model {


    public function getAllSiswa()
    {
        return $this->db->get('siswa')->result_array();
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('siswa', ['nisn' => $id])->row_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nisn"  => $this->input->post('nisn', true),
            "nis" => $this->input->post('nis', true),
            "nama" => $this->input->post('nama', true),
            "id_kelas" => $this->input->post('kelas', true),
            "alamat" => $this->input->post('alamat', true),
            "no_telp" => $this->input->post('no', true),
            "id_spp" => $this->input->post('nominal', true)
        ];

        $this->db->insert('siswa', $data);
    }

    public function ubahDataSiswa()
    {
        $data = [
            "nisn"  => $this->input->post('nisn', true),
            "nama"  => $this->input->post('nama', true),
            "id_kelas" => $this->input->post('kelas', true),
            "alamat"  => $this->input->post('alamat', true),
            "no_telp"  => $this->input->post('no', true),
            "id_spp"  => $this->input->post('nominal', true)
        ];

        $this->db->where('nisn', $this->input->post('nisn'));
        $this->db->update('siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        $this->db->where('nisn', $id);
        $this->db->delete('siswa');
    }
}

?>
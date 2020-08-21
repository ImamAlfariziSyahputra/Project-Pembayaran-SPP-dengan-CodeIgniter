<?php 

class Model_siswa extends CI_model {


    public function getAllSiswa()
    {
        return $this->db->get('pembayaran')->result_array();
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
            "nama_jurusan"  => $this->input->post('nama', true),
            "deskripsi" => $this->input->post('deskripsi', true)
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
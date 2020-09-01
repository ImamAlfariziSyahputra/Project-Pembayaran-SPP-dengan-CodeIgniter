<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pembayaran extends CI_model 
{
    public function getAllPembayaran()
    {
        $query = "SELECT pembayaran.*, user.name, spp.nominal, siswa.nama
                    FROM pembayaran 
                    LEFT JOIN user ON pembayaran.id_user = user.id
                    LEFT JOIN siswa ON pembayaran.nisn = siswa.nisn
                    LEFT JOIN spp ON pembayaran.id_spp = spp.id_spp
                ";
        return $this->db->query($query)->result_array();

        // return $this->db->get('pembayaran')->result_array();
    }

    // public function getJurusanById($id)
    // {
    //     return $this->db->get_where('jurusan', ['id_jurusan' => $id])->row_array();
    // }

    public function tambahBayar()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "nisn" => $this->input->post('nisn', true),
            "tgl_bayar" => $this->input->post('tgl_bayar', true),
            "bulan_bayar" => $this->input->post('bulan_bayar', true),
            "tahun_bayar" => $this->input->post('tahun_bayar', true),
            "id_spp" => $this->input->post('id_spp', true),
            "jumlah_bayar" => $this->input->post('jumlah_bayar', true)
        ];

        $this->db->insert('pembayaran', $data);
    }

    // public function ubahDataJurusan()
    // {
    //     $data = [
    //         "nama_jurusan"  => $this->input->post('nama', true),
    //         "deskripsi" => $this->input->post('deskripsi', true)
    //     ];

    //     $this->db->where('id_jurusan', $this->input->post('id'));
    //     $this->db->update('jurusan', $data);
    // }

    // public function hapusDataJurusan($id)
    // {
    //     $this->db->where('id_jurusan', $id);
    //     $this->db->delete('jurusan');
    // }
}

?>
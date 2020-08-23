<?php 

class Model_role extends CI_model {


    public function getAllRole()
    {
        return $this->db->get('user_role')->result_array();
    }

    public function getRoleById($id)
    {
        return $this->db->get_where('user_role', ['id' => $id])->row_array();
    }

    public function tambahDataRole()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];

        $this->db->insert('user_role', $data);
    }

    public function ubahDataRole()
    {
        $data = [
            "role" => $this->input->post('role', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_role', $data);
    }

    public function hapusDataRole($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_role');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_model 
{
    public function ubahDataUser()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $name = $this->input->post('nama', true);
        $email  = $this->input->post('email', true);

        // cek gambar ada yg di upload
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['upload_path'] = './assets/img/profile/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $old_image = $data['user']['image'];
                if($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/profile/' . $old_image); // FCPATH sama kaya BASE_URL() // unlink() untuk menghapus gambar
                }

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('name' , $name);
        $this->db->where('email', $email);
        $this->db->update('user');
    }
}

?>
<?php 

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // $this->load->model('modelsistem');
        $this->load->library('form_validation');
    }

    public function index() 
    {
        $data['judul'] = 'Dashboard';
        $data['css'] = 'dashboard.css';
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('dashboard/dashboard.php');
        $this->load->view('templates/footer.php');
    }

    public function login() {
        $this->load->view('login.php');
    }

    





















    // public function test() {
    //     $data['register'] = $this->modelsistem->getUser();
    //     $data['c_user'] = $this->modelsistem->count_user();
    //     $this->load->view('test.php', $data);
    // }

    // public function simpan_data() {
    //     $this->modelsistem->simpan_db();
    // }

    // public function edit($id)
    // {
    //     $data['data_edit'] = $this->modelsistem->getDataById($id);
    //     $data['level'] = ['admin', 'petugas'];

    //     $this->form_validation->set_rules('username', 'Username', 'required');
    //     $this->form_validation->set_rules('nama', 'Nama', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     $this->form_validation->set_rules('level', 'Level', 'required');

    //     if ( $this->form_validation->run() == FALSE ) {
    //         $this->load->view('dashboard/ubah', $data);
    //     } else {
    //         $this->modelsistem->editData();
    //         redirect('dashboard/test');
    //     }
    // }
    
    // public function delete($id)
    // {
    //     $this->modelsistem->deleteData($id);
    // }
}

?>


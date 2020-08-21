<?php 

class Transaksip extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'Transaksi Pembayaran';
        $data['css'] = 'transaksip.css';
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('transaksi/transaksip.php');
        $this->load->view('templates/footer.php');
    }
    public function bayar()
    {
        $data['judul'] = 'Transaksi Pembayaran';
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('transaksi/bayar.php');
        $this->load->view('templates/footer.php');
    }
}

?>
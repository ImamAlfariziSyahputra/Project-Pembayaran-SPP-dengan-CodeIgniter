<?php

class Cetak extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pembayaran');
    }
    
    public function preview()
    {
        $data['pembayaran'] = $this->Model_pembayaran->getAllPembayaran();
        $this->load->view('user/cetak/preview', $data);
    }

    public function xls()
    {
        header('Content-Type: application/vnd.openxmlformats-officedocumentspreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="History Pembayaran.xls"');
        header('Cache-Control: max-age=0');

        $data['pembayaran'] = $this->Model_pembayaran->getAllPembayaran();
        $this->load->view('user/cetak/preview', $data);
    }

    public function pdf()
    {
        $mpdf = new \Mpdf\Mpdf();
        $pembayaran = $this->Model_pembayaran->getAllPembayaran();
        $data = $this->load->view('user/cetak/preview' , ['pembayaran' => $pembayaran], TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }
}

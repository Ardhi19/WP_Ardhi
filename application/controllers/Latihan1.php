<?php
class Latihan1 extends CI_controller
{
    public function index()
    {
        echo "selamat Datang ... selamat belajar web programing";
        //$this ->load ->view('view - latihan');
    }

    public function penjumlahan ($n1, $n2)
    {
       $this->load->model('Model_latihan1');
       $data['nilai1'] = $n1;
       $data['nilai2'] = $n2;
      $data['hasil'] = $this->Model_latihan1->penjumlahan($n1, $n2);
        
      $this->load->view('view-latihan', $data);
    }
}

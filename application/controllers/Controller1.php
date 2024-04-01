<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

     public function penjumlahan ($n1, $n2)
    {   
        $this->load=>model('Model_Latihan1');

        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $this->Model_Latihan1->jumlah($n1, $n2);

        $this->load->view('view-Latihan1', $data);

    } 
}
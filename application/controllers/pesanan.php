<?php if(! defined("BASEPATH")) exit("No direct script access allowed");

class Pesanan extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API = "http://localhost/restserver/index.php/api/";
    }
    
    // menampilkan data produk
    function index(){
        $data['dataproduk'] = json_decode($this->curl->simple_get($this->API.'/pesan'));
        $data['title'] = "Data Pesanan";
        $this->load->view('pesanan/data',$data);
    }
    
    // hapus data produk
    function hapus($id){
        if(empty($id)){
            redirect('pesanan');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/pesan', array('kode_order'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Hapus Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Hapus Data Gagal');
            }
            redirect('pesanan');
        }
    }
}

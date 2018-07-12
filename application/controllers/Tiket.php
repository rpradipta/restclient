<?php if(! defined("BASEPATH")) exit("No direct script access allowed");

class Tiket extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API = "http://localhost/restserver/index.php/api/";
    }
    
    // menampilkan data produk
    function index(){
        $data['dataproduk'] = json_decode($this->curl->simple_get($this->API.'/tiket'));
        $data['title'] = "Data Tiket";
        $this->load->view('tiket/data',$data);
    }
    
    // tambah data produk
    function tambah(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_airline' => $this->input->post('airline'),
                'tgl'      =>  $this->input->post('tgl'),
                'harga'     =>  $this->input->post('harga'),
                'asal'      =>  $this->input->post('asal'),
                'tujuan'     =>  $this->input->post('tujuan'));
            $insert =  $this->curl->simple_put($this->API.'/tiket', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Tambah Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Tambah Data Gagal');
            }
            redirect('tiket');
        }else{
            $data['title'] = "Tambah Data";
            $this->load->view('tiket/tambah',$data);
        }
    }
    
    // ubah data produk
    function ubah(){
        if(isset($_POST['submit'])){
            $data = array(
                'id' => $this->input->post('id'),
                'tgl'        =>  $this->input->post('tgl'),
                'harga'      =>  $this->input->post('harga'),
                'asal'     =>  $this->input->post('asal'),              
                'tujuan'     =>  $this->input->post('tujuan')
                );
            $update =  $this->curl->simple_post($this->API.'/tiket', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Ubah Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Ubah Data Gagal');
            }
            redirect('tiket');
        }else{
            $params = array('kode_tiket'    =>  $this->uri->segment(3));
            $data['title'] = "Ubah Data";
            $produk = json_decode($this->curl->simple_get($this->API.'/tiket',$params));
            $data['dataproduk'] = $produk[0];
            $this->load->view('tiket/ubah',$data);
        }
    }
    
    // hapus data produk
    function hapus($id){
        if(empty($id)){
            redirect('tiket');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/tiket', array('kode_tiket'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Hapus Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Hapus Data Gagal');
            }
            redirect('tiket');
        }
    }

    function pesan($id){
        if(empty($id)){
            redirect('tiket');
        }else{
            $pesan = $this->curl->simple_put($this->API.'/pesan', array('kode_tiket'=>$id), array(CURLOPT_BUFFERSIZE => 10));
            $delete =  $this->curl->simple_delete($this->API.'/tiket', array('kode_tiket'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Tiket berhasil dipesan');
            }else
            {
               $this->session->set_flashdata('hasil','Tiket gagal dipesan');
            }
            redirect('tiket');
        }   
    }
}

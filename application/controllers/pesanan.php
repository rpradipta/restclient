<?php if(! defined("BASEPATH")) exit("No direct script access allowed");

class Tiket extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API = "http://localhost/restserver/index.php/api/";
    }
    
    // menampilkan data produk
    function index(){
        $data['dataproduk'] = json_decode($this->curl->simple_get($this->API.'/pesan'));
        $data['title'] = "Data Produk";
        $this->load->view('pesanan/data',$data);
    }
    
//     // tambah data produk
//     function tambah(){
//         if(isset($_POST['submit'])){
//             $data = array(
//                 'nama'      =>  $this->input->post('nama'),
//                 'tipe'     =>  $this->input->post('tipe'),
//                 'harga'      =>  $this->input->post('harga'),
//                 'stok'     =>  $this->input->post('stok'));
//             $insert =  $this->curl->simple_put($this->API.'/produk', $data, array(CURLOPT_BUFFERSIZE => 10)); 
//             if($insert)
//             {
//                 $this->session->set_flashdata('hasil','Tambah Data Berhasil');
//             }else
//             {
//                $this->session->set_flashdata('hasil','Tambah Data Gagal');
//             }
//             redirect('produk');
//         }else{
//             $data['title'] = "Tambah Data";
//             $this->load->view('tiket/tambah',$data);
//         }
//     }
    
//     // ubah data produk
//     function ubah(){
//         if(isset($_POST['submit'])){
//             $data = array(
//                 'id'        =>  $this->input->post('id'),
//                 'nama'      =>  $this->input->post('nama'),
//                 'tipe'     =>  $this->input->post('tipe'),
//                 'harga'      =>  $this->input->post('harga'),
//                 'stok'     =>  $this->input->post('stok'));
//             $update =  $this->curl->simple_post($this->API.'/produk', $data, array(CURLOPT_BUFFERSIZE => 10)); 
//             if($update)
//             {
//                 $this->session->set_flashdata('hasil','Ubah Data Berhasil');
//             }else
//             {
//                $this->session->set_flashdata('hasil','Ubah Data Gagal');
//             }
//             redirect('produk');
//         }else{
//             $params = array('id'    =>  $this->uri->segment(3));
//             $data['title'] = "Ubah Data";
//             $produk = json_decode($this->curl->simple_get($this->API.'/produk',$params));
//             $data['dataproduk'] = $produk[0];
//             $this->load->view('produk/ubah',$data);
//         }
//     }
    
//     // hapus data produk
//     function hapus($id){
//         if(empty($id)){
//             redirect('produk');
//         }else{
//             $delete =  $this->curl->simple_delete($this->API.'/produk', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
//             if($delete)
//             {
//                 $this->session->set_flashdata('hasil','Hapus Data Berhasil');
//             }else
//             {
//                $this->session->set_flashdata('hasil','Hapus Data Gagal');
//             }
//             redirect('produk');
//         }
//     }
// }

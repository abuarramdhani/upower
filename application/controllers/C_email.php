<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class c_email extends CI_Controller {
  
  public function index()
  {
   $this->load->helper('form');                             //memasukkan library helper form
   $this->load->view('contact');       //memasukkan tampilan view tampilan_pengiriman.php
  }


  public function prosespengiriman()
  {
   $this->load->helper(array('form', 'url'));
   $this->load->library('email');
   
   //konfigurasi email
   $config = array();
   $config['charset'] = 'utf-8';
   $config['useragent'] = 'Codeigniter'; //bebas sesuai keinginan kamu
   $config['protocol']= "smtp";
   $config['mailtype']= "html";
   $config['smtp_host']= "ssl://smtp.gmail.com";
   $config['smtp_port']= "465";
   $config['smtp_timeout']= "5";
   $config['smtp_user']= "fadhilaalfi2@gmail.com";              //isi dengan email anda
   $config['smtp_pass']= "19971997aa";            // isi dengan password dari email anda
   $config['crlf']="\r\n";
   $config['newline']="\r\n";
  
   $config['wordwrap'] = TRUE;

 //memanggil library email dan set konfigurasi untuk pengiriman email
   
   $this->email->initialize($config);
 //konfigurasi pengiriman kotak di view ke pengiriman email di gmail
   $this->email->from($this->input->post('from'));
   $this->email->to($this->input->post('to'));
   $this->email->subject($this->input->post('subject'));
   $this->email->message($this->input->post('isi'));

//proses uploads
   
   $this->upload->initialize(array(
        "upload_path"   => "./emails/",
   		"allowed_types" => "*"
   ));
   
// pernyataan jika pengiriman berhasil atau tidak
  
   if($this->email->send())
   {
    echo "tutorial pengiriman email primasaja.com berhasil";
   }else
   {
    echo "tutorial pengiriman email primasaja.com gagal";
   }
   
  }
 }

<?php  

class c_user extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		if($this->session->userdata('nama_depan') != null || $this->session->userdata('nama_depan') != "") {
		} else {
			redirect(base_url('index.php/MyController/index'));
		}
	}
 
	function index(){
			$this->load->view('user/home');
	}

	function servicepage() {
		$this->load->view('user/services');
	}

	function contactpage() {
		$this->load->view('user/contact');
	}

	function bookingpage() {
		$this->load->view('user/booking');
	}

	function catalogpage() {
		$data = $this->My_Model->getData();
		$this->load->view('user/catalog', array('data' => $data));
	}

	function gensetpage() {
		$data = $this->My_Model->getGenset();
		$this->load->view('user/cataloggen', array('data' => $data));
	}

	function compage() {
		$data = $this->My_Model->getCompressor();
		$this->load->view('user/catalogcom', array('data' => $data));
	}

	function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/MyController/index'));
	}

	function email() {
		$this->load->library('email');

		$config['proxy_ips'] = '';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '30';
		$config['smtp_user'] = 'unitraksuper@gmail.com';
		$config['smtp_pass'] = 'admin123admin';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE;
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

		$this->email->to('unitrakpower@gmail.com');
		$this->email->from('unitraksuper@gmail.com');
		$this->email->subject('message');
		$this->email->message($this->input->post('name').'<br>'.$this->input->post('email').'<br>'.$this->input->post('subject').'<br>'.$this->input->post('message'));
		$this->email->send();
		echo '<script>alert("Pesan Terkirim!")</script>';

		$this->contactpage();
	}

	function bookemail() {
		$this->load->library('email');

		$config['proxy_ips'] = '';
		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'ssl://smtp.gmail.com';
		$config['smtp_port'] = '465';
		$config['smtp_timeout'] = '30';
		$config['smtp_user'] = 'unitraksuper@gmail.com';
		$config['smtp_pass'] = 'admin123admin';
		$config['charset'] = 'utf-8';
		$config['newline'] = "\r\n";
		$config['mailtype'] = 'html';
		$config['validation'] = TRUE;
		$config['wordwrap'] = TRUE;

		$this->email->initialize($config);

		$this->email->to('unitrakpower@gmail.com');
		$this->email->from('unitraksuper@gmail.com');
		$this->email->subject('Booking');
		$this->email->message($this->session->userdata('email').'<br>'.$this->session->userdata('nama_depan').'<br>'.$this->session->userdata('telepon').'<br>'.$this->session->userdata('lokasi').'<br>'.$this->input->post('alamat').'<br>'.$this->input->post('tgl').'<br>'.$this->input->post('masalah'));
		$this->email->send();

		echo '<script>alert("Booking Success!")</script>';
		$this->index();
	}

}

?>
<?php  

class MyController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		if(!$this->session->userdata('nama_depan')) {
		} else {
			redirect(base_url('c_user'));
		}
	}

	function index() {
		$this->load->view('home');
	}

	function emailpage() {
		$this->load->view('email');
	}

	function servicepage() {
		$this->load->view('services');
	}

	function contactpage() {     
		$this->load->view('contact');
	}

	function bookingpage() {
		$this->load->view('booking');
	}

	function userloginpage() {
		$this->load->view('userlogin');
	}

	function userloginpage2() {
		$this->load->view('user/userlogin');
	}

	function catalogpage() {
		$data = $this->My_Model->getData();
		$this->load->view('catalog', array('data' => $data));
	}

	function gensetpage() {
		$data = $this->My_Model->getGenset();
		$this->load->view('cataloggen', array('data' => $data));
	}

	function compage() {
		$data = $this->My_Model->getCompressor();
		$this->load->view('catalogcom', array('data' => $data));
	}

    function useremail() {
		$email = $this->input->post('email');

		$isEmail = $this->My_Model->checkemail($email);

		if ($isEmail==true) {
			$this->session->set_userdata('email', $email);
			redirect(base_url('index.php/MyController/userloginpage'));
		} else {
			$this->signuppage();
		}
	}

	function masuk() {
		$email = $this->session->userdata('email');
		$password_user = $this->input->post('password_user');
		$cek = $this->My_Model->cek_login($email, $password_user);
		if($cek->num_rows() == 1) {
			foreach ($cek->result() as $user) {
				$sess_user['emai'] = $user->email;
				$sess_user['password_user'] = $user->password_user;
				$sess_user['nama_depan'] = $user->nama_depan;
				$sess_user['nama_belakang'] = $user->nama_belakang;
				$sess_user['telepon'] = $user->telepon;
				$sess_user['lokasi'] = $user->lokasi;
				$this->session->set_userdata($sess_user);
			}
		redirect(base_url('index.php/c_user/index'));
		} else {
			$this->userloginpage2();
		}
	}

	function signuppage() {
		$this->load->view('signup');
	}

	function signupuser() {
		$data = array(
				'email' => $this->input->post('email'),
				'password_user' => $this->input->post('password_user'),
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'telepon' => $this->input->post('telepon'),
				'lokasi' => $this->input->post('lokasi'),
			);
		$this->My_Model->addUser($data);
		$this->userloginpage2();
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

	public function indexmaps(){

	$this->load->library('googlemaps');

	$config['center'] = '37.4419, -122.1419';
	$config['zoom'] = 'auto';
	$this->googlemaps->initialize($config);

	$marker = array();
	$marker['position'] = '37.429, -122.1419';
	$this->googlemaps->add_marker($marker);
	$data['map'] = $this->googlemaps->create_map();

	$this->load->view('contact', $data);

}

}

?>
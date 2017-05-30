<?php  

class c_adminlogin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		if(!$this->session->userdata('nama_admin')) {
		} else {
			redirect(base_url('c_adminlogin'));
		}
	}
 
	function index(){
			$this->load->view('admin/login');
	}

	function adminmasuk() {
		$username_admin = $this->input->post('username_admin');
		$pass_admin = $this->input->post('pass_admin');
		$cek = $this->My_Model->cek_admin($username_admin, $pass_admin);
		if($cek->num_rows() == 1) {
			foreach ($cek->result() as $admin) {
				$sess_admin['username_admin'] = $admin->username_admin;
				$sess_admin['pass_admin'] = $admin->pass_admin;
				$sess_admin['nama_admin'] = $admin->nama_admin;
				$this->session->set_userdata($sess_admin);
			}
		redirect(base_url('index.php/c_admin/index'));
		} else {
			$this->index();
		}
	}
}

?>
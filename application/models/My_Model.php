<?php  

class My_Model extends CI_Model {

	function getData() {
		$query = $this->db->get('forklift');
		return $query->result_array();
	}

	function getuData($where="")
	{
		$data = $this->db->query('select * from forklift ' .$where);
		return $data->result_array();

	}

	function getUser() {
		$query = $this->db->get('user');
		return $query->result_array();
	}

	function getGenset() {
		$query = $this->db->get('genset');
		return $query->result_array();
	}

	function getuGenset($where="")
	{
		$data = $this->db->query('select * from genset ' .$where);
		return $data->result_array();

	}

	function getCompressor() {
		$query = $this->db->get('compressor');
		return $query->result_array();
	}

	function getuCom($where="")
	{
		$data = $this->db->query('select * from compressor ' .$where);
		return $data->result_array();

	}

	function getAdmin() {
		$query = $this->db->get('admin');
		return $query->result_array();
	}
	

	function addData($data) {
		$this->db->insert('forklift', $data);
	}

	function addGenset($data) {
		$this->db->insert('genset', $data);
	}

	function addComp($data) {
		$this->db->insert('compressor', $data);
	}


	function addUser($data) {
		$this->db->insert('user', $data);
	}

	function login_authen($username, $password) {
		//kalo di modul pake query builder, ini query biasa
		$sql =  "select * from admin where username_admin = '$username' and pass_admin = '$password'";
		$query = $this->db->query($sql);

		if ($query->num_rows()==1) {
			return true;
		} else {
			return false;
		}
	}

	function checkemail($email) {
		//kalo di modul pake query builder, ini query biasa
		$sql =  "select * from user where email = '$email'";
		$query = $this->db->query($sql);

		if ($query->num_rows()==1) {
			return true;
		} else {
			return false;
		}
	}
	
	function wrong_password($username, $value) {
		$sql =  "update admin set authentication = $value where username_admin = '$username'";
		$query = $this->db->query($sql);
	}

	function hapus_forklift($item) {
		$this->db->where_in('id_forklift', $item);
		$this->db->delete('forklift');
	}

	function hapus_genset($item) {
		$this->db->where_in('id_genset', $item);
		$this->db->delete('genset');
	}

	function hapus_com($item) {
		$this->db->where_in('id_com', $item);
		$this->db->delete('compressor');
	}

	public function updateforklift($tabelName,$data,$where){      
      $res = $this->db->update($tabelName,$data,$where);
      return $res;
    } 

    public function updategenset($tabelName,$data,$where){      
      $res = $this->db->update($tabelName,$data,$where);
      return $res;
    } 

    public function updatecom($tabelName,$data,$where){      
      $res = $this->db->update($tabelName,$data,$where);
      return $res;
    } 

	public function cek_login($email, $password_user) {
		$this->db->where('email', $email);
		$this->db->where('password_user', $password_user);
		return $this->db->get('user');
	}

	public function cek_admin($username_admin, $pass_admin) {
		$this->db->where('username_admin', $username_admin);
		$this->db->where('pass_admin', $pass_admin);
		return $this->db->get('admin');
	}


}

?>
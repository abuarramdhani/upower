<?php  

class c_admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		if($this->session->userdata('nama_admin') != null || $this->session->userdata('nama_admin') != "") {
		} else {
			redirect(base_url('c_adminlogin/index'));
		}
	}

	function index() {
		$this->load->view('admin/adminpage');
	}

	function createforklift() {
		$this->load->view('admin/f_forklift');
	}

	function creategenset() {
		$this->load->view('admin/f_genset');
	}

	function createcom() {
		$this->load->view('admin/f_compressor');
	}

	function dataforklift() {
		$data = $this->My_Model->getData();
		$this->load->view('admin/t_forklift', array('data' => $data));
	}

	function datagenset() {
		$data = $this->My_Model->getGenset();
		$this->load->view('admin/t_genset', array('data' => $data));
	}

	function datacom() {
		$data = $this->My_Model->getCompressor();
		$this->load->view('admin/t_com', array('data' => $data));
	}

	function uploadforklift() {
		$config['upload_path'] = './uploads/forklift/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar_forklift')) {
			echo $this->upload->display_errors();
			echo "Gagal mengupload gambar";
		} else {
			$this->docreateforklift();
			//$this->readData();
		}
    }

	function docreateforklift() {
		$img = $this->upload->data();
		$gambar_forklift = $img['file_name'];
		//$this->createpage();
		$data = array(
				'id_forklift' => $this->input->post('id_forklift'),
				'nama_forklift' => $this->input->post('nama_forklift'),
				'merk_forklift' => $this->input->post('merk_forklift'),
				'tipe_forklift' => $this->input->post('tipe_forklift'),
				'tahun_forklift' => $this->input->post('tahun_forklift'),
				'berat_forklift' => $this->input->post('berat_forklift'),
				'max_forklift' => $this->input->post('max_forklift'),
				'kondisi_forklift' => $this->input->post('kondisi_forklift'),
				'harga_forklift' => $this->input->post('harga_forklift'),
				'des_forklift' => $this->input->post('des_forklift'),
				'gambar_forklift' => $gambar_forklift
			);

		$this->My_Model->addData($data);
		$this->createforklift();
	}

	function uploadgenset() {
		$config['upload_path'] = './uploads/genset/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('img_genset')) {
			echo $this->upload->display_errors();
			echo "Gagal mengupload gambar";
		} else {
			$this->docreategenset();
			//$this->readData();
		}
    }

	function docreategenset() {
		$img = $this->upload->data();
		$img_genset = $img['file_name'];
		//$this->createpage();
		$data = array(
				'id_genset' => $this->input->post('id_genset'),
				'nama_genset' => $this->input->post('nama_genset'),
				'merk_genset' => $this->input->post('merk_genset'),
				'tipe_genset' => $this->input->post('tipe_genset'),
				'berat_genset' => $this->input->post('berat_genset'),
				'kondisi_genset' => $this->input->post('kondisi_genset'),
				'harga_genset' => $this->input->post('harga_genset'),
				'des_genset' => $this->input->post('des_genset'),
				'img_genset' => $img_genset
			);

		$this->My_Model->addGenset($data);
		$this->creategenset();
	}

	function uploadcom() {
		$config['upload_path'] = './uploads/compressor/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 10000;
		$config['max_width'] = 10000;
		$config['max_height'] = 10000;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('img_com')) {
			echo $this->upload->display_errors();
			echo "Gagal mengupload gambar";
		} else {
			$this->docreatecom();
			//$this->readData();
		}
    }

	function docreatecom() {
		$img = $this->upload->data();
		$img_com = $img['file_name'];
		//$this->createpage();
		$data = array(
				'id_com' => $this->input->post('id_com'),
				'nama_com' => $this->input->post('nama_com'),
				'merk_com' => $this->input->post('merk_com'),
				'model_com' => $this->input->post('model_com'),
				'berat_com' => $this->input->post('berat_com'),
				'kondisi_com' => $this->input->post('kondisi_com'),
				'harga_com' => $this->input->post('harga_com'),
				'des_com' => $this->input->post('des_com'),
				'img_com' => $img_com
			);

		$this->My_Model->addComp($data);
		$this->createcom();
	}

	function login() {
		$username = $this->input->post('username_admin');
		$password = $this->input->post('pass_admin');

		$isLogin = $this->My_Model->login_authen($username, $password);

		if ($isLogin==true) {
			$this->readData();
			//$this->createpage();
		} 
	}

	function delforklift() {
		$item = $this->input->post('item');
		$this->My_Model->hapus_forklift($item);
		$this->dataforklift();
	}

	function delgenset() {
		$item = $this->input->post('item');
		$this->My_Model->hapus_genset($item);
		$this->datagenset();
	}

	function delcom() {
		$item = $this->input->post('item');
		$this->My_Model->hapus_com($item);
		$this->datacom();
	}

	public function editforklift($id_forklift) {
		$brg = $this->My_Model->getuData("where id_forklift = '$id_forklift'");
		
		$data = array(	
			"id_forklift" => $brg[0]['id_forklift'],
			"nama_forklift" => $brg[0]['nama_forklift'],
			"merk_forklift" => $brg[0]['merk_forklift'],
			"tipe_forklift" => $brg[0]['tipe_forklift'],
			"tahun_forklift" => $brg[0]['tahun_forklift'],
			"berat_forklift" => $brg[0]['berat_forklift'],
			"max_forklift" => $brg[0]['max_forklift'],
			"kondisi_forklift" => $brg[0]['kondisi_forklift'],
			"harga_forklift" => $brg[0]['harga_forklift'],
			"des_forklift" => $brg[0]['des_forklift'],
			
		);
		$this->load->view('admin/u_forklift', $data);
	}

	public function doeditforklift() {
		$id_forklift = $_POST['id_forklift'];
        $nama_forklift = $_POST['nama_forklift'];
        $merk_forklift = $_POST['merk_forklift'];
        $tipe_forklift = $_POST['tipe_forklift'];
        $tahun_forklift = $_POST['tahun_forklift'];
        $berat_forklift = $_POST['berat_forklift'];
        $max_forklift = $_POST['max_forklift'];
        $kondisi_forklift = $_POST['kondisi_forklift'];
        $harga_forklift = $_POST['harga_forklift'];
        $des_forklift = $_POST['des_forklift'];


		$config['upload_path']          = './uploads/forklift/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$where = array('id_forklift' => $id_forklift);

		if (!$this->upload->do_upload('gambar_forklift')){
		} else {
			$data = array (
				'nama_forklift' => $nama_forklift,
				'merk_forklift' => $merk_forklift,
				'tipe_forklift' => $tipe_forklift,
				'tahun_forklift' => $tahun_forklift,
				'berat_forklift' => $berat_forklift,
				'max_forklift' => $max_forklift,
				'kondisi_forklift' => $kondisi_forklift,
				'harga_forklift' => $harga_forklift,
				'des_forklift' => $des_forklift,
				'gambar_forklift' => $this->upload->data('file_name')
				);
			$res = $this->My_Model->updateforklift('forklift',$data,$where);
			if($res>=1){
				$this->dataforklift();
			}else{
				echo "<h2>Insert data gagal</h2>";
			}
		}
	}

	public function editgenset($id_genset) {
		$brg = $this->My_Model->getuGenset("where id_genset = '$id_genset'");
		
		$data = array(	
			"id_genset" => $brg[0]['id_genset'],
			"nama_genset" => $brg[0]['nama_genset'],
			"merk_genset" => $brg[0]['merk_genset'],
			"tipe_genset" => $brg[0]['tipe_genset'],
			"berat_genset" => $brg[0]['berat_genset'],
			"kondisi_genset" => $brg[0]['kondisi_genset'],
			"harga_genset" => $brg[0]['harga_genset'],
			"des_genset" => $brg[0]['des_genset'],
			
		);
		$this->load->view('admin/u_genset', $data);
	}

	public function doeditgenset() {
		$id_genset = $_POST['id_genset'];
        $nama_genset = $_POST['nama_genset'];
        $merk_genset = $_POST['merk_genset'];
        $tipe_genset = $_POST['tipe_genset'];
        $berat_genset = $_POST['berat_genset'];
        $kondisi_genset = $_POST['kondisi_genset'];
        $harga_genset = $_POST['harga_genset'];
        $des_genset = $_POST['des_genset'];


		$config['upload_path']          = './uploads/genset/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$where = array('id_genset' => $id_genset);

		if (!$this->upload->do_upload('img_genset')){
		} else {
			$data = array (
				'nama_genset' => $nama_genset,
				'merk_genset' => $merk_genset,
				'tipe_genset' => $tipe_genset,
				'berat_genset' => $berat_genset,
				'kondisi_genset' => $kondisi_genset,
				'harga_genset' => $harga_genset,
				'des_genset' => $des_genset,
				'img_genset' => $this->upload->data('file_name')
				);
			$res = $this->My_Model->updategenset('genset',$data,$where);
			if($res>=1){
				$this->datagenset();
			}else{
				echo "<h2>Insert data gagal</h2>";
			}
		}
	}

	public function editcom($id_com) {
		$brg = $this->My_Model->getuCom("where id_com = '$id_com'");
		
		$data = array(	
			"id_com" => $brg[0]['id_com'],
			"nama_com" => $brg[0]['nama_com'],
			"merk_com" => $brg[0]['merk_com'],
			"model_com" => $brg[0]['model_com'],
			"berat_com" => $brg[0]['berat_com'],
			"kondisi_com" => $brg[0]['kondisi_com'],
			"harga_com" => $brg[0]['harga_com'],
			"des_com" => $brg[0]['des_com'],
			
		);
		$this->load->view('admin/u_com', $data);
	}

	public function doeditcom() {
		$id_com = $_POST['id_com'];
        $nama_com = $_POST['nama_com'];
        $merk_com = $_POST['merk_com'];
        $model_com = $_POST['model_com'];
        $berat_com = $_POST['berat_com'];
        $kondisi_com = $_POST['kondisi_com'];
        $harga_com = $_POST['harga_com'];
        $des_com = $_POST['des_com'];


		$config['upload_path']          = './uploads/compressor/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$where = array('id_com' => $id_com);

		if (!$this->upload->do_upload('img_com')){
		} else {
			$data = array (
				'nama_com' => $nama_com,
				'merk_com' => $merk_com,
				'model_com' => $model_com,
				'berat_com' => $berat_com,
				'kondisi_com' => $kondisi_com,
				'harga_com' => $harga_com,
				'des_com' => $des_com,
				'img_com' => $this->upload->data('file_name')
				);
			$res = $this->My_Model->updatecom('compressor',$data,$where);
			if($res>=1){
				$this->datacom();
			}else{
				echo "<h2>Insert data gagal</h2>";
			}
		}
	}

	function adminlogout() {
		$this->session->sess_destroy();
		redirect(base_url('index.php/c_adminlogin/index'));
	}
}

?>
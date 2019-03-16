<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$res = $this->session->get_userdata();
		$nama='';
		if (array_key_exists('nama', $res)){
			# code...
			$nama = $res['nama'];
		};
		if ($nama=='') {
			// code...
		$this->load->view('v_login');
		} else {
			$where = array(
			'username' => $nama
			);
			$query = $this->m_login->cek_login("user",$where);
			$cek = $query->num_rows();
		// $cek = $this->m_login->cek_login("user",$where)->result_array();
			if($cek > 0){
			// echo $cek->role;
			foreach ($query->result() as $row) {
				# code...
				$role = $row->role;
			}
			$data_session = array(
				'nama' => $nama,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			if ($role=='admin') {
				# code...
				echo $role;
			redirect(base_url('index.php/admin/admin'));
			}
			elseif ($role=='direktur') {
				# code...
				echo $role;
			redirect(base_url('index.php/direktur/direktur'));
			}
			elseif ($role=='keuangan') {
				# code...
				echo $role;
			redirect(base_url('index.php/keuangan/keuangan'));
			}
			elseif ($role=='klien') {
				# code...
				echo $role;
			redirect(base_url('index.php/welcome/welcome'));
			}
			}
		}
	}

	function aksilogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = '0';
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$query = $this->m_login->cek_login("user",$where);
		$cek = $query->num_rows();
		// $cek = $this->m_login->cek_login("user",$where)->result_array();
		if($cek > 0){
			// echo $cek->role;
			foreach ($query->result() as $row) {
				# code...
				$role = $row->role;
			}
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			if ($role=='admin') {
				# code...
			redirect(base_url('index.php/admin/admin'));
			}
			elseif ($role=='direktur') {
				# code...
			redirect(base_url('index.php/direktur/direktur'));
			}
			elseif ($role=='keuangan') {
				# code...
			redirect(base_url('index.php/keuangan/keuangan'));
			}
			elseif ($role=='klien') {
				# code...
			redirect(base_url('index.php/welcome/welcome'));
			}

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$data_ses = array(
				'nama' => "",
				'status' => ""
				);
		$this->session->set_userdata($data_ses);
		// $this->session->unset_userdata('nama');
		// $this->session->unset_userdata('status');
		#$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}

	function parsenama($x) { 
    	if (!$x) {
        	throw new Exception('no nama');
    	}
    	return $x;
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }

    function index() {
		    if($this->session->has_userdata('username')){
				  if($this->session->userdata('type')==1){
  					redirect('c_user/homeAdmin');
  				}elseif($this->session->userdata('type')==2){
  					redirect('c_user/homeUser');
  				}
  		}else{

        $this->load->view('template/header'); // default template
    		//$this->load->view('direktur/dashboard',$data); // dashboard vendornya
    		$this->load->view('Login/LoginUser');
    		//$this->load->view('template/footer');
  		}

		}

	function registrasi_admin() {
		$this->load->view('template/header');
		$this->load->view('Registrasi/registrasi_admin');
	}

	function registrasi_user() {
		$this->load->view('template/header');
		$this->load->view('Registrasi/registrasi_user');
	}

	function reg_admin_baru() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$check_username = $this->m_user->cek_username($username);

		if($check_username->num_rows() > 0 ) {
			?>
								<script type=text/javascript>alert("Username sudah ada");</script>

					<?php
					$this->index();
		} else {
			$data = array(
				'username' => $username,
				'password' => md5($password),
				'nama' => $nama,
				'email' => $email,
				'type' => 1
			);

			$this->m_user->insertUser($data);

			redirect('c_user');
		}
	}

		function reg_user_baru() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');

			$check_username = $this->m_user->cek_username($username);

			if($check_username->num_rows() > 0 ) {
				?>
									<script type=text/javascript>alert("Username sudah ada");</script>

						<?php
						$this->index();
			} else {
				$data = array(
					'username' => $username,
					'password' => md5($password),
					'nama' => $nama,
					'email' => $email,
					'type' => 2
				);

				$this->m_user->insertUser($data);

				redirect('c_user');
			}

	}
	public function homeUser(){
		$this->load->view('template/header'); // default template
		$this->load->view('user/home_dashboard');
		$this->load->view('template/footer');
	}
	public function keluar(){
		$this->session->sess_destroy();
		redirect('c_user');
	}


}

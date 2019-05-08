<?php

/*
*/
class c_login extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('m_user');
	}

	function index() {
		if($this->session->has_userdata('username')){
				if($this->session->userdata('type')=='1'){
					redirect('c_user/homeAdmin');
				}
				elseif($this->session->userdata('type')=='2'){
					redirect('c_user/homeUser');
				}
		}else{
			$this->load->view('Login/LoginUser');
		}

	}

	function validate() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$cekUser = $this->m_user->cek($username, md5($password));

		if($cekUser->num_rows() == 1)
		{
			foreach($cekUser->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['nama'] = $data->nama;
				$sess_data['email'] = $data->email;
				$sess_data['type'] = $data->type;
				$this->session->set_userdata($sess_data);
			}


			if($this->session->userdata('type') == 1)
			{
				redirect('c_user/homeAdmin');
			}else if ($this->session->userdata('type') == 2)
			{
				redirect('c_user/homeUser');
			}
		} else {
			print_r($password);
			echo '<br>';
			print_r($username);

			 /*?>
                     <script type=text/javascript>alert("Maaf, kombinasi username dengan password salah. ");</script>

        <?php*/
			//$this->index();

		}
	}

	function view_register() {
	    $this->load->view('Login/SignUpUser');
  }

}

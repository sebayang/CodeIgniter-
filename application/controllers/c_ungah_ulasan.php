<?php

/**
*
*/
class c_ungah_ulasan extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
        $this->load->model('m_jawaban');
				$this->load->model('m_website');
	}

	function index() {
		if($this->session->has_userdata('username')){
				if($this->session->userdata('type')==2){
					redirect('c_ungah_ulasan/formUlasan');
				}elseif($this->session->userdata('type')==1){
					redirect('c_user');
				}
		}else{
			$this->load->view('Login/LoginUser');
		}

	}

	function formUlasan(){
		$data['website'] = $this->m_website->getAllWebsite()->result();
		//-------------------------------------------------
		$this->load->view('template/header');
		$this->load->view('user/ungah_ulasan',$data);
		$this->load->view('template/footer');
	}

	function insert_jawaban(){
		$nama_website = $this->input->post('nama_website');
		$username = $this->session->userdata('username');
		$jawaban1 = $this->input->post('jawaban1');
		$jawaban2 = $this->input->post('jawaban2');
		$jawaban3 = $this->input->post('jawaban3');
		$jawaban4 = $this->input->post('jawaban4');
		$jawaban5 = $this->input->post('jawaban5');
		$jawaban6 = $this->input->post('jawaban6');
		$jawaban7 = $this->input->post('jawaban7');
		$jawaban8 = $this->input->post('jawaban8');
		$jawaban9 = $this->input->post('jawaban9');
		$jawaban10 = $this->input->post('jawaban10');
		$nilai = $this->input->post('nilai');

		$data = array(
			'nama_website' => $nama_website,
			'username' => $username,
			'jawaban1'=> $jawaban1,
			'jawaban2'=> $jawaban2,
			'jawaban3'=> $jawaban3,
			'jawaban4'=> $jawaban4,
			'jawaban5'=> $jawaban5,
			'jawaban6'=> $jawaban6,
			'jawaban7'=> $jawaban7,
			'jawaban8'=> $jawaban8,
			'jawaban9'=> $jawaban9,
			'jawaban10'=> $jawaban10,
			'nilai'=> $nilai
		);
		$this->m_jawaban->insertJawaban($data);

		redirect('c_user');


	}
	public function keluar(){
		$this->session->sess_destroy();
		redirect('c_user');
	}


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_post_anda extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_jawaban');
    }

    function index() {
		    if($this->session->has_userdata('username')){
				  if($this->session->userdata('type')==1){
  					redirect('c_user/homeAdmin');
  				}elseif($this->session->userdata('type')==2){
  					redirect('c_post_anda/postAnda');
  				}
  		}else{

        $this->load->view('template/header'); // default template
    		$this->load->view('Login/LoginUser');
  		}

		}

	public function postAnda(){
		$username = $this->session->userdata('username');

		$where = array(
			'username'=>$username
		);
		$data['jawaban'] = $this->m_jawaban->getAllJawaban($where)->result();
		//-------------------------------------------------------------
		$this->load->view('template/header'); // default template
		$this->load->view('user/post_anda', $data);
		$this->load->view('template/footer');
	}

	public function hapus_jawaban($id){
		// code...
		$where = array (
			'id' => $id
		);
		$this->m_jawaban->deleteJawaban($where);
		redirect(base_url('c_post_anda'));
	}
	public function keluar(){
		$this->session->sess_destroy();
		redirect('c_user');
	}



}

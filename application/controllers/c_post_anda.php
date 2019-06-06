<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_post_anda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_website');
		$this->load->model('m_jawaban');
	}

	function index()
	{
		if ($this->session->has_userdata('username')) {
			if ($this->session->userdata('type') == 1) {
				redirect('c_user/homeAdmin');
			} elseif ($this->session->userdata('type') == 2) {
				redirect('c_post_anda/postAnda');
			}
		} else {

			$this->load->view('template/header'); // default template
			$this->load->view('Login/LoginUser');
		}
	}

	public function postAnda()
	{
		//setup session menu
		$this->session->set_userdata('menu', 'postanda');

		$username = $this->session->userdata('username');

		$where = array(
			'username' => $username
		);
		$data['jawaban'] = $this->m_jawaban->getAllJawaban($where)->result();
		//-------------------------------------------------------------
		$this->load->view('template/header'); // default template
		$this->load->view('user/post_anda', $data);
		$this->load->view('template/footer');
	}

	public function edit_jawaban($id)
	{

		$data['website'] = $this->m_website->getAllWebsite()->result();
		$data['jawaban'] = $this->m_jawaban->getDataJawaban($id);

		$this->load->view('template/header'); // default template
		$this->load->view('user/edit_post_anda', $data);
		$this->load->view('template/footer');
	}

	public function hapus_jawaban($id)
	{
		// code...
		// $where = array('id' => $id);
		// $this->m_jawaban->deleteJawaban($where);

		//Mendeteksi nama_website dari id pada tabel jawaban
		$nama_website = $this->db->where('id', $id)->get('jawaban')->row()->nama_website;
		$username = $this->session->userdata('username');

		//Melakukan delete pada tabel komentar dari id_jawaban
		$this->db->where('id_jawaban', $id);
		$this->db->delete('komentar');

		//Melakukan delete pada tabel thumb dari id_jawaban
		$this->db->where('id_jawaban', $id);
		$this->db->delete('thumbs');

		//Melakukan delete pada tabel jawaban dari id_jawaban
		$this->db->where('id', $id);
		$this->db->delete('jawaban');

		$this->set_nilai_website($nama_website);

		redirect(base_url('c_post_anda'));
	}


	function set_nilai_website($nama_website)
	{
		//Mengambil total row = jumlah user yang memberikan ulasan dan likenya lebih besar atau sama
		$this->db->where('nama_website', $nama_website)->where("(like > dislike OR like = dislike)");
		$jumlah = $this->db->get('jawaban')->num_rows();

		//Mengambil sum nilai dari seluruh user yang memberikan ulasan dan likenya lebih besar atau sama
		$this->db->where('nama_website', $nama_website)->where("(like > dislike OR like = dislike)");
		$this->db->select('SUM(nilai) AS nilai', FALSE);
		$total = $this->db->get('jawaban')->row()->nilai;

		//Membagi var total / var jumlah
        if (empty($jumlah) || empty($total)) {
            $nilai = 0;
        } else {
            $nilai = $total / $jumlah;
        }

		//Memasukan variable untuk update pada tabel website
		$data = array(
			'nilai' => $nilai,
			'total' => $total,
			'jumlah' => $jumlah
		);

		$this->db->where('nama_website', $nama_website);
		return $this->db->update('website', $data);
	}


	public function keluar()
	{
		$this->session->sess_destroy();
		redirect('c_user');
	}
}

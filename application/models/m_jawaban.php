<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_jawaban extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function getUser($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function insertJawaban($data)
	{
		$this->db->insert('jawaban', $data);
	}
	function getAllJawaban($where)
	{
		$this->db->select('* , id, nama_website, nilai, ');
		$this->db->from('jawaban');
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}

	function deleteJawaban($where)
	{
		$this->db->where($where);
		$this->db->delete('jawaban');
	}


	function checkJawabanUser($username,$nama_website)
	{
		$this->db->where('username', $username);
		$this->db->where('nama_website', $nama_website);
		$query = $this->db->get('jawaban');
		
		if ($query->num_rows() == 1) {
			return $query->row()->id;
		} else {
			return false;
		}
	}

	function updateJawaban($data, $id_jawaban)
	{
		$this->db->where('id', $id_jawaban);
		return $this->db->update('jawaban', $data);
	}

	function getDataJawaban($id){
		$this->db->where('id',$id);
		return $this->db->get('jawaban')->row();
	}

	function getWebsite($nama_website){
		$this->db->where('nama_website',$nama_website);
		return $this->db->get('jawaban')->result();
	}

	function getJawabanDetail($username,$nama_website){
		$this->db->where('username',$username);
		$this->db->where('nama_website',$nama_website);
		return $this->db->get('jawaban')->row();
	}

}

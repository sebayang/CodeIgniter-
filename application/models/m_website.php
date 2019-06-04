<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_website extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function getUser($where,$table){
		return $this->db->get_where($table,$where);
	}


	function getAllWebsite(){
			$this->db->select('*');
			$this->db->from('website');
			$query = $this->db->get();
			return $query;
	}
	

	function getValueWebsite($where){
			$this->db->select('nilai, total, jumlah, ');
			$this->db->from('website');
			$this->db->where($where);
			$query = $this->db->get();
			return $query;
	}

	function add_website($website){
		$this->db->where('nama_website',$website);
		$count = $this->db->get('website')->num_rows();

		if(empty($count)){
			$data = array('nama_website' => $website);
			return $this->db->insert('website',$data);
		}else{
			return false;
		}
	}

	function insertHasil($data2,$where){
		$this->db->where($where);
		$this->db->update('website',$data2);

	}

	function getNilai($where){
			$this->db->select('nilai, ');
			$this->db->from('website');
			$this->db->where($where);
			$query = $this->db->get();
			return $query;
	}
	function getJumlah($where){
			$this->db->select('jumlah, ');
			$this->db->from('website');
			$this->db->where($where);
			$query = $this->db->get();
			return $query;
	}


}

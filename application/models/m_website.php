<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_website extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function getUser($where,$table){
		return $this->db->get_where($table,$where);
	}


	function getAllJawaban($where){
			$this->db->select('* , id, nama_website, nilai, ');
			$this->db->from('jawaban');
			$this->db->where($where);
			$query = $this->db->get();
			return $query;
	}

	function getAllWebsite(){
			$this->db->select('* ,nama_website, ');
			$this->db->from('website');
			$query = $this->db->get();
			return $query;
	}

}

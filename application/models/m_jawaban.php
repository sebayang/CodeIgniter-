<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_jawaban extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function getUser($where,$table){
		return $this->db->get_where($table,$where);
	}

	function insertJawaban($data){
			$this->db->insert('jawaban',$data);
	}
	function getAllJawaban($where){
			$this->db->select('* , id, nama_website, nilai, ');
			$this->db->from('jawaban');
			$this->db->where($where);
			$query = $this->db->get();
			return $query;
	}

	function deleteJawaban($where){
			$this->db->where($where);
			$this->db->delete('jawaban');
	}

}

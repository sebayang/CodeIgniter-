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
}

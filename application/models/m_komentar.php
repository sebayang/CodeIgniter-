<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_komentar extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function insert($idJawaban,$comment){

        $data = array(
            'id_jawaban' => $idJawaban,
            'username' => $this->session->userdata('username'),
            'komentar' => $comment,
            'timestamp' => date('Y-m-d H:i:s')
        );

        return $this->db->insert('komentar',$data);
    }
    
    function get_comment($id){
        $this->db->where('id_jawaban',$id);
        $this->db->order_by('id','desc');
        return $this->db->get('komentar')->result();
    }


}

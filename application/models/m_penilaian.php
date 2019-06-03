<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_penilaian extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function thumbs_up($idJawaban, $username, $nama_website)
    {
        $this->db->where('id_jawaban', $idJawaban);
        $this->db->where('username', $username);
        $query = $this->db->get('thumbs');

        //Mendeteksi apakah sdh ada datanya di database
        if ($query->num_rows() == 1) {

            //Mendeteksi jika sebelumnya sudah di like, maka like akan dibatalkan jika di klik like lagi
            if ($query->row()->is_like == 1) {
                $this->db->where('id_jawaban', $idJawaban);
                $this->db->where('username', $username);
                return $this->db->delete('thumbs');
            } else {
                //Melakukan update jika sebelumnya di unlike, maka akan diubah ke like
                $data = array(
                    'is_like' => 1,
                    'nama_website' => $nama_website,
                    'timestamp' => date('Y-m-d H:i:s')
                );
                $this->db->where('id_jawaban', $idJawaban);
                $this->db->where('username', $username);
                return $this->db->update('thumbs', $data);
            }
        } else {
            //Menambahkan row pada user dan website yang baru pertama kali di like
            $data = array(
                'id_jawaban' => $idJawaban,
                'username' => $username,
                'nama_website' => $nama_website,
                'is_like' => 1,
                'timestamp' => date('Y-m-d H:i:s')
            );
            return $this->db->insert('thumbs', $data);
        }
    }


    function thumbs_down($idJawaban, $username, $nama_website)
    { 
        $this->db->where('id_jawaban', $idJawaban);
        $this->db->where('username', $username);
        $query = $this->db->get('thumbs');

        //Mendeteksi apakah sdh ada datanya di database
        if ($query->num_rows() == 1) {

            //Mendeteksi jika sebelumnya sudah di dislike, maka like akan dibatalkan jika di klik like lagi
            if ($query->row()->is_like == 0) {
                $this->db->where('id_jawaban', $idJawaban);
                $this->db->where('username', $username);
                return $this->db->delete('thumbs');
            } else {
                //Melakukan update jika sebelumnya di like, maka akan diubah ke dislike
                $data = array(
                    'is_like' => 0,
                    'nama_website' => $nama_website,
                    'timestamp' => date('Y-m-d H:i:s')
                );
                $this->db->where('id_jawaban', $idJawaban);
                $this->db->where('username', $username);
                return $this->db->update('thumbs', $data);
            }
        } else {
            //Menambahkan row pada user dan website yang baru pertama kali di dislike
            $data = array(
                'id_jawaban' => $idJawaban,
                'username' => $username,
                'nama_website' => $nama_website,
                'is_like' => 0,
                'timestamp' => date('Y-m-d H:i:s')
            );
            return $this->db->insert('thumbs', $data);
        }
    }

    function check_like($idJawaban){
        $this->db->where('id_jawaban',$idJawaban);
        $this->db->where('username',$this->session->userdata('username'));

        $query = $this->db->get('thumbs');

        if($query->num_rows() == 1){
            return $query->row()->is_like;
        }else{
            return false;
        }
    }
}

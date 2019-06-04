<?php

/**
 *
 */
class c_website extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_jawaban');
        $this->load->model('m_website');
    }

    function index()
    {
        if ($this->session->has_userdata('username')) {
            if ($this->session->userdata('type') == 2) {
                redirect('c_ungah_ulasan/formUlasan');
            } elseif ($this->session->userdata('type') == 1) {
                redirect('c_user');
            }
        } else {
            $this->load->view('Login/LoginUser');
        }
    }

    function add_website()
    {
        $website = $this->input->post('website');
        $result = $this->m_website->add_website($website);
        if ($result) {
            $this->session->set_flashdata('msg', 'Berhasil menambahkan nama website.');
        } else {
            $this->session->set_flashdata('msg', 'Gagal, mohon dipastikan nama website belum pernah diinput sebelumnya.');
        }
        redirect(base_url('c_user/homeAdmin'));
    }

    function delete_website($nama_website)
    {
        $nama_website = str_replace("%20", " ", $nama_website);

        $this->db->where('nama_website', $nama_website);
        $search = $this->db->get('jawaban')->result();
        $id = array();

        if (!empty($search)) {
            foreach ($search as $s) {
                array_push($id, $s->id);
            }

            //Delete id Jawaban pada tabel komentar
            $this->db->where_in('id_jawaban', $id);
            $this->db->delete('komentar');

            //Delete id Jawaban pada tabel thumbs
            $this->db->where_in('id_jawaban', $id);
            $this->db->delete('thumbs');
        }

        //Delete nama website pada tabel jawaban
        $this->db->where('nama_website', $nama_website);
        $this->db->delete('jawaban');

        //Delete nama website pada tabel website
        $this->db->where('nama_website', $nama_website);
        $this->db->delete('website');

        $this->session->set_flashdata('msg', 'Berhasil delete website.');
        redirect(base_url('c_user/homeAdmin'));
    }
}

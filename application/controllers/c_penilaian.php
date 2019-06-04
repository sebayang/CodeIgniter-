<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_penilaian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_website');
        $this->load->model('m_jawaban');
        $this->load->model('m_penilaian');
        $this->load->model('m_komentar');
    }

    function index()
    {
        if ($this->session->has_userdata('username')) {
            if ($this->session->userdata('type') == 1) {
                redirect('c_user/homeAdmin');
            } elseif ($this->session->userdata('type') == 2) {
                redirect('c_penilaian/penilaian');
            }
        } else {

            $this->load->view('template/header'); // default template
            $this->load->view('Login/LoginUser');
        }
    }

    function penilaian()
    {
        //setup session menu
        $this->session->set_userdata('menu','penilaian');
        
        $data['website'] = $this->m_website->getAllWebsite()->result();

        $this->load->view('template/header'); // default template
        $this->load->view('user/penilaian', $data);
        $this->load->view('template/footer');
    }

    function daftar_penilaian($nama_website)
    {

        $nama_website = str_replace("%20", " ", $nama_website);

        $data['website'] = $nama_website;
        $data['jawaban'] = $this->m_jawaban->getWebsite($nama_website);

        $this->load->view('template/header'); // default template
        $this->load->view('user/daftar_penilaian', $data);
        $this->load->view('template/footer');
    }


    function detail_penilaian($username, $nama_website)
    {

        $nama_website = str_replace("%20", " ", $nama_website);
        $data['jawaban'] = $this->m_jawaban->getJawabanDetail($username, $nama_website);
        $data['status_like'] = $this->m_penilaian->check_like($data['jawaban']->id);
        $data['komentar'] = $this->m_komentar->get_comment($data['jawaban']->id);

        $this->load->view('template/header'); // default template
        $this->load->view('user/detail_penilaian', $data);
        $this->load->view('template/footer');
    }


    function thumbs_up($idJawaban, $nama_website, $postByUsername)
    {

        $nama_website = str_replace("%20", " ", $nama_website);
        $username = $this->session->userdata('username');
        $result = $this->m_penilaian->thumbs_up($idJawaban, $username, $nama_website);
        if ($result) {
            $this->counter_like($idJawaban);
            redirect(base_url('c_penilaian/detail_penilaian/' . $postByUsername . '/' . $nama_website));
        } else {
            redirect(base_url('c_penilaian/detail_penilaian/' . $postByUsername . '/' . $nama_website));
        }
    }


    function thumbs_down($idJawaban, $nama_website, $postByUsername)
    {

        $nama_website = str_replace("%20", " ", $nama_website);
        $username = $this->session->userdata('username');
        $result = $this->m_penilaian->thumbs_down($idJawaban, $username, $nama_website);
        if ($result) {
            $this->counter_like($idJawaban);
            redirect(base_url('c_penilaian/detail_penilaian/' . $postByUsername . '/' . $nama_website));
        } else {
            redirect(base_url('c_penilaian/detail_penilaian/' . $postByUsername . '/' . $nama_website));
        }
    }


    function counter_like($idJawaban)
    {
        //Menghitung banyaknya like
        $this->db->where('id_jawaban', $idJawaban);
        $this->db->where('is_like', 1);
        $like = $this->db->get('thumbs')->num_rows();

        //Menghitung banyaknya dislike
        $this->db->where('id_jawaban', $idJawaban);
        $this->db->where('is_like', 0);
        $dislike = $this->db->get('thumbs')->num_rows();

        $data = array(
            'like' => $like,
            'dislike' => $dislike
        );

        $this->db->where('id', $idJawaban);
        return $this->db->update('jawaban', $data);
    }

    function insert_comment()
    {
        $idJawaban = $this->input->post('id');
        $comment = $this->input->post('comment');

        $result = $this->m_komentar->insert($idJawaban,$comment);

        $this->db->where('id',$idJawaban);
        $r = $this->db->get('jawaban')->row();

        $link_user = $r->username;
        $link_nama_website = $r->nama_website;

        redirect(base_url('c_penilaian/detail_penilaian/'.$link_user.'/'.$link_nama_website));

    }
}

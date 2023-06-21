<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Homepage';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('Templates/auth_header');;
        $this->load->view('home/homepage');
        $this->load->view('Templates/auth_footer');
    }
}

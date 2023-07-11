<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{
    
        public function __construct()
        {
            parent::__construct();
        }
    
        public function cek_login($username, $password)
        {
            $this->db->where('username', $username);
            $query = $this->db->get('user');
            return $query;
        }

        public function cekSudahLogin()
        {
            $user = $this->session->userdata('username') && $this->session->userdata('password') && $this->session->userdata('level') && $this->session->userdata('nama');
            if (empty($user)) {
                $this->session->sess_destroy();
                redirect('LoginCuy/viewLogin');
            }
        }
}
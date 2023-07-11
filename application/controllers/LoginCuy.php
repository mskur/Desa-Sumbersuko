<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCuy extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('M_Login');
    }

    public function viewLogin()
    {
        $data = array(
            'title' => 'Login',
            'content' => 'viewLogin'
        );
        $this->load->view('viewLogin', $data);
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

        $cek = $this->M_Login->cek_login($username, $password);
        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $ck) {
                $sess_data['username'] = $ck->username;
                $sess_data['password'] = $ck->password;
                $sess_data['nama'] = $ck->nama;
                $sess_data['level'] = $ck->level;
                $this->session->set_userdata($sess_data);
            }
            redirect('Admin/Dashboard/dashboardAdmin');
        } else {
            redirect('LoginCuy/viewLogin');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Home/HomeSumbersuko');
    }

}

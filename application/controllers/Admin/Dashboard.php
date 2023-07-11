<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
        $this->load->model('M_Konten');
        $this->M_Login->cekSudahLogin();
    }

    public function dashboardAdmin()
    {
        $allKonten = $this->M_Konten->getAllKonten();
        $data = array(
            'dropMenuName' => 'Dashboard',
            'title' => 'Dashboard',
            'content' => 'viewDashboard',
            'allKonten' => $allKonten,
            'countKonten' => count($allKonten),
            'pengumuman' => $this->M_Konten->getPengumuman(1),
        );
        $this->load->view('Admin/viewDashboard', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/LoginCuy/viewLogin');
    }

}
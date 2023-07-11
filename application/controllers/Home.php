<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //load model
        $this->load->model('M_Home');
    }

	public function HomeSumbersuko()
	{
        $data = array(
            'title' => 'Sumbersuko Dringu',
        );
		$this->load->view('homePage/homeSumbersuko', $data);
	}
    
    public function perangkat()
    {
        $data = array(
            'title' => 'Perangkat',
            'content' => 'perangkat'
        );
        $this->load->view('homePage/perangkat', $data);
    }
    
    public function pengumuman()
    {
        $this->load->model('M_Konten');
        $pengumuman = $this->M_Konten->getPengumuman(1);
        
        $data = array(
            'title' => 'Pengumuman',
            'content' => 'pengumuman',
            'pengumuman' => $pengumuman,
        );
        $this->load->view('homePage/pengumuman', $data);
    }
    
    public function berita()
    {
        $this->load->model('M_Konten');
        $data = array(
            'title' => 'Berita',
            'content' => 'berita',
            'allKonten' => $this->M_Konten->getAllKonten(),
        );
        $this->load->view('homePage/berita', $data);
    }

    public function detailKonten($id)
    {
        $this->load->model('M_Konten');
        $data = array(
            'title' => 'Detail Konten',
            'content' => 'detailKonten',
            'konten' => $this->M_Konten->getKonten($id),
        );
        $this->load->view('homePage/detailKonten', $data);
    }
    
    public function BPD()
    {
        $data = array(
            'title' => 'BPD',
            'content' => 'BPD'
        );
        $this->load->view('homePage/BPD', $data);
    }
    
    public function LPP()
    {
        $data = array(
            'title' => 'LPP',
            'content' => 'LPP'
        );
        $this->load->view('homePage/LPP', $data);
    }
    
    public function stunting()
    {
        $data = array(
            'title' => 'Stunting',
            'content' => 'stunting'
        );
        $this->load->view('homePage/stunting', $data);
    }
    
    public function PKK()
    {
        $data = array(
            'title' => 'PKK',
            'content' => 'PKK'
        );
        $this->load->view('homePage/PKK', $data);
    }
    
    public function LKD()
    {
        $data = array(
            'title' => 'LKD',
            'content' => 'LKD'
        );
        $this->load->view('homePage/LKD', $data);
    }
    
    public function karangTaruna()
    {
        $data = array(
            'title' => 'Karang Taruna',
            'content' => 'karangTaruna'
        );
        $this->load->view('homePage/karangTaruna', $data);
    }
    
    public function FAQ()
    {
        $data = array(
            'title' => 'FAQ',
            'content' => 'FAQ'
        );
        $this->load->view('homePage/FAQ', $data);
    }

    public function kartuKeluarga()
    {
        $data = array(
            'title' => 'Kartu Keluarga',
            'content' => 'kartuKeluarga'
        );
        $this->load->view('homePage/kartuKeluarga', $data);
    }
    
    public function aktaKelahiran()
    {
        $data = array(
            'title' => 'Akta Kelahiran',
            'content' => 'aktaKelahiran'
        );
        $this->load->view('homePage/aktaKelahiran', $data);
    }
    
    public function aktaKematian()
    {
        $data = array(
            'title' => 'Akta Kematian',
            'content' => 'aktaKematian'
        );
        $this->load->view('homePage/aktaKematian', $data);
    }
    
    public function biodata()
    {
        $data = array(
            'title' => 'Biodata',
            'content' => 'biodata'
        );
        $this->load->view('homePage/biodata', $data);
    }
    
    public function pindahDatang()
    {
        $data = array(
            'title' => 'Pindah Datang',
            'content' => 'pindahDatang'
        );
        $this->load->view('homePage/pindahDatang', $data);
    }
    
    public function pindahKeluar()
    {
        $data = array(
            'title' => 'Pindah Keluar',
            'content' => 'pindahKeluar'
        );
        $this->load->view('homePage/pindahKeluar', $data);
    }

    public function contact()
    {
        $data = array(
            'title' => 'Contact',
            'content' => 'contact'
        );
        $this->load->view('homePage/contact', $data);
    }
    
    public function aboutUs()
    {
        $data = array(
            'title' => 'About Us',
            'content' => 'aboutUs'
        );
        $this->load->view('homePage/aboutUs', $data);
    }
}
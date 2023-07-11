<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //model
        $this->load->model('M_Konten');

        //login cek
        $this->load->model('M_Login');
        $this->M_Login->cekSudahLogin();

        //library
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function getAllKonten(){
        $data = array(
            'dropMenuName' => 'Konten',
            'title' => 'Konten',
            'content' => 'konten',
            'allKonten' => $this->M_Konten->getAllKonten(),
        );
        $this->load->view('Admin/viewKonten', $data);
    }

    public function addKonten(){
        $data = array(
            'dropMenuName' => 'Konten',
            'title' => 'Add Konten',
            'content' => 'addKonten',
        );
        $this->load->view('Admin/addKonten', $data);
    }

    public function addKontenAction(){
        //verivikasi form diisi sesuai atau tidak
        $this->form_validation->set_rules('judulKonten', 'Judul', 'required|trim', 
            array(
                'required' => 'Judul harus diisi'
            ));
        $this->form_validation->set_rules('isiKonten', 'Konten', 'required',
            array(
                'required' => 'Konten harus diisi'
            ));
        
        //jika form tidak sesuai
        if ($this->form_validation->run() == FALSE) {
            //return with error
            $this->addKonten();
        }
        else {
            $judulKonten = htmlspecialchars($this->input->post('judulKonten'));
            $isiKonten = $this->input->post('isiKonten');

            //upload media with $config
            $config['upload_path'] = './assetsAdmin/img/konten/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = 'konten' . time();
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambarKonten')) {
                $gambarKonten = $this->upload->data('file_name');
            }
            else{
                $gambarKonten = 'default.jpg';
            }

            $data = array(
                'judulKonten' => $judulKonten,
                'isiKonten' => $isiKonten,
                'gambarKonten' => $gambarKonten,
            );

            $this->M_Konten->addKonten($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konten berhasil ditambahkan</div>');
            redirect('Admin/Konten/getAllKonten');
        }
    }

    public function editKonten(){
        $id = $this->input->post('id');
        $data = array(
            'dropMenuName' => 'Konten',
            'title' => 'Edit Konten',
            'content' => 'editKonten',
            'konten' => $this->M_Konten->getKonten($id),
        );
        $this->load->view('Admin/editKonten', $data);
    }

    public function updateKonten(){
        $id = $this->input->post('id');
        //verivikasi form diisi sesuai atau tidak
        $this->form_validation->set_rules('judulKonten', 'Judul', 'required|trim', 
            array(
                'required' => 'Judul harus diisi'
            ));
        $this->form_validation->set_rules('isiKonten', 'Konten',);
        
        //jika form tidak sesuai
        if ($this->form_validation->run() == FALSE) {
            //return getAllKonten with error
            $this->getAllKonten();
        }
        else {
            $judulKonten = htmlspecialchars($this->input->post('judulKonten'));
            $isiKonten = $this->input->post('isiKonten');

            //upload media with $config
            $config['upload_path'] = './assetsAdmin/img/konten/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = 'konten' . time();
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambarKonten')) {
                $gambarKonten = $this->upload->data('file_name');
                $gambarKontenOld = $this->input->post('gambarKontenOld');
                $path = './assetsAdmin/img/konten/' . $gambarKontenOld;
                unlink($path);
            }
            //else no upload
            else{
                $gambarKonten = $this->input->post('gambarKontenOld');
            }

            //update database
            $data = array(
                'judulKonten' => $judulKonten,
                'isiKonten' => $isiKonten,
                'gambarKonten' => $gambarKonten,
            );
            $this->M_Konten->updateKonten($id, $data);
            redirect('Admin/Konten/getAllKonten');
        }
    }

    public function deleteKonten(){
        $id = $this->input->post('id');
        
        $gambarKonten = $this->input->post('gambarKonten');
        $path = './assetsAdmin/img/konten/' . $gambarKonten;
        unlink($path);
        $this->M_Konten->deleteKonten($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konten berhasil dihapus</div>');
        redirect('Admin/Konten/getAllKonten');
    }

    public function getPengumuman(){
        $pengumuman = $this->M_Konten->getPengumuman(1);
        $data = array(
            'dropMenuName' => 'Konten',
            'title' => 'Pengumuman',
            'content' => 'pengumuman',
            'pengumuman' => $pengumuman,
        );

        $this->load->view('Admin/viewPengumuman', $data);
    }

    public function updatePengumumanAction(){
        $id = 1;
        $isiKonten = $this->input->post('isiPengumunan');

        $data = array(
            'isiPengumunan' => $isiKonten,
        );


        $this->M_Konten->updatePengumuman($id, $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pengumuman berhasil diubah</div>');
        redirect('Admin/Konten/getPengumuman');
    }
}
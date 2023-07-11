<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Konten extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllKonten(){
        //return object of all konten
        return $this->db->get('konten')->result();
    }

    public function getKonten($id){
        // return $this->db->get_where('konten', array('id' => $id))->row();
        //return object
        $query = $this->db->get_where('konten', array('id' => $id));
        return $query->row();
    }

    public function addKonten($data){
        $this->db->insert('konten', $data);
    }
        
    public function updateKonten($id, $data){
        $this->db->where('id', $id);
        $this->db->update('konten', $data);
    }

    public function deleteKonten($id){
        $this->db->where('id', $id);
        $this->db->delete('konten');
    }

    public function getPengumuman($id){
        //kembalikan bentuk objek
        return $this->db->get_where('pengumuman', array('idPengumuman' => $id))->row();
    }

    public function updatePengumuman($id, $data){
        $this->db->where('idPengumuman', $id);
        $this->db->update('pengumuman', $data);
    }
}
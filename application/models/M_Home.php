<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Home extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function getMengenalStunting($id)
    {
        //just 1 data from database not more
        $query = $this->db->get_where('mengenalstunting', array('id' => $id));
        //return object
        return $query->row();
    }
}
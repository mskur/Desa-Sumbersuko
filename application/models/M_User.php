<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUser()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('level', 'asc');
        $query = $this->db->get();
        return $query->result();
    }

    public function getUser($id_user)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id_user);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function addUser($data)
    {
        $this->db->insert('user', $data);
    }

    public function editUser($data, $id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }

    public function deleteUser($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('user');
    }

}
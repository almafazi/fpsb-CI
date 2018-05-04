<?php

class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user($key, $value)
    {
        $query = $this->db->get_where('admin', array($key=>$value));
        if(!empty($query->row_array())) {
            return $query->row_array();
        }

        return false;
    }

    public function updatePassword($data)
    {
        return $this->db->update('admin', $data);
    }

    public function getCurrentUsername()
    {
        $query = $this->db->get('admin');
        $ret = $query->row();
        return $ret->username;
    }

    public function is_LoggedIn()
    {
        $this->load->library('session');
        if(!$this->session->userdata('logged_in')) {
            return false;
        }

        return true;
    }

    public function checkPassword($username, $password)
    {
        $hash = $this->get_user('username', $username)['password'];
        if (password_verify($password, $hash)) {
            return true;
        }

        return false;
    }

    public function getRowByRole($role, $table) {
            $data = NULL;

            $this->db->select('*')
            ->from($table)
            ->where('role', $role);

            $query = $this->db->get();
            if ($query->num_rows() > 0) {
               return $query->row();
            }

            return NULL;
    }

    public function getRowBySlug($slug, $table) {
            $data = NULL;

            $this->db->select('*')
            ->from($table)
            ->where('slug', $slug);

            $query = $this->db->get();
            if ($query->num_rows() > 0) {
               return $query->row();
            }

            return NULL;
    }

    public function getRowById($id, $table) {
            $data = NULL;

            $this->db->select('*')
            ->from($table)
            ->where('id', $id);

            $query = $this->db->get();
            if ($query->num_rows() > 0) {
               return $query->row();
            }

            return NULL;
    }

    public function getAll($table){
        $query = $this->db->select('*')->from($table)->get();

        $result = $query->result();
        $query->free_result(); //freeup memory

        return $result;
    }

    public function getAllPost($table,$limit=0){
        $query = $this->db->select('*')->from($table)->where('status','publish')->order_by('id',"desc")->limit($limit)->get();

        $result = $query->result();
        $query->free_result(); //freeup memory

        return $result;
    }

    public function updateByRole($role,$data,$table){
		$this->db->where('role',$role);
		$this->db->update($table,$data);
	}

    public function insert($table,$data){
		$query = $this->db->insert($table,$data);
	}

    public function update($table,$id,$data){
        $this->db->where('id', $id);
        $this->db->update($table,$data);
	}

    public function deleteById($table,$id) {
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

    public function getLastId($table=0) {
      return (!empty($this->db->select('id')->order_by('id',"desc")->limit(1)->get($table)->row())) ? $this->db->select('id')->order_by('id',"desc")->limit(1)->get($table)->row()->id : 0;
    }


}

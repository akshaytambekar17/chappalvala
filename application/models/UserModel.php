<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin_model
 *
 * @author comc
 */
class UserModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsers() {
        $this->db->order_by('id','DESC');
        return $this->db->get('user')->result_array();
    }
    public function getUserById($id) {
        $this->db->where('id',$id);
        return $this->db->get('user')->row_array();
    }
    public function getUserByEmailIdPassword($data) {
        $this->db->where('email_id',$data['email_id']);
        $this->db->where('password',md5($data['password']));
        return $this->db->get('user')->row_array();
    }
    
    
    public function add($data){
        $this->db->insert('user', $data);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function update($updateData){
        $this->db->where('id',$updateData['id']);
        $this->db->update('user',$updateData);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('user'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}

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
class SizeModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getSizes() {
        $this->db->order_by('id','DESC');
        return $this->db->get('size')->result_array();
    }
    public function getSizeById($id) {
        $this->db->where('id',$id);
        return $this->db->get('size')->row_array();
    }
    
    public function add($data){
        $this->db->insert('size', $data);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function update($updateData){
        $this->db->where('id',$updateData['id']);
        $this->db->update('size',$updateData);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('size'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}

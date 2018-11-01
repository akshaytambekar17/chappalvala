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
class CategoryModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getCategories() {
        $this->db->order_by('id','DESC');
        return $this->db->get('category')->result_array();
    }
    public function getCategoryById($id) {
        $this->db->where('id',$id);
        return $this->db->get('category')->row_array();
    }
    
    public function add($data){
        $this->db->insert('category', $data);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function update($updateData){
        $this->db->where('id',$updateData['id']);
        $this->db->update('category',$updateData);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('category'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}

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
class ProductModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getProducts() {
        $this->db->order_by('id','DESC');
        return $this->db->get('product')->result_array();
    }
    public function getProductById($id) {
        $this->db->where('id',$id);
        return $this->db->get('product')->row_array();
    }
    
    public function add($data){
        $this->db->insert('product', $data);
        $last_id = $this->db->insert_id();
        return $last_id;
    }
    public function update($updateData){
        $this->db->where('id',$updateData['id']);
        $this->db->update('product',$updateData);
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('product'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}

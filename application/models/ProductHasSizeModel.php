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
class ProductHasSizeModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getProductHasSize() {
        $this->db->order_by('id','DESC');
        return $this->db->get('product_has_size')->result_array();
    }
    public function getProductHasSizeById($id) {
        $this->db->where('id',$id);
        return $this->db->get('product_has_size')->row_array();
    }
    public function getProductHasSizeBySizeId($id) {
        $this->db->where('size_id',$id);
        return $this->db->get('product_has_size')->result_array();
    }
    public function getProductHasSizeByProductId($id) {
        $this->db->where('product_id',$id);
        return $this->db->get('product_has_size')->result_array();
    }
    
    public function add($data){
        $this->db->trans_start();
        $this->db->insert('product_has_size', $data);
        $this->db->trans_complete();
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('product_has_size'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function deleteByProductId($product_id) {
        $this->db->where('product_id',$product_id);
        $this->db->delete('product_has_size'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}

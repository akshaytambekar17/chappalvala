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
class ProductHasBrandModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getProductHasBrand() {
        $this->db->order_by('id','DESC');
        return $this->db->get('product_has_brand')->result_array();
    }
    public function getProductHasBrandById($id) {
        $this->db->where('id',$id);
        return $this->db->get('product_has_brand')->row_array();
    }
    public function getProductHasBrandByBrandId($id) {
        $this->db->where('brand_id',$id);
        return $this->db->get('product_has_brand')->result_array();
    }
    public function getProductHasBrandByProductId($id) {
        $this->db->where('product_id',$id);
        return $this->db->get('product_has_brand')->result_array();
    }
    
    public function add($data){
        $this->db->trans_start();
        $this->db->insert('product_has_brand', $data);
        $this->db->trans_complete();
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('product_has_brand'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function deleteByProductId($product_id) {
        $this->db->where('product_id',$product_id);
        $this->db->delete('product_has_brand'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}

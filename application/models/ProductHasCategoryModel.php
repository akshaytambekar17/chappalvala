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
class ProductHasCategoryModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getProductHasCategory() {
        $this->db->order_by('id','DESC');
        return $this->db->get('product_has_category')->result_array();
    }
    public function getProductHasCategoryById($id) {
        $this->db->where('id',$id);
        return $this->db->get('product_has_category')->row_array();
    }
    public function getProductHasCategoryByQuotationId($id) {
        $this->db->where('quotation_id',$id);
        return $this->db->get('product_has_category')->result_array();
    }
    public function getProductHasCategoryByProductId($id) {
        $this->db->where('product_id',$id);
        return $this->db->get('product_has_category')->result_array();
    }
    
    public function add($data){
        $this->db->trans_start();
        $this->db->insert('product_has_category', $data);
        $this->db->trans_complete();
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('product_has_category'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
//    public function deleteByQuotationId($quotation_id) {
//        $this->db->where('quotation_id',$quotation_id);
//        $this->db->delete('product_has_category'); 
//        if($this->db->affected_rows()){
//            return true;
//        }else{
//            return false;
//        }
//    }
}

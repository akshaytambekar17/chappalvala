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
class ProductHasColorModel extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
    }
    
    public function getProductHasColor() {
        $this->db->order_by('id','DESC');
        return $this->db->get('product_has_color')->result_array();
    }
    public function getProductHasColorById($id) {
        $this->db->where('id',$id);
        return $this->db->get('product_has_color')->row_array();
    }
    public function getProductHasColorByColorId($id) {
        $this->db->where('color_id',$id);
        return $this->db->get('product_has_color')->result_array();
    }
    public function getProductHasColorByProductId($id) {
        $this->db->where('product_id',$id);
        return $this->db->get('product_has_color')->result_array();
    }
    
    public function add($data){
        $this->db->trans_start();
        $this->db->insert('product_has_color', $data);
        $this->db->trans_complete();
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('product_has_color'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
    public function deleteByProductId($product_id) {
        $this->db->where('product_id',$product_id);
        $this->db->delete('product_has_color'); 
        if($this->db->affected_rows()){
            return true;
        }else{
            return false;
        }
    }
}

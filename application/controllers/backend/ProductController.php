<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('CategoryModel','Category');
        $this->load->model('ProductModel','Product');
        $this->load->model('ProductHasCategoryModel','ProductHasCategory');
    }
    
    public function index()
    {
        $data['title'] = 'Product';
        $data['heading'] = 'Products List';
        $data['view'] = 'product/list';
        $data['product_list'] = $this->Product->getProducts();
        $this->backendLayout($data);
    }
    public function add(){

        if($this->input->post()){
            $post = $this->input->post();
            if(empty($_FILES['image']['name'])){
                $this->form_validation->set_rules('image', 'Image', 'trim|required');
            }
            if($this->form_validation->run('products-form') == TRUE){
                
                $config['upload_path']          = './assets/product-images/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2048;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image_name = $uploadData['file_name'];
                    $error = '';
                }else{
                    $error = $this->upload->display_errors();
                    $image_name = '';
                }
                if(empty($error)){
                    $details = $post;
                    unset($details['category']);
                    $details['image'] = $image_name;
                    $details['updated_at'] = date('Y-m-d H:i:s');
                    $details['created_at'] = date('Y-m-d H:i:s');
                    $product_id = $this->Product->add($details);
                    foreach($post['category'] as $value){
                        $product_has_category_data = array('product_id' => $product_id,
                                                            'category_id' =>$value
                                                    );
                        $this->ProductHasCategory->add($product_has_category_data);
                    }
                    
                    if ($product_id) {
                        $this->session->set_flashdata('Message', 'Product Added Succesfully');
                        return redirect('product', 'refresh');
                    } else {
                        $this->session->set_flashdata('Error', 'Failed to add product');
                        $data['category_list'] = $this->Category->getCategories();
                        $data['title'] = 'Product';
                        $data['heading']='Add Product';
                        $data['view'] = 'product/form_data';
                        $this->backendLayout($data);
                    }
                }else{
                    $this->session->set_flashdata('Error',$error);
                    $data['category_list'] = $this->Category->getCategories();
                    $data['title'] = 'Product';
                    $data['heading']='Add Product';
                    $data['view'] = 'product/form_data';
                    $this->backendLayout($data);
                }
            }else{
                $data['category_list'] = $this->Category->getCategories();
                $data['title'] = 'Product';
                $data['heading']='Add Product';
                $data['view'] = 'product/form_data';
                $this->backendLayout($data);
            }
        }else{
            $data['category_list'] = $this->Category->getCategories();
            $data['title'] = 'Product';
            $data['heading']='Add Product';
            $data['view'] = 'product/form_data';
            $this->backendLayout($data);
        }
    }
    public function update(){
        $get = $this->input->get();
        if($this->input->post()){
            $post = $this->input->post();
            if($this->form_validation->run('category') == TRUE){
                $details = $post;
                if(!empty($_FILES['image']['name'])){
                    $config['upload_path']          = './assets/category-images/';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg';
                    $config['max_size']             = 2048;
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('image')){
                        $uploadData = $this->upload->data();
                        $image_name = $uploadData['file_name'];
                        $error = '';
                    }else{
                        $error = $this->upload->display_errors();
                        $image_name = '';
                    }
                }else{
                    $error = '';
                    $image_name = !empty($post['image_hidden'])?$post['image_hidden']:''; 
                }
                if(empty($error)){
                    unset($details['image_hidden']);
                    $details['image'] = $image_name;
                    $details['updated_at'] = date('Y-m-d H:i:s');
                    $result = $this->Category->update($details);
                    if ($result) {
                        $this->session->set_flashdata('Message', 'Category updated Succesfully');
                        return redirect('category', 'refresh');
                    } else {
                        $this->session->set_flashdata('Error', 'Failed to update category');
                        $category_details = $this->Category->getCategoryById($post['id']);
                        $data['category_list'] = $this->Category->getCategories();
                        $data['title'] = $category_details['name'] ;
                        $data['heading'] ='Update Category '.$category_details['name'];
                        $data['view'] = 'Category/form_data';
                        $data['category_details'] = $category_details;
                        $this->backendLayout($data);
                        $this->backendLayout($data);
                    }
                }else{
                    $this->session->set_flashdata('Error',$error);
                    $category_details = $this->Category->getCategoryById($post['id']);
                    $data['category_list'] = $this->Category->getCategories();
                    $data['title'] = $category_details['name'] ;
                    $data['heading'] ='Update Category '.$category_details['name'];
                    $data['view'] = 'Category/form_data';
                    $data['category_details'] = $category_details;
                    $this->backendLayout($data);
                }
            }else{
                $data['title']='Category';
                $data['heading']='Add Category';
                $data['view'] = 'Category/form_data';
                $this->backendLayout($data);
            }
        }else{
            $category_details = $this->Category->getCategoryById($get['id']);
            $data['category_list'] = $this->Category->getCategories();
            $data['title'] = $category_details['name'] ;
            $data['heading'] ='Update Category '.$category_details['name'];
            $data['view'] = 'Category/form_data';
            $data['category_details'] = $category_details;
            $this->backendLayout($data);
        }
    }
    public function delete(){
        $post = $this->input->post();
        $result = $this->Category->delete($post['id']);
        if($result){
            echo true;
        }else{
            echo false;
        }
   }
}

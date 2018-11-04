<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends MY_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('CategoryModel','Category');
        $this->load->model('ProductModel','Product');
        $this->load->model('BrandModel','Brand');
        $this->load->model('SizeModel','Size');
        $this->load->model('ColorModel','Color');
        $this->load->model('ProductHasCategoryModel','ProductHasCategory');
        $this->load->model('ProductHasOptionsModel','ProductHasOptions');
        $this->load->model('ProductHasSizeModel','ProductHasSize');
        $this->load->model('ProductHasBrandModel','ProductHasBrand');
        $this->load->model('ProductHasColorModel','ProductHasColor');
    }
    
    public function productListing()
    {
        $data['title'] = 'Product List';
        $data['heading'] = 'Products List';
        $data['view'] = 'men';
        $data['product_list'] = $this->Product->getProducts();
        $this->frontendLayout($data);
    }
    public function productDetails()
    {
        $data['title'] = 'Product Details';
        $data['heading'] = 'Products Details';
        $data['view'] = 'single-product';
        $data['product_list'] = $this->Product->getProducts();
        $this->frontendLayout($data);
    }
    
}

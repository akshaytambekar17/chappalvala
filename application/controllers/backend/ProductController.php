<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $this->load->view('welcome_message');
	}
        public function login()
	{
            $data['title']='Login';
            $data['heading']='Chappalvala';
            $data['hide_footer'] = true;
            $data['hide_social_login'] = true;
            $data['headerFooter'] = true;
            $data['view'] = 'common/login';
//            $post = $this->input->post();
//            printDie($post);
            if($this->input->post()){
                $post = $this->input->post();
                printDie($post);
                $this->form_validation->set_rules();
                if($this->form_validation->run('login')){
                 
                      $this->load->view('welcome_message');     
                    
                }else{
                    $this->backendLayout($data);
                }
            }else{
                $this->backendLayout($data);
            }
        }
}

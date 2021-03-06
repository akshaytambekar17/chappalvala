<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->model('UserModel','User');
    }
    public function index() {
        $this->load->view('welcome_message');
    }

    public function login() {
        if ($this->session->userdata('user_data')) {
            redirect('category', 'refresh');
        }
        $data['title'] = 'Login';
        $data['heading'] = 'Chappalvala';
        $data['hide_footer'] = true;
        $data['hide_social_login'] = true;
        $data['headerFooter'] = true;
        $data['view'] = 'common/login';
        if ($this->input->post()) {
            if ($this->form_validation->run('login') == TRUE) {
                $post = $this->input->post();
                $result = $this->User->getUserByEmailIdPassword($post);
                if(!empty($result)){
                    $this->session->set_userdata('user_data', $result);
                    redirect('category', 'refresh');
                }else{
                    $this->session->set_flashdata('Error', 'Email Id or Password  must be wrong');
                    $this->backendLayout($data);
                }
            } else {
                $this->backendLayout($data);
            }
        } else {
            $this->backendLayout($data);
        }
    }

    public function home() {
        $this->load->view('frontend/home');
    }

    public function logout() {
        $this->session->unset_userdata('name');
        return redirect('admin');
    }

}

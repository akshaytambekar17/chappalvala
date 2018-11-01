<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Form Validaiton
| -------------------------------------------------------------------------
| 
*/
$config = array(
        'login' => array(
                array(
                        'field' => 'email_id',
                        'label' => 'Email',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required'
                ),
        ),
        'email' => array(
                array(
                        'field' => 'emailaddress',
                        'label' => 'EmailAddress',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'message',
                        'label' => 'MessageBody',
                        'rules' => 'required'
                )
        ),
        'category' => array(
                array(
                        'field' => 'name',
                        'label' => 'Category name',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'description',
                        'label' => 'Description',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'meta_title',
                        'label' => 'Meta Title',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'meta_description',
                        'label' => 'Meta Description',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'meta_keywords',
                        'label' => 'Meta Keywords',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'status',
                        'label' => 'Status',
                        'rules' => 'required'
                )
        )
);
$config['error_prefix'] = '<div class="error">';
$config['error_suffix'] = '</div>';







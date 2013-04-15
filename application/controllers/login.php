<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        
        $this->load->helper('form');
             
        $this->load->library('form_validation');
    
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password Confirmation', 'required|trim|md5|min_length[5]');
        //$this->form_validation->set_rules('ipaddresss','ip address','valid_ip');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            
        }
        
$this->load->view('maintemplate/jointemplate', 'base');        
//$this->load->view('maintemplate/base', $data);
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
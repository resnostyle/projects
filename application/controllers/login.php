<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->helper('form');
        $this->load->library('form_validation');
    
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|trim|md5');
        

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            
        }
        //$this->load->view('maintemplate/base', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

  
      public function Admin()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset ($is_logged_in) || $is_logged_in != true)
        {
            $this->load->helper('form');
            $data['main_content'] = 'login';
            $this->load->view('maintemplate/jointemplate', $data);        
            
        }
        else
        {
            redirect('upload');
        }
    }

    function login()
    {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pass_word', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE)
        {
            //this person didnt validate
            $this->index();
        }

        else
        {
            //validated but needs checking against the db
            $this->load->database();
            $this->load->model('user_verify');
            $query = $this->user_verify->login();

            if($query)
            {
                $data = array(
                        'username' => $this->input->post('user_name'),
                        'is_logged_in' => true
                );
                $this->session->set_userdata($data);
                redirect('active');
            }
            else
            {
                $this->index();
            }
        }

    }


    public function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }
    
    
    
    
    
    
    
    
    
    
    /*
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function index() {
       
        //user is still actively logged in, no reason to bother 
        $is_logged_in = $this->session->userdata('is_logged_in');
         if(!isset ($is_logged_in) || $is_logged_in != true)
        {
            redirect('upload');
            
        }
        
        $this->load->helper('form');
             
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="alert alert-dejami">', '</div>');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password Confirmation', 'required|trim|md5|min_length[5]');
        //$this->form_validation->set_rules('ipaddresss','ip address','valid_ip');

        if ($this->form_validation->run() == FALSE) {
            //validation has not run/information passed is not valid yet
            $data['main_content'] = 'login';
            $this->load->view('maintemplate/jointemplate', $data);        
                             
                       
        } else {
            //passed validation - checking datastore for results
            
            
            $data['main_content'] = 'login';
            $this->load->view('maintemplate/jointemplate', $data);     
        }
        

        

//$this->load->view('maintemplate/base', $data);
    }

    public function logout(){
        $this->session->sess_destroy();
        $this->index();
        
    }
    
}
     
*/
}
/* End of file login.php */
/* Location: ./application/controllers/login.php */
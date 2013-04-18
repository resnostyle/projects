<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        //over ride all other functions with required base url
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('file');
        $this->load->library('session');
    }

    function index() {
        //check for logged in session
        $is_logged_in = $this->session->userdata('is_logged_in');
        //if person has cookie set, and has a value we expect, automatically log them in
        if (!isset($is_logged_in) || $is_logged_in != true) {
            //no cookie set for user or not as expected , load validation and rules
            $this->load->library('form_validation');
            //set delimiters for alert box
            $this->form_validation->set_error_delimiters('<div class="alert alert-dejami">', '</div>');
            $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean');
            $this->form_validation->set_rules('password', 'Password Confirmation', 'required|trim|md5|min_length[5]');

            //run validation following form submission
            if ($this->form_validation->run() == FALSE) {
                //failed to pass validation
                //reload login form 
                $this->log_logins();
                $data['main_content'] = 'login';
                $this->load->view('maintemplate/jointnotloggedin', $data);
            } else {
                $this->log_logins();
                // pass validation but needs checking against the db
                //hashed our super awesome password 
                if ($this->input->post('username') === 'dejami' &&
                        $this->input->post('password') === 'e10adc3949ba59abbe56e057f20f883e') {
                    //validated and used the right password... lets go!
                    //creating a user session
                    $data = array(
                        'username' => $this->input->post('username'),
                        'is_logged_in' => true
                    );

                    $this->session->set_userdata($data);
                    //sending the user off to dream land    
                    redirect('upload');
                } else {

                    //they tried and their password was no good, send them packing
                    $data['main_content'] = 'login';
                    $this->load->view('maintemplate/jointnotloggedin', $data);
                }
            }
        } else {
            //have cookie and have expected values set
            redirect('upload');
        }
    }

    private function log_logins() {
        //function to create or write to login file- not exactly purty, but itll work
        if (!write_file('./login.txt', $this->input->post('ipaddresss'), 'a')) {
            echo 'this is fail, i should know that already';
        }
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
    
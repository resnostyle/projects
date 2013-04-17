<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function Login() {
        //over ride all other functions with required base url
        parent::__construct();
        $this->load->helper('url');
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
                $data['main_content'] = 'login';
                $this->load->view('maintemplate/jointemplate', $data);
            } else {
                // pass validation but needs checking against the db
                //loading datbase helper
                $this->load->database();
                $this->load->model('user_verify');
                $query = $this->user_verify->login();

                if ($query) {
                    $data = array(
                        'username' => $this->input->post('user_name'),
                        'is_logged_in' => true
                    );
                    $this->session->set_userdata($data);
                    //great success - validated form and exist in the database
                    redirect('upload');
                } else {
                    //failed db lookup
                    $data['main_content'] = 'login';
                    $this->load->view('maintemplate/jointemplate', $data);
                }
            }
        } else {
            //have cookie and have expected values set
            redirect('upload');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->index();
    }

}


/* End of file login.php */
/* Location: ./application/controllers/login.php */
    
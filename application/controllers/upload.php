<?php

/*
 * The second page is a photo upload page. Here a file upload form is shown to the user which has an 
  Upload button too. The User ID value from the user’s session should show at the top. The user selects
  an image file to upload and clicks Upload. The server must only accept files that have a .PNG or .JPG
  extension and are not larger than 1MB in size.  If the check fails, the page reloads and an inline
  error should show at the top indicating what the error was.  If the file is good, the third web page
  should be shown to the user.
 * 
 */
?>

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Upload extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->is_logged_in();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index() {
        
        $data['main_content'] = 'upload';
        $data['error'] = '';
        $this->load->view('maintemplate/jointemplate', $data);
    }

    public function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'png|jpg';
        $config['max_size'] = '1024';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            //$error = array('error' => $this->upload->display_errors());
            //$this->load->view('upload', $error);
            $data['main_content'] = 'upload';
            $data['error'] = $this->upload->display_errors();
            $this->load->view('maintemplate/jointemplate', $data);
        } else {
            $data['main_content'] = 'completed_upload';
            $data['uploaded_details'] = array('upload_data' => $this->upload->data());
            $this->load->view('maintemplate/jointemplate', $data);

        }
    }

    private function is_logged_in() {
        $this->load->helper('url');
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->index();
    }

}

/* End of file upload.php */
/* Location: ./application/controllers/upload.php */
<?php
//Never Used and Not needed





/*
  The third page displays the uploaded photo.  The User ID value and the photo file name from the user’s
  session should be displayed at the top. The uploaded photo is then displayed underneath that. 
  The width   the of the photo should be the full width of the browser window and 
  the height of the photo should be adjusted so as not to change the aspect ratio of the photo.
 */
/*
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uploaded extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->is_logged_in();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index() {
        $data['main_content'] = 'uploaded';
        $this->load->view('maintemplate/jointemplate', $data);
    }

    private function is_logged_in() {
        $this->load->helper('url');
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect('login');
        }
    }

}
*/
/* End of file uploaded.php */
/* Location: ./application/controllers/uploaded.php */
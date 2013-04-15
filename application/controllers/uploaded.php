<?php
/*
The third page displays the uploaded photo.  The User ID value and the photo file name from the user’s 
session should be displayed at the top. The uploaded photo is then displayed underneath that. The width 
the of the photo should be the full width of the browser window and the height of the photo should be 
adjusted so as not to change the aspect ratio of the photo.
 */
?>

<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uploaded extends CI_Controller {

    public function index() {
        
        //$this->load->view('maintemplate/base', $data);
    }

}

/* End of file uploaded.php */
/* Location: ./application/controllers/uploaded.php */
<?php

Class User_verify extends CI_Model {

    function login() {
        $this->db->where('username', $this->input->post('user_name'));
        $this->db->where('password', md5($this->input->post('pass_word')));
        $query = $this->db->get('ci_login');
        if($query->num_rows == 1) {
            return true;
        }
    }
}

/* End of file user_verify.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logout extends CI_Controller {

    public function index()
    {
        //destroy all session data
        $this->session->sess_destroy();
        
        //go back to home page
        redirect();
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
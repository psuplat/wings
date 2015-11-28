<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
      //if session variables do not exist than redirect to login page
      if (!$this->session->session_WINGSAccess && !$this->session->session_WINGSAccess == 'allowed')
      {
          //redirect to login page
          redirect('/login');

      }
      else
      {
            $data['main_content'] = 'home';
      }

      $this->load->view('includes/template', $data); //load the template passing the $data array
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

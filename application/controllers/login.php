<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
      //if session variables exist than redirect to home page
      if ($this->session->session_WINGSAccess && $this->session->session_WINGSAccess == 'allowed')
      {
          //redirect to home page
          redirect(base_url());

      }
      else
      {
          //if data submitted authenticate user against AD
          if ($this->input->post('input_login') && $this->input->post('input_password'))
          {
            $this->load->model('authentication_model');
            $data['auth'] = $this->authentication_model->devAccess($this->input->post('input_login'),$this->input->post('input_password'));
            print_r($data['auth']);
          }
          else //show the login form
          {
            $data['main_content'] = 'forms/login'; //load the login page view (/views/v_Home.php)
          }
      }

      $this->load->view('includes/template', $data); //load the template passing the $data array
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wings extends CI_Controller {

    /** form for inputting new monthly wings **/
    public function monthly()
    {

    }
    /** form for inputting new bi-annual wings **/
    public function annual()
    {
      if(!empty($this->input->post('annual_submit_review')) && $this->input->post('annual_submit_review') == 'review')
      {
          $this->load->model('users_model');
          $data['supervisor'] = $this->users_model->getSupervisor($this->session->session_userADID);
          $data['main_content'] = 'forms/annual_submit_review'; //load the bi-annual review form view
      }
      elseif(!empty($this->input->post('annual_submit_confirm')) && $this->input->post('annual_submit_confirm') == 'submit')
      {
          $this->load->model('wings_model');
          $data['query_results'] = $this->wings_model->startAnnual();
          $data['main_content'] = 'forms/annual_submit_save'; //load the bi-annual review form view
      }
      else 
      {
          $data['main_content'] = 'forms/wings_annual'; //load the bi-annual form view
      }
        

      $this->load->view('includes/template', $data); //load the template passing the $data array
    }

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

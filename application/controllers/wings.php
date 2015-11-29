<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wings extends CI_Controller {

    /** form for inputting new monthly wings **/
    public function monthly()
    {

    }
    /** form for inputting new bi-annual wings **/
    public function annual()
    {
      if($this->input->post('annual_submit_review'))
      {
          $data['main_content'] = 'forms/annual_submit_review'; //load the bi-annual review form view
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

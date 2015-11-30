<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inbox extends CI_Controller {

    public function index()
    {
      $this->load->model('users_model');
      $this->load->model('inbox_model');
      
      $data['active'] = $this->inbox_model->myActive();
      $data['drafts'] = $this->inbox_model->myDrafts();
      $data['completed'] = $this->inbox_model->myCompleted();
      $data['team'] = $this->users_model->myTeam();
      $data['pending'] = $this->inbox_model->awaitingReview();
      $data['trash'] = $this->inbox_model->myTrash();
      
      $data['main_content'] = 'inbox';
      $this->load->view('includes/template', $data); //load the template passing the $data array
    }
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */

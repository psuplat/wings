<?php

class wings_model extends CI_Model
{

    /**
     * save the submission of bi-annual wings
     * process: init transaction 
     *          -> insert to wings_submissions 
     *          -> return record ID
     *          -> insert into wings_annual_targets
     *          -> insert into wings_annual_targets_split
     *          ->commit transaction
     * if transaction success send email notification to supervisor and return data to controller
     */
    public function startAnnual()
    {
        if($this->input->post('input_draft'))
        {
            $active = 0;
            $draft = 1;
        }
        else
        {
            $active = 1;
            $draft = 0;
        }
        
        //start transaction
        $this->db->trans_start();

        //insert submission data
        $submission_data = array(
                   'c150OwnerID' => $this->session->session_userADID,
                   'c150AssignedTo' => $this->input->post('input_supervisor_adid'),
                   'iTypeID' => '2', /* 2: bi-annual */
                   'iStatusID' => '1', /* 1: submitted for review */
                   'iStageID' => '1', /* 1: Phase 1 */
                   'cMaxOwnerComments' => $this->input->post(''),
                   'bActive' => $active,
                   'bDraft' => $draft
        );
        $this->db->insert('wings_submissions', $submission_data);
        
        //get new submission id
        $submission_id = $this->db->insert_id();
        
        //insert targets
        $cMaxKRA1Target1  = empty($this->input->post('input_kra1_target1')) ? NULL : nl2br($this->input->post('input_kra1_target1'));
        $cMaxKRA1Target2  = empty($this->input->post('input_kra1_target2')) ? NULL : nl2br($this->input->post('input_kra1_target2'));
        $cMaxKRA1Target3  = empty($this->input->post('input_kra1_target3')) ? NULL : nl2br($this->input->post('input_kra1_target3'));
        $cMaxKRA1Target4  = empty($this->input->post('input_kra1_target4')) ? NULL : nl2br($this->input->post('input_kra1_target4'));
        $cMaxKRA1Target5  = empty($this->input->post('input_kra1_target5')) ? NULL : nl2br($this->input->post('input_kra1_target5'));
        
        $cMaxKRA2Target1  = empty($this->input->post('input_kra2_target1')) ? NULL : nl2br($this->input->post('input_kra2_target1'));
        $cMaxKRA2Target2  = empty($this->input->post('input_kra2_target2')) ? NULL : nl2br($this->input->post('input_kra2_target2'));
        $cMaxKRA2Target3  = empty($this->input->post('input_kra2_target3')) ? NULL : nl2br($this->input->post('input_kra2_target3'));
        $cMaxKRA2Target4  = empty($this->input->post('input_kra2_target4')) ? NULL : nl2br($this->input->post('input_kra2_target4'));
        $cMaxKRA2Target5  = empty($this->input->post('input_kra2_target5')) ? NULL : nl2br($this->input->post('input_kra2_target5'));
        
        $cMaxKRA3Target1  = empty($this->input->post('input_kra3_target1')) ? NULL : nl2br($this->input->post('input_kra3_target1'));
        $cMaxKRA3Target2  = empty($this->input->post('input_kra3_target2')) ? NULL : nl2br($this->input->post('input_kra3_target2'));
        $cMaxKRA3Target3  = empty($this->input->post('input_kra3_target3')) ? NULL : nl2br($this->input->post('input_kra3_target3'));
        $cMaxKRA3Target4  = empty($this->input->post('input_kra3_target4')) ? NULL : nl2br($this->input->post('input_kra3_target4'));
        $cMaxKRA3Target5  = empty($this->input->post('input_kra3_target5')) ? NULL : nl2br($this->input->post('input_kra3_target5'));
        
        $cMaxKRA4Target1  = empty($this->input->post('input_kra4_target1')) ? NULL : nl2br($this->input->post('input_kra4_target1'));
        $cMaxKRA4Target2  = empty($this->input->post('input_kra4_target2')) ? NULL : nl2br($this->input->post('input_kra4_target2'));
        $cMaxKRA4Target3  = empty($this->input->post('input_kra4_target3')) ? NULL : nl2br($this->input->post('input_kra4_target3'));
        $cMaxKRA4Target4  = empty($this->input->post('input_kra4_target4')) ? NULL : nl2br($this->input->post('input_kra4_target4'));
        $cMaxKRA4Target5  = empty($this->input->post('input_kra4_target5')) ? NULL : nl2br($this->input->post('input_kra4_target5'));
        
        $cMaxKRA5Target1  = empty($this->input->post('input_kra5_target1')) ? NULL : nl2br($this->input->post('input_kra5_target1'));
        $cMaxKRA5Target2  = empty($this->input->post('input_kra5_target2')) ? NULL : nl2br($this->input->post('input_kra5_target2'));
        $cMaxKRA5Target3  = empty($this->input->post('input_kra5_target3')) ? NULL : nl2br($this->input->post('input_kra5_target3'));
        $cMaxKRA5Target4  = empty($this->input->post('input_kra5_target4')) ? NULL : nl2br($this->input->post('input_kra5_target4'));
        $cMaxKRA5Target5  = empty($this->input->post('input_kra5_target5')) ? NULL : nl2br($this->input->post('input_kra5_target5'));
        
        $cMaxKRA6Target1  = empty($this->input->post('input_kra6_target1')) ? NULL : nl2br($this->input->post('input_kra6_target1'));
        $cMaxKRA6Target2  = empty($this->input->post('input_kra6_target2')) ? NULL : nl2br($this->input->post('input_kra6_target2'));
        $cMaxKRA6Target3  = empty($this->input->post('input_kra6_target3')) ? NULL : nl2br($this->input->post('input_kra6_target3'));
        $cMaxKRA6Target4  = empty($this->input->post('input_kra6_target4')) ? NULL : nl2br($this->input->post('input_kra6_target4'));
        $cMaxKRA6Target5  = empty($this->input->post('input_kra6_target5')) ? NULL : nl2br($this->input->post('input_kra6_target5'));
        
        $cMaxKRA7Target1  = empty($this->input->post('input_kra7_target1')) ? NULL : nl2br($this->input->post('input_kra7_target1'));
        $cMaxKRA7Target2  = empty($this->input->post('input_kra7_target2')) ? NULL : nl2br($this->input->post('input_kra7_target2'));
        $cMaxKRA7Target3  = empty($this->input->post('input_kra7_target3')) ? NULL : nl2br($this->input->post('input_kra7_target3'));
        $cMaxKRA7Target4  = empty($this->input->post('input_kra7_target4')) ? NULL : nl2br($this->input->post('input_kra7_target4'));
        $cMaxKRA7Target5  = empty($this->input->post('input_kra7_target5')) ? NULL : nl2br($this->input->post('input_kra7_target5'));
        
        $cMaxKRA8Target1  = empty($this->input->post('input_kra8_target1')) ? NULL : nl2br($this->input->post('input_kra8_target1'));
        $cMaxKRA8Target2  = empty($this->input->post('input_kra8_target2')) ? NULL : nl2br($this->input->post('input_kra8_target2'));
        $cMaxKRA8Target3  = empty($this->input->post('input_kra8_target3')) ? NULL : nl2br($this->input->post('input_kra8_target3'));
        $cMaxKRA8Target4  = empty($this->input->post('input_kra8_target4')) ? NULL : nl2br($this->input->post('input_kra8_target4'));
        $cMaxKRA8Target5  = empty($this->input->post('input_kra8_target5')) ? NULL : nl2br($this->input->post('input_kra8_target5'));
        
        $targets_data = array(
                   'SubmissionID' => $submission_id,
                   'cMaxKRA1Target1' => $cMaxKRA1Target1,
                   'cMaxKRA1Target2' => $cMaxKRA1Target2,
                   'cMaxKRA1Target3' => $cMaxKRA1Target3,
                   'cMaxKRA1Target4' => $cMaxKRA1Target4,
                   'cMaxKRA1Target5' => $cMaxKRA1Target5,
                   'cMaxKRA2Target1' => $cMaxKRA2Target1,
                   'cMaxKRA2Target2' => $cMaxKRA2Target2,
                   'cMaxKRA2Target3' => $cMaxKRA2Target3,
                   'cMaxKRA2Target4' => $cMaxKRA2Target4,
                   'cMaxKRA2Target5' => $cMaxKRA2Target5,
                   'cMaxKRA3Target1' => $cMaxKRA3Target1,
                   'cMaxKRA3Target2' => $cMaxKRA3Target2,
                   'cMaxKRA3Target3' => $cMaxKRA3Target3,
                   'cMaxKRA3Target4' => $cMaxKRA3Target4,
                   'cMaxKRA3Target5' => $cMaxKRA3Target5,
                   'cMaxKRA4Target1' => $cMaxKRA4Target1,
                   'cMaxKRA4Target2' => $cMaxKRA4Target2,
                   'cMaxKRA4Target3' => $cMaxKRA4Target3,
                   'cMaxKRA4Target4' => $cMaxKRA4Target4,
                   'cMaxKRA4Target5' => $cMaxKRA4Target5,
                   'cMaxKRA5Target1' => $cMaxKRA5Target1,
                   'cMaxKRA5Target2' => $cMaxKRA5Target2,
                   'cMaxKRA5Target3' => $cMaxKRA5Target3,
                   'cMaxKRA5Target4' => $cMaxKRA5Target4,
                   'cMaxKRA5Target5' => $cMaxKRA5Target5,
                   'cMaxKRA6Target1' => $cMaxKRA6Target1,
                   'cMaxKRA6Target2' => $cMaxKRA6Target2,
                   'cMaxKRA6Target3' => $cMaxKRA6Target3,
                   'cMaxKRA6Target4' => $cMaxKRA6Target4,
                   'cMaxKRA6Target5' => $cMaxKRA6Target5,
                   'cMaxKRA7Target1' => $cMaxKRA7Target1,
                   'cMaxKRA7Target2' => $cMaxKRA7Target2,
                   'cMaxKRA7Target3' => $cMaxKRA7Target3,
                   'cMaxKRA7Target4' => $cMaxKRA7Target4,
                   'cMaxKRA7Target5' => $cMaxKRA7Target5,
                   'cMaxKRA8Target1' => $cMaxKRA8Target1,
                   'cMaxKRA8Target2' => $cMaxKRA8Target2,
                   'cMaxKRA8Target3' => $cMaxKRA8Target3,
                   'cMaxKRA8Target4' => $cMaxKRA8Target4,
                   'cMaxKRA8Target5' => $cMaxKRA8Target5

        );
        $this->db->insert('wings_annual_targets', $targets_data);
        
        //insert percentage splits
        $splits_data = array(
                   'iSubmissionID' => $submission_id,
                   'iPercentageKRA1' => $this->input->post('input_kra1_split'),
                   'iPercentageKRA2' => $this->input->post('input_kra2_split'),
                   'iPercentageKRA3' => $this->input->post('input_kra3_split'),
                   'iPercentageKRA4' => $this->input->post('input_kra4_split'),
                   'iPercentageKRA5' => $this->input->post('input_kra5_split'),
                   'iPercentageKRA6' => $this->input->post('input_kra6_split'),
                   'iPercentageKRA7' => $this->input->post('input_kra7_split'),
                   'iPercentageKRA8' => $this->input->post('input_kra8_split')

        );
        $this->db->insert('wings_annual_targets_split', $splits_data);
        
        //set submission status flow to start
        $flow_data = array(
                   'iSubmissionID' => $submission_id,
                   'iStatusID' => '1',
                   'c150ActionUser' => $this->session->session_userADID
        );
        
        $this->db->insert('wings_submission_status_flow', $flow_data);                   
        
        //commit transaction
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
        {
            $data['transaction_result'] = '0';
        }
        else
        {
             $data['transaction_result'] = '1';
             
             //send email to the supervisor

            //define the email message
            $message = '';
            $message .= '<div style="width:100%;height:80px;background: #fff;float:right;text-align:right">';
            $message .='<table width="100%" border="0" bgcolor="#ff"><tr><td align="left"><img src="'.base_url().'assets/wings/images/logo.png""></td>';
            $message .= '<td align="right"><span style="color:#ffffff;font-family:Arial,sans-serif;font-size:18px;">Wockhardt WINGS</td><tr></table>';
            $message .='</div>';
            $message .='<div style="font-family:Arial,sans-serif;clear:both">';
            $message .= '<p>'.$this->session->session_userFirstName.' '.$this->session->session_userLastName.' has submitted new bi-annual WINGS for review</p>';
            $message .= '<p>Please <a href="'.base_url().'">log into the WINGS</a> system to review the submission.';
            $message .= '</div>';


            //prep the email class
            $this->load->library('email');
            $config['wordwrap'] = FALSE;
            $config['charset'] = 'utf-8';
            $config['mailtype'] = 'html';
            $config['newline']  = "\r\n";
            $config['crlf'] = "\r\n";
            
            $this->email->initialize($config);
            $this->email->from('intranet.admin@wockhardt.co.uk', 'WINGS Notification System');
            $this->email->to($this->input->post('input_supervisor_email')); 
            $this->email->subject('WINGS notification - New Bi-Annual WINGS submitted');
            $this->email->message($message);
            //$this->email->send();
        }
        
        return $data;
    }

}

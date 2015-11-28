<?php

class authentication_model extends CI_Model
{

    /*
     * use this to access the system for testing purposes when AD is unavailable
     * change the method in controller Login at line 19
     */

    function devAccess($u, $p) //used for testing and development
    {
            //check if the user is in the local directory and
            $this->db->where('c150ADID', $u);
            //$this->db->where('bDisabled', '0'); //this wil ensure that user cannot login if they have been disabled
            $this->db->from('wings_users');
            $exist = $this->db->count_all_results();

            if ($exist > 0)
            {
                //get all user information from table and assign to session variables

                $this->db->select('a.*, b.c50DepartmentName');
                $this->db->from('wings_users a');
                $this->db->join('wings_departments b', 'a.iDepartmentID = b.iID');
                $this->db->where('a.c150ADID', $u);
                $query = $this->db->get();
                foreach ($query->result() as $row)
                {
                    $this->session->set_userdata('session_WINGSAccess', 'allowed'); //create session variable
                    $this->session->set_userdata('time', time()); //session timestamp used for automatic session expirying
                    $this->session->set_userdata('session_userADID', trim($u)); //create session variable for ADID
                    $this->session->set_userdata('session_userFirstName', trim($row->c150FirstName)); //create session variable for first name
                    $this->session->set_userdata('session_userLastName', trim($row->c250LastName)); //create session variable for last name
                    $this->session->set_userdata('session_userEmail', trim($row->c250Email)); //create session variable for email
                    $this->session->set_userdata('session_userGroup', trim($row->c50DepartmentName)); //create session variable for department name
                    $this->session->set_userdata('session_userAdmin', trim($row->bAdminAccess)); //create session variable for department name
                    $this->session->set_userdata('session_userHR', trim($row->bHRAccess)); //create session variable for department name
                    $this->session->set_userdata('session_userReports', trim($row->bReportingAccess)); //create session variable for department name
                }
              }
    }


    function ldapConnect($u, $p)
    { //bind the user to the AD
        // wheres the server?
        $ad = ldap_connect("ads1uk");

        //Set ldap variables
        ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
        $u = strtolower($u); //convert username to lowercase only
        //Bind to the ldap directory  with  user name and pass
        //$bd = ldap_bind($ad, $u . '@wockhardt.net', $p);
        if (@ldap_bind($ad, $u . '@wockhardt.net', $p))
        {
            //try{
            $attributes = array(
                "givenname",
                "sn",
                "mail");
            $filter = "(&(objectCategory=person)(sAMAccountName=$u))";

            $result = ldap_search($ad, "ou=UK,ou=Wockhardt Pharma Ltd,dc=wockhardt,dc=net", $filter, $attributes);

            $entries = ldap_get_entries($ad, $result);
            $data = array();
            if ($entries["count"] > 0)
            {
                $data['LDAP_status_no'] = ldap_errno($ad);
                $data['LDAP_status_msg'] = ldap_error($ad);
                $data['AD_firstname'] = $entries[0]['givenname'][0];
                $data['AD_lastname'] = $entries[0]['sn'][0];
                $data['AD_jobtitle'] = $entries[0]['title'][0];
                $data['AD_email'] = $entries[0]['mail'][0];
                $data['AD_department'] = $entries[0]['department'][0];
            }
            ldap_unbind($ad);

            //check if the user is in the local directory and
            $this->db->where('c150ADID', $u);
            $this->db->from('wings_users');
            $exist = $this->db->count_all_results();

            if ($exist > 0)
            {
                //get all user information from table and assign to session variables

                $this->db->select('a.*, b.c50DepartmentName');
                $this->db->from('wings_users a');
                $this->db->join('wings_departments b', 'a.iDepartmentID = b.iID');
                $this->db->where('a.c150ADID', $u);
                $query = $this->db->get();
                foreach ($query->result() as $row)
                {
                    $this->session->set_userdata('session_WINGSAccess', 'allowed'); //create session variable
                    $this->session->set_userdata('time', time()); //session timestamp used for automatic session expirying
                    $this->session->set_userdata('session_userADID', trim($u)); //create session variable for ADID
                    $this->session->set_userdata('session_userFirstName', trim($row->c150FirstName)); //create session variable for first name
                    $this->session->set_userdata('session_userLastName', trim($row->c250LastName)); //create session variable for last name
                    $this->session->set_userdata('session_userEmail', trim($row->c250Email)); //create session variable for email
                    $this->session->set_userdata('session_userGroup', trim($row->c50DepartmentName)); //create session variable for department name
                    $this->session->set_userdata('session_userAdmin', trim($row->bAdminAccess)); //create session variable for department name
                    $this->session->set_userdata('session_userHR', trim($row->bHRAccess)); //create session variable for department name
                    $this->session->set_userdata('session_userReports', trim($row->bReportingAccess)); //create session variable for department name
                }
            }
        }
        else
        {
            $data['LDAP_status_no'] = ldap_errno($ad);
            $data['LDAP_status_msg'] = ldap_error($ad);
        }
        return $data;
    }



}

<?php

class users_model extends CI_Model
{

    //get the supervisor of the user
    public function getSupervisor($user)
    {
        $this->db->select('c150Supervisor');
        $this->db->from('wings_users');
        $this->db->where('c150ADID', $user);
        $supervisorQuery = $this->db->get();
        $row = $supervisorQuery->row();
        if (isset($row))
        {
            $supervisorID = $row->c150Supervisor;

            $this->db->where('c150ADID', $supervisorID);
            $query = $this->db->get('wings_users');

            $data_row = $query->row();
            if (isset($data_row))
            {
                $data['row_found'] = '1';
                $data['adid'] = $data_row->c150ADID;
                $data['name'] = $data_row->c150FirstName;
                $data['surname'] = $data_row->c250LastName;
                $data['email'] = $data_row->c250Email;
            }
        }
        else
        {
            $data['row_found'] = '0';
        }
        
        return $data;
        
    }
    
    /**
     * load list of user who user is in charge of
     */
    public function myTeam()
    {
        $this->db->where('c150Supervisor',$this->session->session_userADID);
        $this->db->order_by('c150FirstName','asc');
        $query = $this->db->get('wings_users');
        
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {      
                $data[] = $row;
            }
        }
        else
        {
            $data['no_data'] = true;
        }
        return $data;
    }

}

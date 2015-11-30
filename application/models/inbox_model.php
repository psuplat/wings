<?php

class inbox_model extends CI_Model
{

    /**
     * load active WINGS submissions on logged in user
     */
    public function myActive()
    {
        $this->db->select('a.*,b.c50StatusLabel,c.c50TypeLabel,d.c50StageLabel');
        $this->db->from('wings_submissions a');
        $this->db->join('wings_status b','a.iStatusID=b.iID');
        $this->db->join('wings_types c','a.iTypeID=c.iID');
        $this->db->join('wings_stages d','a.iStageID=d.iID');
        $this->db->where('a.c150OwnerID',$this->session->session_userADID);
        $this->db->where('a.bActive','1');
        $this->db->order_by('a.dCreated','asc');
        $query = $this->db->get();
        
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
    
    /**
     * load draft WINGS submissions for logged in user
     */
    public function myDrafts()
    {
        $this->db->select('a.*,b.c50StatusLabel,c.c50TypeLabel,d.c50StageLabel');
        $this->db->from('wings_submissions a');
        $this->db->join('wings_status b','a.iStatusID=b.iID');
        $this->db->join('wings_types c','a.iTypeID=c.iID');
        $this->db->join('wings_stages d','a.iStageID=d.iID');
        $this->db->where('a.c150OwnerID',$this->session->session_userADID);
        $this->db->where('a.bDraft','1');
        $this->db->order_by('a.dCreated','asc');
        $query = $this->db->get();
        
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
    /**
     * load completed WINGS submissions for logged in user
     */
    public function myCompleted()
    {
        $this->db->select('a.*,b.c50StatusLabel,c.c50TypeLabel,d.c50StageLabel');
        $this->db->from('wings_submissions a');
        $this->db->join('wings_status b','a.iStatusID=b.iID');
        $this->db->join('wings_types c','a.iTypeID=c.iID');
        $this->db->join('wings_stages d','a.iStageID=d.iID');
        $this->db->where('a.c150OwnerID',$this->session->session_userADID);
        $this->db->where('a.bDraft','0');
        $this->db->where('a.bActive','0');
        $this->db->where('a.bTrash','0');
        $this->db->where('a.bDeleted','0');
        $this->db->where('a.iStatusID','4');
        $this->db->order_by('a.dCreated','asc');
        $query = $this->db->get();
        
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
    
    /**
     * load WINGS submissions assigned to the active user
     */
    public function awaitingReview()
    {
        $this->db->select('a.*,b.c50StatusLabel,c.c50TypeLabel,d.c50StageLabel');
        $this->db->from('wings_submissions a');
        $this->db->join('wings_status b','a.iStatusID=b.iID');
        $this->db->join('wings_types c','a.iTypeID=c.iID');
        $this->db->join('wings_stages d','a.iStageID=d.iID');
        $this->db->where('a.c150AssignedTo',$this->session->session_userADID);
        $this->db->where('a.bActive','1');
        $this->db->order_by('a.dCreated','asc');
        $query = $this->db->get();
        
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
    
    /**
     * load  WINGS submissions for logged in user marked as trash
     */
    public function myTrash()
    {
        $this->db->select('a.*,b.c50StatusLabel,c.c50TypeLabel,d.c50StageLabel');
        $this->db->from('wings_submissions a');
        $this->db->join('wings_status b','a.iStatusID=b.iID');
        $this->db->join('wings_types c','a.iTypeID=c.iID');
        $this->db->join('wings_stages d','a.iStageID=d.iID');
        $this->db->where('a.c150OwnerID',$this->session->session_userADID);
        $this->db->where('a.bTrash','1');                                  
        $this->db->order_by('a.dCreated','asc');
        $query = $this->db->get();
        
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

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdlHome extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}
	
	public function can_log_in()
    {
       
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
    
        $query = $this->db->get('tbldentist');
        
        if($query->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function check_id($data)
    {
        $this->db->where('username', $this->input->post('username'));
        $query = $this->db->get('tbldentist');
        foreach ($query->result() as $row)
        {
            $user_id = $row->DentistID;
        }
        return $user_id;

        
    }
    public function check_privilege($data)
    {
        $this->db->where('DentistID', $this->mdlHome->check_id($data));
        $query = $this->db->get('tbldentist');
        foreach($query->result() as $row)
        {
            $ps_id = $row->ps_id;
        }
        return $ps_id;
    }

  
    public function check_if_username_exists($username)
    {
        $this->db->where('username',$username);
        $result = $this->db->get('tbldentist');
        if($result->num_rows()>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}

?>
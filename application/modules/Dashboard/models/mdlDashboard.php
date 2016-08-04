<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MdlDashboard extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}


	
	public function check_if_email_exists($data)
    {
        $this->db->where('email',$data);

        if($this->input->post('tblname')=="Customer")
        	$result = $this->db->get('tbldentist');

        if($this->input->post('tblname')=="Supplier")
        	$result = $this->db->get('tblsupplier');
       
        if($result->num_rows()>0)
        {
            return true;
        }
       
    }
	

	
	
	
}

?>
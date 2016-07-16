<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MdlSupplier extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}



	
	function getSupplier($options = array())
	{
		//verification
		if(isset($options['SupplierID']))
			$this->db->where('SupplierID', $options['SupplierID']);
		
		if(isset($options['title']))
			$this->db->like('title', $options['title']);
			
		if(isset($options['firstname']))
			$this->db->like('firstname', $options['firstname']);
			
		if(isset($options['middlename']))
			$this->db->like('middlename', $options['middlename']);

		if(isset($options['lastname']))
			$this->db->like('lastname', $options['lastname']);

		if(isset($options['email']))
			$this->db->like('email', $options['email']);

		if(isset($options['company']))
			$this->db->like('company', $options['company']);

		if(isset($options['telephone']))
			$this->db->like('telephone', $options['telephone']);

		if(isset($options['mobile']))
			$this->db->like('mobile', $options['mobile']);

		if(isset($options['website']))
			$this->db->like('website', $options['website']);

		if(isset($options['bstreet']))
			$this->db->like('bstreet', $options['bstreet']);

		if(isset($options['bbrgy']))
			$this->db->like('bbrgy', $options['bbrgy']);

		if(isset($options['bcity']))
			$this->db->like('bcity', $options['bcity']);


		if(isset($options['notes']))
			$this->db->like('notes', $options['notes']);


		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("tblsupplier");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['SupplierID']))
			return $query->row(0);
		//die($this->db->last_query());
		return $query->result();
	}
	
	function AddSupplier($options = array())
	{
		$this->db->insert('tblsupplier', $options);	
		return $this->db->insert_id();
		
	}

	
	
	function modifySupplier($options = array())
	{		
		
		
		if(isset($options['title']))
			$this->db->set('title', $options['title']);
			
		if(isset($options['firstname']))
			$this->db->set('firstname', $options['firstname']);
			
		if(isset($options['middlename']))
			$this->db->set('middlename', $options['middlename']);

		if(isset($options['lastname']))
			$this->db->set('lastname', $options['lastname']);


		if(isset($options['company']))
			$this->db->set('company', $options['company']);


		if(isset($options['email']))
			$this->db->set('email', $options['email']);

		if(isset($options['telephone']))
			$this->db->set('telephone', $options['telephone']);

		if(isset($options['mobile']))
			$this->db->set('mobile', $options['mobile']);

		if(isset($options['website']))
			$this->db->set('website', $options['website']);

		if(isset($options['bstreet']))
			$this->db->set('bstreet', $options['bstreet']);

		if(isset($options['bbrgy']))
			$this->db->set('bbrgy', $options['bbrgy']);

		if(isset($options['bcity']))
			$this->db->set('bcity', $options['bcity']);

		if(isset($options['shipstreet']))
			$this->db->set('shipstreet', $options['shipstreet']);
		
		if(isset($options['shipbrgy']))
			$this->db->set('shipbrgy', $options['shipbrgy']);

		if(isset($options['shipcity']))
			$this->db->set('shipcity', $options['shipcity']);

		if(isset($options['notes']))
			$this->db->set('notes', $options['notes']);
		
		$this->db->where('SupplierID', $options['SupplierID']);
		$this->db->update('tblsupplier');
		
		return $this->db->affected_rows();
		
	}
	
	function deleteSupplier($id)
	{
		$this->db->where('SupplierID', $id);
		$this->db->delete('tblsupplier');	
		return true;
	}
	
	public function check_if_email_exists($email)
    {
        
        $this->db->where('Email',$email);
        $result = $this->db->get('tblsupplier');
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
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdlOrder extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}
	
	function countOrder($options=array())
	{
		$this->db->where('status','New');
		return $query = $this->db->count_all_results('tblcase');
	}
	function getOrder($options = array())
	{
		//verification
		if(isset($options['DentistID']))
			$this->db->where('DentistID', $options['DentistID']);

		if(isset($options['CaseID']))
			$this->db->where('CaseID', $options['CaseID']);
		
		if(isset($options['patient']))
			$this->db->like('patient', $options['patient']);
			
		if(isset($options['due-time']))
			$this->db->like('duetime', $options['due-time']);
			
		if(isset($options['due-date']))
			$this->db->like('duedate', $options['due-date']);

		if(isset($options['orderdatetime']))
			$this->db->like('orderdatetime', $options['orderdatetime']);

		if(isset($options['gender']))
			$this->db->like('gender', $options['gender']);

		if(isset($options['age']))
			$this->db->like('age', $options['age']);

		if(isset($options['notes']))
			$this->db->like('notes', $options['notes']);

		if(isset($options['file']))
			$this->db->like('file', $options['file']);


		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("tblcase");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['CaseID']))
			return $query->row(0);
		//die($this->db->last_query());
		return $query->result();
	}



	function getDentist($options = array())
	{
		//verification
		if(isset($options['DentistID']))
			$this->db->where('DentistID', $options['DentistID']);
		
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

		if(isset($options['shipstreet']))
			$this->db->like('shipstreet', $options['shipstreet']);
		
		if(isset($options['shipbrgy']))
			$this->db->like('shipbrgy', $options['shipbrgy']);

		if(isset($options['shipcity']))
			$this->db->like('shipcity', $options['shipcity']);

		if(isset($options['notes']))
			$this->db->like('notes', $options['notes']);


		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("tbldentist");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['DentistID']))
			return $query->row(0);
		//die($this->db->last_query());
		return $query->result();
	}
	
	function AddOrder($options = array())
	{
		$this->db->insert('tblcase', $options);	
		return $this->db->insert_id();
		
	}
	
	function modifyOrder($options = array())
	{		
		

		if(isset($options['patient']))
			$this->db->set('patient', $options['patient']);
			
		if(isset($options['due-time']))
			$this->db->set('duetime', $options['due-time']);
			
		if(isset($options['due-date']))
			$this->db->set('duedate', $options['due-date']);

		if(isset($options['orderdatetime']))
			$this->db->set('orderdatetime', $options['orderdatetime']);

		if(isset($options['gender']))
			$this->db->set('gender', $options['gender']);

		if(isset($options['age']))
			$this->db->set('age', $options['age']);

		if(isset($options['notes']))
			$this->db->set('notes', $options['notes']);

		if(isset($options['file']))
			$this->db->set('file', $options['file']);

		
		$this->db->where('CaseID', $options['CaseID']);
		$this->db->update('tblcase');
		
		return $this->db->affected_rows();
		
	}

	function UpdateOrderStatus($options = array())
	{		
		

		

		if(isset($options['status']))
			$this->db->set('status', $options['status']);
		
		$this->db->where('CaseID', $options['CaseID']);
		$this->db->update('tblcase');
		
		return $this->db->affected_rows();
		
	}
	
	function deleteDentist($id)
	{
		$this->db->where('DentistID', $id);
		$this->db->delete('tbldentist');	
		return true;
	}
	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password',md5($this->input->post('password')));
		$query =$this->db->get('users');

		if($query->num_rows ==1)
		{
			return true;
		}
			
	}
}

?>
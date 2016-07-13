<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdlOrder extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}
	
	function deleteTeeth($options=array())
	{	
	
		$this->db->where('CaseID', $options['CaseID']);
		$this->db->delete('tblcaseteeth');	
		return true;
	}
	function deleteItems($options=array())
	{	
	
		$this->db->where('CaseID', $options['CaseID']);
		$this->db->delete('tblcaseitem');	
		return true;
	}

	function InsertCaseTeeth($options=array())
	{
		$this->db->insert('tblcaseteeth', $options);	
		return $this->db->insert_id();
	}

	function InsertCaseItem($options=array())
	{
		$this->db->insert('tblcaseitem', $options);	
		return $this->db->insert_id();
	}
	
	function getCaseItem($options = array())
	{
		
		$this->db->like('CaseID', $options['CaseID']);
		$query = $this->db->get("tblcaseitem");
		return $query->result();
	}

	function getCaseTeeth($options = array())
	{
		//verification
		
		
		
	
		$this->db->like('CaseID', $options['CaseID']);
		$query = $this->db->get("tblcaseteeth");
		
		
		
		//die($this->db->last_query());
		return $query->result();
	}


	function getStatus($options = array())
	{
		
		$query = $this->db->get("tblstatus");
		
		return $query->result();
	}

	function countOrder($options=array())
	{
		if(isset($options['DentistID']))
			$this->db->where('DentistID',$options['DentistID']);

		if(isset($options['status_id']))
			$this->db->where('status_id',$options['status_id']);

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

	
	function AddOrder($options = array())
	{
		$this->db->insert('tblcase', $options);	
		return $this->db->insert_id();
		
	}
	
	function modifyOrder($options = array())
	{	
		if(isset($options['CaseID']))
			$this->db->where('CaseID', $options['CaseID']);
		
		if(isset($options['Tray']))
			$this->db->set('Tray', $options['Tray']);

		if(isset($options['SG']))
			$this->db->set('SG', $options['SG']);

		if(isset($options['BW']))
			$this->db->set('BW', $options['BW']);
	
		if(isset($options['MC']))
			$this->db->set('MC', $options['MC']);

		if(isset($options['OC']))
			$this->db->set('OC', $options['OC']);

		if(isset($options['Photos']))
			$this->db->set('Photos', $options['Photos']);

		if(isset($options['Articulator']))
			$this->db->set('Articulator', $options['Articulator']);

		if(isset($options['OD']))
			$this->db->set('OD', $options['OD']);							

		if(isset($options['shade1']))
			$this->db->set('shade1', $options['shade1']);

		if(isset($options['shade2']))
			$this->db->set('shade2', $options['shade2']);

		if(isset($options['patientfirstname']))
			$this->db->set('patientfirstname', $options['patientfirstname']);

		if(isset($options['patientlastname']))
			$this->db->set('patientlastname', $options['patientlastname']);
			
			
		if(isset($options['duetime']))
			$this->db->set('duetime', $options['duetime']);
			
		if(isset($options['duedate']))
			$this->db->set('duedate', $options['duedate']);

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
		

		

		if(isset($options['status_id']))
			$this->db->set('status_id', $options['status_id']);
		
		$this->db->where('CaseID', $options['CaseID']);
		$this->db->update('tblcase');
		
		return $this->db->affected_rows();
		
	}
	
	
}

?>
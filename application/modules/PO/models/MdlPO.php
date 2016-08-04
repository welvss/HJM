<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MdlPO extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}
	
	
	function deleteItems($options=array())
	{	
	
		$this->db->where('POID', $options['POID']);
		$this->db->delete('tblpoitem');	
		return true;
	}


	function countPO($options=array())
	{
		if(isset($options['POID']))
			$this->db->where('POID',$options['POID']);

		if(isset($options['POStatusID']))
			$this->db->where('POStatusID',$options['POStatusID']);


		return $query = $this->db->count_all_results('tblpo');

	}


	function getPOStatus($options = array())
	{
		
		$query = $this->db->get("tblpostatus");
		
		return $query->result();
	}

	public function getPOItem($options = array())
	{
		//verification
		if(isset($options['ItemID']))
			$this->db->where('ItemID', $options['ItemID']);

		if(isset($options['POID']))
			$this->db->where('POID', $options['POID']);
		
		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("tblpoitem");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		
		return $query->result();
	}


	

	function getPO($options = array())
	{
		//verification
		if(isset($options['POID']))
			$this->db->where('POID', $options['POID']);

		if(isset($options['SupplierID']))
			$this->db->where('SupplierID', $options['SupplierID']);
		
		if(isset($options['POStatusID']))
			$this->db->where('POStatusID', $options['POStatusID']);

		if(isset($options['orderdatetime']))
			$this->db->like('orderdatetime', $options['orderdatetime']);

		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("tblpo");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['POID']))
			return $query->row(0);
		//die($this->db->last_query());
		return $query->result();
	}

	
	function AddPO($options = array())
	{
		$this->db->insert('tblpo', $options);	
		return $this->db->insert_id();
		
	}

	function addPOItem($options = array())
	{
		$this->db->insert('tblpoitem', $options);	
		return $this->db->insert_id();
		
	}
	
	function EditPO($options = array())
	{	
		
		if(isset($options['Total']))
			$this->db->set('Total', $options['Total']);

		if(isset($options['shipdate']))
			$this->db->set('shipdate', $options['shipdate']);							

		
		$this->db->where('POID', $options['POID']);
		$this->db->update('tblpo');
		
		return $this->db->affected_rows();
		
	}

	function UpdatePOStatus($options = array())
	{		
		

		

		if(isset($options['POStatusID']))
			$this->db->set('POStatusID', $options['POStatusID']);
		
		$this->db->where('POID', $options['POID']);
		$this->db->update('tblpo');
		
		return $this->db->affected_rows();
		
	}
	
	
}

?>
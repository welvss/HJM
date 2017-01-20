<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MdlInventory extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}
	
	
	
	function getItem($options = array())
	{
		//verification
		
		if(isset($options['ItemID']))
			$this->db->where('ItemID', $options['ItemID']);

		if(isset($options['SupplierID']))
			$this->db->where('SupplierID', $options['SupplierID']);

		if(isset($options['ItemDesc']))
			$this->db->like('ItemDesc', $options['ItemDesc']);
			
		if(isset($options['Cost']))
			$this->db->like('Cost', $options['Cost']);
			
		if(isset($options['Price']))
			$this->db->like('Price', $options['Price']);

		if(isset($options['QTYBelow']))
			$this->db->like('QTYBelow', $options['QTYBelow']);

		if(isset($options['CurrentQTY'])){
			$this->db->where('QTYBelow >= CurrentQTY');
			return $query = $this->db->count_all_results('tblitem');
		}
		if(isset($options['ReorderQTY']))
			$this->db->like('ReorderQTY', $options['ReorderQTY']);


		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);

		if(!isset($options['CurrentQTY']))
			$query = $this->db->get("tblitem");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['ItemID']))
			return $query->row(0);
		//die($this->db->last_query());
		if(!isset($options['CurrentQTY']))
			return $query->result();
	}

	function getReq($options = array())
	{
		//verification
		
		if(isset($options['ReqID']))
			$this->db->where('ReqID', $options['ReqID']);

		if(isset($options['CaseID']))
			$this->db->where('CaseID', $options['CaseID']);

		if(isset($options['DateCreated']))
			$this->db->like('DateCreated', $options['DateCreated']);
			

		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);


		$query = $this->db->get("tblrequisition");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['ReqID']))
			return $query->row(0);
		//die($this->db->last_query());

		return $query->result();
	}

	function getReqItem($options = array())
	{
		//verification
		
		if(isset($options['ReqID']))
			$this->db->where('ReqID', $options['ReqID']);

		if(isset($options['ItemID']))
			$this->db->where('ItemID', $options['ItemID']);

		if(isset($options['QTY']))
			$this->db->like('QTY', $options['QTY']);
			

		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);


		$query = $this->db->get("tblrequisitionitem");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		// if(isset($options['ReqID']))
		// 	return $query->row(0);
		//die($this->db->last_query());

		return $query->result();
	}

	function EditInventory($options = array())
	{		
		
		if(isset($options['SupplierID']))
			$this->db->set('SupplierID', $options['SupplierID']);

		if(isset($options['ItemDesc']))
			$this->db->set('ItemDesc', $options['ItemDesc']);

		if(isset($options['Cost']))
			$this->db->set('Cost', $options['Cost']);

		if(isset($options['Price']))
			$this->db->set('Price', $options['Price']);

		if(isset($options['QTY']))
			$this->db->set('QTY', $options['QTY']);

		if(isset($options['CurrentQTY']))
			$this->db->set('CurrentQTY', $options['CurrentQTY']);

		if(isset($options['TotalQTY']))
			$this->db->set('TotalQTY', $options['TotalQTY']);

		if(isset($options['QTYBelow']))
			$this->db->set('QTYBelow', $options['QTYBelow']);

		if(isset($options['ReorderQTY']))
			$this->db->set('ReorderQTY', $options['ReorderQTY']);
		
		
		$this->db->where('ItemID', $options['ItemID']);
		$this->db->update('tblitem');
		
		return $this->db->affected_rows();
		
	}

	function AddInventory($options = array())
	{
		$this->db->insert('tblitem', $options);	
		return $this->db->insert_id();
		
	}


	function AddReq($options = array())
	{
		$this->db->insert('tblrequisition', $options);	
		return $this->db->insert_id();
		
	}


	function AddReqItem($options = array())
	{
		$this->db->insert('tblrequisitionItem', $options);	
		return $this->db->insert_id();
		
	}
	
	function DeleteItem($id)
	{
		$this->db->where('ItemID', $id);
		$this->db->delete('tblitem');	
		return true;
	}

	public function check_if_ItemCode_exists($ItemID)
    {
        $this->db->where('ItemID',$ItemID);
        $result = $this->db->get('tblitem');
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
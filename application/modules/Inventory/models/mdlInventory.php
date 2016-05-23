<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mdlInventory extends CI_Model {
	
	public function __construct(){
		parent:: __construct();
	}
	
	
	function getItem($options = array())
	{
		//verification
		
		if(isset($options['ItemID']))
			$this->db->like('ItemID', $options['ItemID']);

		if(isset($options['ItemDesc']))
			$this->db->like('ItemDesc', $options['ItemDesc']);
			
		if(isset($options['Cost']))
			$this->db->like('Cost', $options['Cost']);
			
		if(isset($options['Price']))
			$this->db->like('Price', $options['Price']);

		if(isset($options['QTY']))
			$this->db->like('QTY', $options['QTY']);

		if(isset($options['QTYBelow']))
			$this->db->like('QTYBelow', $options['QTYBelow']);

		if(isset($options['ReorderQTY']))
			$this->db->like('ReorderQTY', $options['ReorderQTY']);


		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("tblitem");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['ItemID']))
			return $query->row(0);
		//die($this->db->last_query());
		return $query->result();
	}

	function EditInventory($options = array())
	{		
		

		

		if(isset($options['ItemDesc']))
			$this->db->set('ItemDesc', $options['ItemDesc']);

		if(isset($options['Cost']))
			$this->db->set('Cost', $options['Cost']);

		if(isset($options['Price']))
			$this->db->set('Price', $options['Price']);

		if(isset($options['QTY']))
			$this->db->set('QTY', $options['QTY']);

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
	
	function DeleteItem($id)
	{
		$this->db->where('ItemID', $id);
		$this->db->delete('tblitem');	
		return true;
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
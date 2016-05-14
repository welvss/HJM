<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MdlStudents extends CI_Model
{
	public function __construct(){
		parent:: __construct();
	}
	
	function get($options = array())
	{
		//verification
		if(isset($options['student_id']))
			$this->db->where('student_id', $options['student_id']);
		
		if(isset($options['lastname']))
			$this->db->like('lastname', $options['lastname']);
			
		if(isset($options['firstname']))
			$this->db->like('firstname', $options['firstname']);
			
		if(isset($options['middlename']))
			$this->db->like('middlename', $options['middlename']);
		
		if(isset($options['address']))
			$this->db->like('address', $options['address']);
			
		if(isset($options['limit']) && isset($options['offset']))
			$this->db->limit($options['limit'], $options['offset']);
		
		else if(isset($options['limit']))
			$this->db->limit($options['limit']);
		
		if(isset($options['sort_by']) && $options['sort_by'] != '' && isset($options['sort_direction']))
			$this->db->order_by($options['sort_by'], $options['sort_direction']);
		
		$query = $this->db->get("students");
		
		if(isset($options['count']))
			return $query->num_rows();
		
		if(isset($options['student_id']))
			return $query->row(0);
		
		return $query->result();
	}
}
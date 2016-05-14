<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function index()
	{
		$query = $this->db->query("SELECT * FROM users;");
		$data['page_title'] = "Users List";
		$data['users'] = $query->result();
		
		$this->load->view('users/users_list', $data);
	}
	public function addUser()
	{
		$data['page_title'] = "Add Users";
		/*if($this->input->post['submit'])*/
		if($_POST)
		{
				$user = array(
					'username'=>$_POST['username'],
					'password'=>md5($_POST['username']),
					'permission'=> 2
				);
				$this->db->insert('users', $user);
				redirect();
		}
		else
		{
		$this->load->view('users/adduser', $data);
		}
	}
	
	public function pagesetting()
	{
		$data['title'] = "First Program";
		$data['slogan'] = "The Webinars series for BSIT";
		$this->load->view('page_settings', $data);
	}
}

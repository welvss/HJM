<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MX_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->view('template/header');
		$this->load->model('mdlOrder');
	}
	
	public function index(){
		
		$data['cases'] = $this->mdlOrder->getOrder(array());
		$data['dentists'] = $this->mdlOrder->getDentist(array());	
		$this->load->view('app-orders',$data);
		$this->load->view('template/footer');
	}
	public function CustomerInfo()
	{
		$data['dentists'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->uri->segment(3)));	
		$this->load->view('app-customer-info',$data);
		$this->load->view('template/footer');
	}

	
	public function AddOrder()
	{
	
		$config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'jpeg|png|jpg';
        $config['max_size']    = '30720';

        //load upload class library
        $this->load->library('upload', $config);

        /*if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_file_view', $upload_error);
        }
        else
        {
            // case - success
           $upload_data = $this->upload->data();*/
			if($this->input->post('submit'))
			{
			
						$case = array(
									'DentistID'=>$_POST['DentistID'],
									'patient'=>$_POST['patient'],
									'duedate' => $_POST['due-date'],
									'duetime' => $_POST['due-time'],
									'gender' =>$_POST['gender'],
									'age' => $_POST['age'],
									'notes' => $_POST['notes'],
									//'file' => $upload_data['file_name']
									);
						
						if($this->mdlOrder->AddOrder($case))
						{
							$data['success'] = true;
							$data['case'] = $this->mdlOrder->getOrder(array('CaseID'=>$this->db->insert_id()));
							
						}
						echo json_encode($data);
			}
			else
			{
				$this->load->view('users/register');
			}
		//}

	}
	public function UpdateOrderStatus()
	{
	
		if($this->input->post('submit'))
		{
			
				$order = array(
							'CaseID'=>$_POST['CaseID'],
							'status' => $_POST['status'] 
							);
				
				if($this->mdlOrder->UpdateOrderStatus($order))
					redirect('Customer');
			
			
		}
		else
		{
			$this->load->view('users/register');
		}

	}



	public function EditOrder()
	{
	
		$config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'jpeg|png|jpg';
        $config['max_size']    = '30720';

        //load upload class library
        /*$this->load->library('upload', $config);

        if (!$this->upload->do_upload('file'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_file_view', $upload_error);
        }
        else
        {
            // case - success
           $upload_data = $this->upload->data();*/
			if($this->input->post('submit'))
			{
			
						$case = array(
									'DentistID'=>$_POST['DentistID'],
									'CaseID'=>$_POST['CaseID'],
									'patient'=>$_POST['patient'],
									'duedate' => $_POST['due-date'],
									'duetime' => $_POST['due-time'],
									'gender' =>$_POST['gender'],
									'age' => $_POST['age'],
									'notes' => $_POST['notes'],
									//'file' => $upload_data['file_name']
									);
						
						if($this->mdlOrder->modifyOrder($case))
						{

							if($this->session->userdata('ps_id') == 1)
							{
								redirect('Dashboard');
							}
							else
							{
								
								redirect('Customer/CustomerInfo/'.$_POST['DentistID']);

							}
								
						}
			}
			else
			{
				$this->load->view('users/register');
			}
		//}

	}
	public function EditDentist()
	{
	
		if($this->input->post('submit'))
		{
			if($_POST['same'] != Null)
			{
						$dentist = array(
							
									'title'=>$_POST['title'],
									'DentistID' => $_POST['DentistID'],
									'firstname'=>$_POST['firstname'],
									'lastname' => $_POST['lastname'],
									'middlename' => $_POST['middlename'],
									'company' =>$_POST['company'],
									'email' => $_POST['email'],
									'telephone' => $_POST['telephone'],
									'mobile' => $_POST['mobile'],
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['bstreet'],
									'shipcity' => $_POST['bcity'],
									'shipbrgy' => $_POST['bbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->modifyDentist($dentist))
							redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
						redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
			}
			else
			{
						$dentist = array(
							
									'title'=>$_POST['title'],
									'DentistID' => $_POST['DentistID'],
									'firstname'=>$_POST['firstname'],
									'lastname' => $_POST['lastname'],
									'middlename' => $_POST['middlename'],
									'company' =>$_POST['company'],
									'email' => $_POST['email'],
									'telephone' => $_POST['telephone'],
									'mobile' => $_POST['mobile'],
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['shipstreet'],
									'shipcity' => $_POST['shipcity'],
									'shipbrgy' => $_POST['shipbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->modifyDentist($dentist))
						redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
					redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
			}
		}
		else
		{
			$this->load->view('users/register');
		}

	}
	
	
	public function edituser(){	
		$this->load->model('mdlUsers');
		
		$data['page_title'] = "Modify Users";
		
		if($this->input->post('submit'))
		{
			$user = array(
						'username'=>$_POST['username'],
						'users_id'=>$_POST['users_id'],
						'password'=>md5($_POST['username']),
						'permission'=> $_POST['permission']
						);

			if($this->mdlUsers->modify($user))
				redirect('Student_management');
		}
		else
		{
			$data['user'] = $this->mdlUsers->get(array('users_id'=>$this->uri->segment(3)));
			//print_r($data['user']); die($this->db->last_query());
			$this->load->view('users/edituser', $data);
		}
	}
	
	public function deleteDentist()
	{	
		$this->mdlCustomer->deleteDentist($this->uri->segment(3));	
		redirect('Customer');
	}
	
	function validate_credentials()
	{
		$this->load->model('mdlHome');
		$query=$this->mdlHome->validate();

		if($query)
		{
			$data=array(
				'username'=>$this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('Home/Register');


		}
		else
		{
			$this->login();
		}


	}
}
?>
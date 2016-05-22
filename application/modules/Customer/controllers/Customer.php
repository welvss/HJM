<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends MX_Controller
{
	function __construct(){
		parent::__construct();
		
		$this->load->model('mdlCustomer');
		$this->headercheck();
	
	}
	
	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
	public function headercheck()
	{
		$data['active'] =2;
		$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$this->load->view('template/header',$data);
		}
		else
		if($this->session->userdata('ps_id')==1 && $this->session->userdata('is_logged_in') == TRUE)
		{
			redirect('Dashboard');
		}
		else
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect('Home');
		}	
	}
	public function index(){
		$data['dentists'] = $this->mdlCustomer->getDentist();	
		$this->load->view('app-customer',$data);
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
		$this->footer($data);
	}
	
	public function CustomerInfo()
	{

		$data['Count']	= $this->mdlOrder->countOrder(array());
		$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->uri->segment(3)));	
		$data['invoice'] = $this->mdlInvoice->getInvoice(array('DentistID'=>$this->uri->segment(3)));
		$data['status'] = $this->mdlOrder->getStatus();
		$data['cases'] = $this->mdlOrder->getOrder(array('DentistID'=>$this->uri->segment(3)));	
		$data['New'] = $this->mdlOrder->countOrder(array('status_id'=>1,'DentistID'=>$this->uri->segment(3)));
		$data['IP'] = $this->mdlOrder->countOrder(array('status_id'=>2,'DentistID'=>$this->uri->segment(3)));
		$data['Completed'] = $this->mdlOrder->countOrder(array('status_id'=>3,'DentistID'=>$this->uri->segment(3)));
		$data['Hold'] = $this->mdlOrder->countOrder(array('status_id'=>4,'DentistID'=>$this->uri->segment(3)));
		$this->load->view('app-customer-info',$data);
		$data['script']='<script src="'.base_url().'app/js/app-customer-info.js"></script>';
		$this->footer($data);
	
	
	}



	

	public function AddDentist()
	{
	
		
			if($_POST['same'] != Null)
			{
						$dentist = array(
									'title'=>$_POST['title'],
									'firstname'=>$_POST['firstname'],
									'lastname' => $_POST['lastname'],
									'middlename' => $_POST['middlename'],
									'company' =>$_POST['company'],
									'email' => $_POST['email'],
									'telephone' => $_POST['telephone'],
									'mobile' => $_POST['mobile'],
									'fax' => $_POST['fax'],
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['bstreet'],
									'shipcity' => $_POST['bcity'],
									'shipbrgy' => $_POST['bbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->AddDentist($dentist))
							redirect('Customer');
			}
			else
			{
						$dentist = array(
									'title'=>$_POST['title'],
									'firstname'=>$_POST['firstname'],
									'lastname' => $_POST['lastname'],
									'middlename' => $_POST['middlename'],
									'company' =>$_POST['company'],
									'email' => $_POST['email'],
									'telephone' => $_POST['telephone'],
									'mobile' => $_POST['mobile'],
									'fax' => $_POST['fax'],
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['shipstreet'],
									'shipcity' => $_POST['shipcity'],
									'shipbrgy' => $_POST['shipbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->AddDentist($dentist))
							redirect('Customer');
			}
		

	}


	




	public function EditDentist()
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
									'fax' => $_POST['fax'],
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['bstreet'],
									'shipcity' => $_POST['bcity'],
									'shipbrgy' => $_POST['bbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->modifyDentist($dentist))
							redirect('Customer/Info/'.$_POST['DentistID']);
				redirect('Customer/Info/'.$_POST['DentistID']);
			
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
									'fax' => $_POST['fax'],
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['shipstreet'],
									'shipcity' => $_POST['shipcity'],
									'shipbrgy' => $_POST['shipbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->modifyDentist($dentist))
					redirect('Customer/Info/'.$_POST['DentistID']);
				redirect('Customer/Info/'.$_POST['DentistID']);
			}
	
		

	}
	
	
	
	
	public function deleteDentist()
	{	
		$this->mdlCustomer->deleteDentist($this->uri->segment(3));	
		redirect('Customer');
	}
	
	
}
?>
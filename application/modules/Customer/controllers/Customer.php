<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends MX_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		$this->load->module('Dashboard');
		$this->load->module('Order');
		$this->load->model('MdlOrder');
		$this->load->model('MdlInvoice');
		$this->load->model('MdlCustomer');
		$this->load->library('form_validation');
        $this->form_validation->CI =& $this; 
		

		
<<<<<<< bb35164ef9ad33ceed4168d26ac80ba0ef409553
		$this->load->model('Customer/MdlCustomer');
		$this->load->model('Inventory/MdlInventory');
		$this->load->model('Order/MdlInvoice');
		$this->load->model('Order/MdlOrder');
		$this->load->model('Supplier/MdlSupplier');
		$this->headercheck();
	
=======
>>>>>>> Modified for web hosting
	}
	
	function headercheck()
	{	
		
		$data['active'] =2;
		echo modules::run('Dashboard/headercheck', $data);
	}

	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
<<<<<<< bb35164ef9ad33ceed4168d26ac80ba0ef409553
	public function headercheck()
	{
		$data['active'] =2;
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
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
		$data['dentists'] = $this->MdlCustomer->getDentist();	
		$this->load->view('app-customer',$data);
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
		$this->footer($data);
=======
	
	public function index(){
		$this->headercheck();
		if($this->session->userdata('ps_id')==2 )
		{	
			$data['dentists'] = $this->MdlCustomer->getDentist(array('active'=>1));	
			$this->load->view('app-customer',$data);
			$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
			$this->footer($data);
		}
>>>>>>> Modified for web hosting
	}
	
	public function CustomerInfo()
	{

		$data['Count']	= $this->MdlOrder->countOrder(array());
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$this->uri->segment(3)));	
		$data['invoice'] = $this->MdlInvoice->getInvoice(array('DentistID'=>$this->uri->segment(3)));
		$data['status'] = $this->MdlOrder->getStatus();
		$data['cases'] = $this->MdlOrder->getOrder(array('DentistID'=>$this->uri->segment(3)));	
		$data['New'] = $this->MdlOrder->countOrder(array('status_id'=>1,'DentistID'=>$this->uri->segment(3)));
		$data['IP'] = $this->MdlOrder->countOrder(array('status_id'=>2,'DentistID'=>$this->uri->segment(3)));
		$data['items'] = $this->MdlInventory->getItem(array());
		$data['Completed'] = $this->MdlOrder->countOrder(array('status_id'=>3,'DentistID'=>$this->uri->segment(3)));
		$data['Hold'] = $this->MdlOrder->countOrder(array('status_id'=>4,'DentistID'=>$this->uri->segment(3)));
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
						
						if($this->MdlCustomer->AddDentist($dentist))
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
						
						if($this->MdlCustomer->AddDentist($dentist))
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
						
						if($this->MdlCustomer->modifyDentist($dentist))
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
						
						if($this->MdlCustomer->modifyDentist($dentist))
					redirect('Customer/Info/'.$_POST['DentistID']);
				redirect('Customer/Info/'.$_POST['DentistID']);
			}
	
		

	}
	
	
	
	
	public function deleteDentist()
	{	
<<<<<<< bb35164ef9ad33ceed4168d26ac80ba0ef409553
		$this->MdlCustomer->deleteDentist($this->uri->segment(3));	
=======
		$this->MdlCustomer->modifyDentist(array('DentistID'=>$this->uri->segment(3),'active'=>0));	
>>>>>>> Modified for web hosting
		redirect('Customer');
	}
	
	

	public function checkemail()
    {
            $email_available = $this->MdlCustomer->check_if_email_exists($_POST['email']);
            if($email_available)
            {
                 $data['error']= "";
                 $data['success']=false;
            }
            else
            {
                 $data['error']= "Email Already Used!";
                 $data['success']=true;
             
   
            }
            echo json_encode($data);
    }
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends MX_Controller
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
		$data['active'] =5;
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
		$data['suppliers'] = $this->mdlSupplier->getSupplier();	
		$this->load->view('app-supplier',$data);
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
		$this->footer($data);
	}
	
	public function Info()
	{

		$data['Count']	= $this->mdlOrder->countOrder(array());
		$data['supplier'] = $this->mdlSupplier->getSupplier(array('SupplierID'=>$this->uri->segment(3)));	
		$data['invoice'] = $this->mdlInvoice->getInvoice(array('DentistID'=>$this->uri->segment(3)));
		$data['status'] = $this->mdlOrder->getStatus();
		$data['cases'] = $this->mdlOrder->getOrder(array('DentistID'=>$this->uri->segment(3)));	
		$this->load->view('app-supplier-info',$data);
		$data['script']='<script src="'.base_url().'app/js/app-customer-info.js"></script>';
		$this->footer($data);
	
	
	}



	

	public function AddSupplier()
	{
	
		
		
						$supplier = array(
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
									'notes' => $_POST['notes'] 
									);
						
						if($this->mdlSupplier->AddSupplier($supplier))
							redirect('Supplier');
		
			
		

	}
	public function AddPO()
	{
	

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
						

						
						$data=array(
									'SupplierID'=>$_POST['SupplierID'],
									'ItemID'=>$_POST['ItemID'],
									'shipdate' => $_POST['shipdate'],
									'QTY' => $_POST['QTY'],
									'Amount' => $_POST['Amount'],
									'Total' => $_POST['Total']

									//'file' => $upload_data['file_name']
								);
						$this->mdlSupplier->AddPO($data);

						redirect('Supplier/Info/'.$_POST['SupplierID']);
					
							
						}
						
					
			
			
	

	}


	




	public function EditSupplier()
	{
	
		
			
						$supplier = array(
							
									'title'=>$_POST['title'],
									'SupplierID' => $_POST['SupplierID'],
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
									
									'notes' => $_POST['notes'] );
						
						$this->mdlSupplier->modifySupplier($supplier);
							redirect('Supplier/Info/'.$_POST['SupplierID']);

			

	}
	
	
	
	
	public function deleteSupplier()
	{	
		$this->mdlSupplier->deleteSupplier($this->uri->segment(3));	
		redirect('Supplier');
	}
	
	
}
?>
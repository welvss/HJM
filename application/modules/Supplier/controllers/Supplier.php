<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends MX_Controller
{
	function __construct(){
		parent::__construct();
		
		$this->load->model('Customer/MdlCustomer');
		$this->load->model('Inventory/MdlInventory');
		$this->load->model('Order/MdlInvoice');
		$this->load->model('Order/MdlOrder');
		$this->load->model('Supplier/MdlSupplier');
		$this->headercheck();
	
	}
	
	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
	public function headercheck()
	{
		$data['active'] =5;
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
		$data['suppliers'] = $this->MdlSupplier->getSupplier();	
		$this->load->view('app-supplier',$data);
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
		$this->footer($data);
	}
	
	public function Info()
	{

		$data['Count']	= $this->MdlSupplier->countPO(array());
		$data['supplier'] = $this->MdlSupplier->getSupplier(array('SupplierID'=>$this->uri->segment(3)));	
		$data['items'] = $this->MdlInventory->getItem(array('SupplierID'=>$this->uri->segment(3)));	
		$data['invoice'] = $this->MdlInvoice->getInvoice(array('DentistID'=>$this->uri->segment(3)));
		$data['status'] = $this->MdlOrder->getStatus();
		$data['cases'] = $this->MdlOrder->getOrder(array('DentistID'=>$this->uri->segment(3)));	
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
						
						if($this->MdlSupplier->AddSupplier($supplier))
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
						$this->MdlSupplier->AddPO($data);

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
						
						$this->MdlSupplier->modifySupplier($supplier);
							redirect('Supplier/Info/'.$_POST['SupplierID']);

			

	}
	
	
	
	
	public function deleteSupplier()
	{	
		$this->MdlSupplier->deleteSupplier($this->uri->segment(3));	
		redirect('Supplier');
	}
	
	
}
?>
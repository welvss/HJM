<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PO extends MX_Controller
{
	function __construct(){
		parent::__construct();

		$this->load->module('Customer');
		$this->load->model('MdlCustomer');
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		
	}
	function headercheck()
	{	
		
		$data['active'] =5;
		echo modules::run('Dashboard/headercheck', $data);
	}
	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
	public function index(){

		$this->headercheck();
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{

			$data['pos'] = $this->MdlPO->getPO(array('sort_by'=>'POID','sort_direction'=>'DESC'));
			$data['status'] = $this->MdlPO->getPOStatus();
			$data['count']=$this->MdlPO->countPO();
			$data['suppliers'] = $this->MdlSupplier->getSupplier(array());
		
			$data['New'] = $this->MdlOrder->countOrder(array('status_id'=>1));
			$data['IP'] = $this->MdlOrder->countOrder(array('status_id'=>2));
			$data['Completed'] = $this->MdlOrder->countOrder(array('status_id'=>3));
			$data['Hold'] = $this->MdlOrder->countOrder(array('status_id'=>4));

			$this->load->view('app-po',$data);
			$data['script']='<script src="'.base_url().'app/js/cases.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
			$this->footer($data);
		}
		else
			redirect('Dashboard');
	}

	
	
	


	
	
	public function Info()
	{	
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{	
			$this->headercheck();
			$info = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$invoice = $this->MdlInvoice->getInvoice(array('CaseID'=>$this->uri->segment(3)));
			$data['items'] = $this->MdlInventory->getItem(array());
			$data['caseitems'] = $this->MdlOrder->getCaseItem(array('CaseID'=>$this->uri->segment(3)));
			$data['invoice'] = $this->MdlInvoice->getInvoice(array('CaseID'=>$this->uri->segment(3)));
			$data['invoiceitems'] = $this->MdlInvoice->getInvoiceItem(array('InvoiceID'=>$invoice[0]->InvoiceID));
			$data['case'] = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['teeth'] = $this->MdlOrder->getCaseTeeth(array('CaseID'=>$this->uri->segment(3)));	
			$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$info->DentistID));	
			$this->load->view('app-po-info',$data);
			$data['script']='<script src="'.base_url().'app/js/cases.js"></script>';

			$this->footer($data);
		}
	
	
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


	




	
	
	
	
}
?>
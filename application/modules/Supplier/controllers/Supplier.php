<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends MX_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		
		echo modules::run('Dashboard/models');
	
	}
	
	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
	
	function headercheck()
	{	
		$data['active'] =6;

		echo modules::run('Dashboard/headercheck', $data);
	}

	public function index()
	{
		$this->headercheck();
		$data['suppliers'] = $this->MdlSupplier->getSupplier();	
		$this->load->view('app-supplier',$data);
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
		$this->footer($data);
	}
	
	public function Info()
	{

		$this->headercheck();
		$data['Count']	= $this->MdlPO->countPO(array());
		$data['supplier'] = $this->MdlSupplier->getSupplier(array('SupplierID'=>$this->uri->segment(3)));	
		$data['pos'] = $this->MdlPO->getPO(array('SupplierID'=>$this->uri->segment(3)));	
		$data['status'] = $this->MdlPO-> getPOStatus(array());
		$data['items'] = $this->MdlInventory->getItem(array('SupplierID'=>$this->uri->segment(3)));	
		$this->load->view('app-supplier-info',$data);
		$data['script']='<script src="'.base_url().'app/js/app-supplier-info.js"></script><script src="'.base_url().'app/js/app-validation.js"></script><script src="'.base_url().'app/js/app-po.js"></script>';
		$this->footer($data);
	
	
	}



	

	public function AddSupplier()
	{
			if($this->input->post('website')=="www.")
				$ws="";
			else
				$ws='http://'.$this->input->post('website');
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
									'website' => $ws,
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'notes' => $_POST['notes'] 
									);
						
						$SupplierID=$this->MdlSupplier->AddSupplier($supplier);


						// redirect('Supplier');
						echo "Supplier successfully added!";


	}
	
	public function EditSupplier()
	{
	
			if($this->input->post('website')=="www.")
				$ws="";
			else
				$ws='http://'.$this->input->post('website');		
						
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
									'website' => $ws,
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


	public function getDetails(){
		$data=$this->MdlSupplier->getSupplier(array('SupplierID'=>$_POST['SupplierID']));
		$info['email'] = $data->email;
		$info['address'] = $data->bstreet.', '.$data->bbrgy.', '.$data->bcity;

		echo json_encode($info);
	}

	
    
}
?>
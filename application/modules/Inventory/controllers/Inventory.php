<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends MX_Controller
{
	function __construct(){
		parent::__construct();
		
	
		
	}
	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
	public function index(){
		$data['active'] =4;
		$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$this->load->view('template/header',$data);
			$data['items'] = $this->mdlInventory->getItem(array());
			$this->load->view('app-inventory',$data);
			$data['script']='<script src="'.base_url().'app/js/inventory.js"></script>';
			$this->footer($data);
		}
		else
			redirect('Dashboard');
	}

	
	public function AddInventory()
	{
	
	
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE)
		{

						$data=array(
									'ItemID'=>$_POST['ItemID'],
									'ItemDesc'=>$_POST['ItemDesc'],
									'Cost'=>$_POST['Cost'],
									'Price'=>$_POST['Price'],
									'QTY'=>$_POST['QTY'],
									'QTYBelow'=>$_POST['QTYBelow'],
									'ReorderQTY'=>$_POST['ReorderQTY']

								);
						$this->mdlInventory->AddInventory($data);
						redirect('Inventory');
					
		}
						

	}

	public function EditInventory()
	{
	
	
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE)
		{

						$data=array(
									'ItemID'=>$_POST['ItemID'],
									'ItemDesc'=>$_POST['ItemDesc'],
									'Cost'=>$_POST['Cost'],
									'Price'=>$_POST['Price'],
									'QTY'=>$_POST['QTY'],
									'TotalQTY'=>$_POST['QTY'],
									'QTYBelow'=>$_POST['QTYBelow'],
									'ReorderQTY'=>$_POST['ReorderQTY']

								);
						$this->mdlInventory->EditInventory($data);
						redirect('Inventory');
					
		}
						

	}

	public function DeleteItem()
	{
		$this->mdlInventory->DeleteItem($this->uri->segment(3));	
		redirect('Inventory');
	}
	public function UpdateOrderStatus()
	{
	
			
				$order = array(
							'CaseID'=>$_POST['CaseID'],
							'status_id' => $_POST['status_id'] 
							);
				
				if($this->mdlOrder->UpdateOrderStatus($order))
				{
					if( $_POST['DentistID']!=Null)
						redirect('Customer/Info/'.$_POST['DentistID'].'/'.$_POST['Info']);
					else
						redirect('Order');
				}
			
			
		
	
		

	}


	
	
	public function Info()
	{	$data['active'] =3;
		$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$this->load->view('template/header',$data);
			$data['item'] = $this->mdlInventory->getItem(array('ItemID',$this->uri->segment(3)));
				
			$this->load->view('app-inventory-info',$data);
			$data['script']='<script src="'.base_url().'app/js/inventory.js"></script>';
			$this->footer($data);
		}
	
	
	}

	
}
?>
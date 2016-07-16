<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends MX_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		$this->load->module('Customer');
		$this->load->module('Supplier');
		$this->load->model('MdlCustomer');
		$this->load->model('MdlSupplier');
		$this->load->model('MdlInventory');
		

			

		
	}

	function headercheck()
	{	
		
		$data['active'] =4;
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
			
			$data['suppliers'] = $this->MdlSupplier->getSupplier();	
			$data['items'] = $this->MdlInventory->getItem(array());
			$this->load->view('app-inventory',$data);
			$data['script']='<script src="'.base_url().'app/js/inventory.js"></script><script src="'.base_url().'app/js/app-validation.js">';
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
									'Price'=>$_POST['Price'],
									'QTY'=>$_POST['QTY'],
									'QTYBelow'=>$_POST['QTYBelow'],
									'ReorderQTY'=>$_POST['ReorderQTY'],
									'SupplierID'=>$_POST['SupplierID']

								);
						$this->MdlInventory->AddInventory($data);
						redirect('Inventory');
					
		}
						

	}

	public function EditInventory()
	{
	
	
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE)
		{
						//die($_POST['ItemID']);
			if($_POST['ItemID']==$_POST['IID'])
			{
						$data=array(
									'ItemID'=>$_POST['ItemID'],
									'ItemDesc'=>$_POST['ItemDesc'],
									'Price'=>$_POST['Price'],
									'QTY'=>$_POST['QTY'],
									'QTYBelow'=>$_POST['QTYBelow'],
									'ReorderQTY'=>$_POST['ReorderQTY'],
									'SupplierID'=>$_POST['SupplierID']
								);
						$this->MdlInventory->EditInventory($data);
						redirect('Inventory');
			}
			else
			{
						$this->MdlInventory->DeleteItem($_POST['ItemID']);
						$data=array(
									
									'ItemID'=>$_POST['IID'],
									'ItemDesc'=>$_POST['ItemDesc'],
									'Price'=>$_POST['Price'],
									'QTY'=>$_POST['QTY'],
									'QTYBelow'=>$_POST['QTYBelow'],
									'ReorderQTY'=>$_POST['ReorderQTY'],
									'SupplierID'=>$_POST['SupplierID']
								);
						$this->MdlInventory->AddInventory($data);
						redirect('Inventory');
			}

					
		}
						

	}

	public function DeleteItem()
	{
		if($this->MdlInventory->DeleteItem($this->uri->segment(3)))
			redirect('Inventory');
	}
	

	
	
	public function Info()
	{	
		
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{	
			$this->headercheck();
			$data['suppliers'] = $this->MdlSupplier->getSupplier();	
			$data['item'] = $this->MdlInventory->getItem(array('ItemID'=>$this->uri->segment(3)));
			$this->load->view('app-inventory-info',$data);
			$data['script']='<script src="'.base_url().'app/js/inventory.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
			$this->footer($data);
		}
	
	
	}

	public function getDetails()
	{
		$data = $this->MdlInventory->getItem(array('ItemID' => $this->input->POST('ItemID')));
			if($this->input->post('ItemID')!=null)
				echo $data->ItemDesc;
			else
				echo " ";
	
			
	}

	public function checkItemCode()
    {
            $ItemCode_available = $this->MdlInventory->check_if_ItemCode_exists($_POST['ItemID']);
            if($ItemCode_available)
            {
                 $data['error']= "";
                 $data['success']=false;
            }
            else
            {
                 $data['error']= '<div class="ui red message"><div class="header"><center>This Item Code is already taken. &nbsp;Please enter another Item Code.</center></div></div>';
                 $data['success']=true;
             
   			
            }
            echo json_encode($data);
    }

    public function getItems(){

    	$data=$this->MdlInventory->getItem(array('SupplierID'=>$_POST['SupplierID']));
    			
	    	foreach ($data as $datus) {
	    		echo  '<div class="item" data-value="'.$datus->ItemID.'">'.$datus->ItemID.'</div>';
	    	}
		
		
	}
}
?>
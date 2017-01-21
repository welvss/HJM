<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends MX_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}

		
		echo modules::run('Dashboard/models');
		
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
			$data['cases'] = $this->MdlOrder->getOrder(array('status_id'=>2));
			$data['items'] = $this->MdlInventory->getItem(array());
			$data['casetype'] = $this->MdlOrder->getCaseType(array());
			$data['requests'] = $this->MdlInventory->getReq(array());
			$data['reqitems'] = $this->MdlInventory->getReqItem(array());
			$this->load->view('app-inventory',$data);
			$this->load->view('app-inventory-modals');
			$data['script']='<script src="'.base_url().'app/js/inventory.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
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
									'ReorderQTY'=>$_POST['ReorderQTY']

								);
						$this->MdlInventory->AddInventory($data);
						echo "Item successfully added!";
					
		}
						

	}

	public function AddProduct()
	{
	
	
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE)
		{

						$data=array(
									'CaseTypeID'=>$_POST['CaseTypeID'],
									'CaseTypeDesc'=>$_POST['CaseTypeDesc'],
									'Price'=>$_POST['Price'],
									'TotalOrder'=>0,
									'Type'=>$_POST['Type'],
								);
						$this->MdlOrder->AddCaseType($data);
						echo "Product successfully added!";
					
		}
						

	}

	public function requestItem()
	{
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE)
		{
			
			$data = array(
					'CaseID'=>$_POST['CaseID'],
					'DateCreated'=>date('Y-m-d H:i:s')

					);
			$ReqID=$this->MdlInventory->AddReq($data);

			$x=1;
			foreach ($_POST['rf'] as $rf){
				if($rf['ItemID']!=''){
					$rf[$x] = array(
							'ReqID' => $ReqID,
							'ItemID' => $rf['ItemID'],
							'QTY' => $rf['QTY'],
							);
					$this->MdlInventory->AddReqItem($rf[$x]);
					$x++;
				}
			}

			$items=$this->MdlInventory->getItem(array());
					
			foreach ($_POST['rf'] as $rf){

				foreach ($items as $item){
					if($rf['ItemID']==$item->ItemID){
						$data=array(
							'ItemID'=>$rf['ItemID'],
							'CurrentQTY'=>($item->CurrentQTY-$rf['QTY'])
							);
						$this->MdlInventory->EditInventory($data);
					
					}
				}

			}

			echo "Request Created!";	


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

	public function EditProduct()
	{
	
	
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE)
		{
						//die($_POST['ItemID']);
			if($_POST['CaseTypeID']==$_POST['CTID'])
			{
						$data=array(
									'CaseTypeID'=>$_POST['CTID'],
									'CaseTypeDesc'=>$_POST['CaseTypeDesc'],
									'Price'=>$_POST['Price'],
									'TotalOrder'=>$_POST['TotalOrder'],
									'Type'=>$_POST['Type'],
								);
						$this->MdlOrder->EditCaseType($data);
						redirect('Inventory');
			}
			else
			{
						$this->MdlOrder->DeleteCaseType($_POST['CTID']);
						$data=array(
									'CaseTypeID'=>$_POST['CaseTypeID'],
									'CaseTypeDesc'=>$_POST['CaseTypeDesc'],
									'Price'=>$_POST['Price'],
									'TotalOrder'=>$_POST['TotalOrder'],
									'Type'=>$_POST['Type'],
								);
						$this->MdlOrder->AddCaseType($data);
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
			$this->load->view('app-inventory-modals');
			$data['script']='<script src="'.base_url().'app/js/inventory.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
			$this->footer($data);
		}
	
	
	}

	public function ProductInfo()
	{	
		
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{	
			$this->headercheck();
			$data['suppliers'] = $this->MdlSupplier->getSupplier();	
			$data['casetype'] = $this->MdlOrder->getCaseType(array('CaseTypeID'=>$this->uri->segment(3)));
			$this->load->view('app-inventory-productinfo',$data);
			$this->load->view('app-inventory-modals');
			$data['script']='<script src="'.base_url().'app/js/inventory.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
			$this->footer($data);
		}
	
	
	}

	public function getDetails()
	{
		$data = $this->MdlInventory->getItem(array('ItemID' => $this->input->POST('ItemID')));
			if($this->input->post('ItemID')!=null){
				$arr['ItemDesc']=$data->ItemDesc;
				$arr['ReorderQTY']=$data->ReorderQTY;
			}
			else
				$arr['ItemDesc']='';
	
		echo json_encode($arr);
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

    public function checkProductCode()
    {
            $ItemCode_available = $this->MdlOrder->check_if_ProductCode_exists($_POST['CaseTypeID']);
            if($ItemCode_available)
            {
                 $data['error']= "";
                 $data['success']=false;
            }
            else
            {
                 $data['error']= '<div class="ui red message"><div class="header"><center>This Product Code is already taken. &nbsp;Please enter another Product Code.</center></div></div>';
                 $data['success']=true;
             
   			
            }
            echo json_encode($data);
    }


    public function getItems(){

    	$data=$this->MdlInventory->getItem();
    		echo '<option value="">Select Item</option>';
	    	foreach ($data as $datus) {
	    	echo	'<option value="'.$datus->ItemID.'" data-id="'.$_POST['Count'].'" data-description="'.$datus->ItemDesc.'" data-qty="'.$datus->ReorderQTY.'">'.$datus->ItemID.'</option>';
	    	}
		
		
	}

	public function countInventory(){
		 $data=$this->MdlInventory->getItem(array('CurrentQTY'=>''));
		 echo $data;
	}
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PO extends MX_Controller
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

			$data['pos'] = $this->MdlPO->getPO(array());
			$data['count'] = $this->MdlPO->countPO(array());
			$data['suppliers'] = $this->MdlSupplier->getSupplier(array());
			$data['status'] = $this->MdlPO-> getPOStatus(array());
			$data['Draft'] = $this->MdlPO->countPO(array('POStatusID'=>1));
			$data['Approved'] = $this->MdlPO->countPO(array('POStatusID'=>2));
			$data['PR'] = $this->MdlPO->countPO(array('POStatusID'=>3));
			$data['Received'] = $this->MdlPO->countPO(array('POStatusID'=>4));
			$data['items'] = $this->MdlInventory->getItem(array());
			$this->load->view('app-po',$data);
			$data['script']='<script src="'.base_url().'app/js/app-po.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
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
			$po = $this->MdlPO->getPO(array('POID'=>$this->uri->segment(3)));
			$data['items']=$this->MdlInventory->getItem(array('SupplierID'=>$po->SupplierID));
			$data['po'] = $this->MdlPO->getPO(array('POID'=>$this->uri->segment(3)));
			$data['poitems'] = $this->MdlPO->getPOItem(array('POID'=>$this->uri->segment(3)));
			$data['supplier'] = $this->MdlSupplier->getSupplier(array('SupplierID'=>$po->SupplierID));
			$this->load->view('app-po-info',$data);
			$data['script']='<script src="'.base_url().'app/js/app-po.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';

			$this->footer($data);
		}
	
	
	}
	
	
	public function AddPO()
	{
	

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  ){
						

					if($_POST['submit'])
						$data=array(
									'SupplierID'=>$_POST['SupplierID'],
									'orderdatetime'=>date('Y-m-d H:i:s'),
									'shipdate' => $_POST['shipdate'],
									'Total'=> $_POST['Total']
								);
						$POID=$this->MdlPO->AddPO($data);

						

						//Item Insert
						$x=1;
						foreach ($_POST['po'] as $po){
							if($po['ItemID']!=''){
								$po[$x] = array(
									'POID' => $POID,
									'ItemID' => $po['ItemID'],
									'QTY' => $po['QTY'],
									'Amount' => $po['Amount'],
									'SubTotal' => $po['SubTotal']
								);
								$this->MdlPO->addPOItem($po[$x]);
								$x++;
							}
						}				

						echo "Purchase Order successfully added!";
					
	
		}	
	

	}


	public function EditPO()
	{
	

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  ){
						

						
						$data=array(
									'SupplierID'=>$_POST['SupplierID'],
									'POID'=>$_POST['POID'],
									'shipdate' => $_POST['shipdate'],
									'Total'=> $_POST['Total']
								);
						$this->MdlPO->EditPO($data);
						
						$this->MdlPO->deleteItems(array('POID'=>$_POST['POID']));
						$x=1;
						foreach ($_POST['po'] as $po){
							if($po['ItemID']!=''){
								$po[$x] = array(
									'POID' =>$_POST['POID'],
									'ItemID' => $po['ItemID'],
									'QTY' => $po['QTY'],
									'Amount' => $po['Amount'],
									'SubTotal' => $po['SubTotal']
								);
								$this->MdlPO->addPOItem($po[$x]);
								$x++;
							}
						}				

						redirect('PO/Info/'.$_POST['POID']);
					
	
		}	
	

	}


	public function UpdatePOStatus()
	{
	
			if($_POST['POStatusID']==3){
				$PO = array(
							'POID'=>$_POST['POID'],
							'POStatusID' => $_POST['POStatusID'],
							'receivedate' =>  date('Y-m-d H:i:s')
							);
				
				if($this->MdlPO->UpdatePOStatus($PO)){


					$poitems= $this->MdlPO->getPOItem(array('POID'=>$_POST['POID']));
					$items=$this->MdlInventory->getItem(array());
					
					foreach ($poitems as $poitem){

						foreach ($items as $item){
							if($poitem->ItemID==$item->ItemID){
								$data=array(
									'ItemID'=>$poitem->ItemID,
									'CurrentQTY'=>$poitem->QTY+$item->CurrentQTY
									);
								$this->MdlInventory->EditInventory($data);
							
							}

						}

					}
					
				}
				redirect($_POST['loc']);
			}
			else{

				$PO = array(
							'POID'=>$_POST['POID'],
							'POStatusID' => $_POST['POStatusID'] 
							);
				
				if($this->MdlPO->UpdatePOStatus($PO))
				{
					
						redirect($_POST['loc']);
					
				}
			
			}
			
		
	
		

	}
	public function POSlip()
	{	
		$info = $this->MdlPO->getPO(array('POID'=>$this->uri->segment(3)));
		$data['items'] = $this->MdlInventory->getItem(array());
		$data['po'] = $this->MdlPO->getPO(array('POID'=>$this->uri->segment(3)));
		$data['poitems'] = $this->MdlPO->getPOItem(array('POID'=>$this->uri->segment(3)));
		$data['supplier'] = $this->MdlSupplier->getSupplier(array('SupplierID'=>$info->SupplierID));
		$this->load->view('po-slip',$data);
			
	}


	
	
}
?>
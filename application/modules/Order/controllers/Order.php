<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MX_Controller
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
		
		$data['active'] =3;
		echo modules::run('Dashboard/headercheck', $data);
	}



	public function countNewOrder(){

	$data = $this->MdlOrder->countOrder(array('status_id'=>1));

	echo $data;

	}


	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}

	public function index(){

		$this->headercheck();
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$data['casetype'] = $this->MdlOrder->getCaseType();
			$data['cases'] = $this->MdlOrder->getOrder(array('sort_by'=>'CaseID','sort_direction'=>'DESC'));
			$data['status'] = $this->MdlOrder->getStatus();
			$data['invoice'] = $this->MdlInvoice->getInvoice();
			$data['dentists'] = $this->MdlCustomer->getDentist(array());
			
			$data['items'] = $this->MdlInventory->getItem(array());
			$data['New'] = $this->MdlOrder->countOrder(array('status_id'=>1));
			$data['IP'] = $this->MdlOrder->countOrder(array('status_id'=>2));
			$data['Completed'] = $this->MdlOrder->countOrder(array('status_id'=>3));
			$data['Hold'] = $this->MdlOrder->countOrder(array('status_id'=>4));

			$this->load->view('app-orders',$data);
			$data['script']='<script src="'.base_url().'app/js/app-cases.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
			$this->footer($data);
		}
		else
			redirect('Dashboard');
	}

	
	public function AddOrder()
	{
	
		/*$config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'jpeg|png|jpg';
        $config['max_size']    = '30720';

        //load upload class library
        $this->load->library('upload', $config);*/

        /*if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_file_view', $upload_error);
        }
        else
        {
            // case - success
           $upload_data = $this->upload->data();*/
		if($this->session->userdata('ps_id')==1 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			
						
		}

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{				
					
						
						$data=array(
									'DentistID'=>$_POST['DentistID'],
									'patientfirstname'=>$_POST['patientfirstname'],
									'patientlastname'=>$_POST['patientlastname'],
									'CaseTypeID'=> $_POST['CaseTypeID'],
									'Type'=> $_POST['Type'],
									'duedate' => $_POST['duedate'],
									'duetime' => $_POST['duetime'],
									'gender' =>$_POST['gender'],
									'age' => $_POST['age'],
									'shade1' => $_POST['shade1'],
									'shade2' => $_POST['shade2'],
									'notes' => $_POST['notes'],
									'Tray' => $_POST['Tray'],
									'SG' => $_POST['SG'],
									'BW' => $_POST['BW'],
									'MC' => $_POST['MC'],
									'OC' => $_POST['OC'],
									'Photos' => $_POST['Photos'],
									'Articulator' => $_POST['Articulator'],
									'OD' => $_POST['OD']


									//'file' => $upload_data['file_name']
								);
						$CaseID = $this->MdlOrder->AddOrder($data);
						$i=$this->MdlInvoice->countInvoice();
						$invoice= array('CaseID' => $CaseID,
							'InvoiceID' => $this->MdlInvoice->countInvoice()+1,
							'DentistID'=>$_POST['DentistID']
							);
						$this->MdlInvoice->createInvoice($invoice);


						//Teeth Insert
						if(isset($_POST['teeth'])!=null)
						{	
							$teeth=$_POST['teeth'];
							
							foreach ($teeth as $tooth) 
							{
								$array = array('CaseID' => $CaseID , 
												'teeth' =>$tooth

									);
								$this->MdlOrder->InsertCaseTeeth($array);
							}
						}



						//Items Insert
						if(isset($_POST['items'])!=null)
						{	
							$items=$_POST['items'];
							
							foreach ($items as $item) 
							{
								$array = array('CaseID' => $CaseID , 
												'ItemID' =>$item

									);
								$this->MdlOrder->InsertCaseItem($array);
							}
						}


						//Create Invoice
						if(isset($_POST['invoice'])!=null)
						{
							redirect('Order/Info/'.$CaseID);
						}
						else
						{
							if($_POST['module']==2)
								redirect('Order');


							if($_POST['module']==1)
								redirect('Customer/Info/'.$_POST['DentistID']);
					
							
						}
						
					
						
		}
			
			
		//}

	}

	public function UpdateOrderStatus()
	{
	
			
			
			
		if($_POST['status_id']==3){
				$order = array(
							'CaseID'=>$_POST['CaseID'],
							'status_id' => $_POST['status_id'] 
							);
				
				$this->MdlOrder->UpdateOrderStatus($order);
					

					$invoiceitems= $this->MdlInvoice->getInvoiceItem(array('InvoiceID'=>$_POST['InvoiceID']));
					$items=$this->MdlInventory->getItem(array());
					
					foreach ($invoiceitems as $invoiceitem){

						foreach ($items as $item){
							if($invoiceitem->ItemID==$item->ItemID){
								$data=array(
									'ItemID'=>$invoiceitem->ItemID,
									'CurrentQTY'=>($item->CurrentQTY)-($invoiceitem->QTY)
									);
								
								$this->MdlInventory->EditInventory($data);
							
							}

						}

					}
					
				echo "";
			}
			else{

				$order = array(
							'CaseID'=>$_POST['CaseID'],
							'status_id' => $_POST['status_id'] 
							);
				
				if($this->MdlOrder->UpdateOrderStatus($order))
				{
					
					echo "";
				}
			}
	
		

	}


	public function EditOrder()
	{
	
		/*$config['upload_path'] = './assets/file';
        $config['allowed_types'] = 'jpeg|png|jpg';
        $config['max_size']    = '30720';

        //load upload class library
        $this->load->library('upload', $config);*/

        /*if (!$this->upload->do_upload('filename'))
        {
            // case - failure
            $upload_error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_file_view', $upload_error);
        }
        else
        {
            // case - success
           $upload_data = $this->upload->data();*/
		if($this->session->userdata('ps_id')==1 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			
		}

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{			
						{
							$data=array(
										'CaseID' => $_POST['CaseID'] , 
										'CaseTypeID'=> $_POST['CaseTypeID'],
										'Type'=> $_POST['Type'],
										'patientfirstname'=>$_POST['patientfirstname'],
										'patientlastname'=>$_POST['patientlastname'],
										'duedate' => $_POST['duedate'],
										'duetime' => $_POST['duetime'],
										'gender' =>$_POST['gender'],
										'age' => $_POST['age'],
										'shade1' => $_POST['shade1'],
										'shade2' => $_POST['shade2'],
										'notes' => $_POST['notes'],
										'Tray' => $_POST['Tray'],
										'SG' => $_POST['SG'],
										'BW' => $_POST['BW'],
										'MC' => $_POST['MC'],
										'OC' => $_POST['OC'],
										'Photos' => $_POST['Photos'],
										'Articulator' => $_POST['Articulator'],
										'OD' => $_POST['OD']

										//'file' => $upload_data['file_name']
									);
							$this->MdlOrder->modifyOrder($data);
						}
						$CaseID = $_POST['CaseID'];
						$array = array('CaseID' => $_POST['CaseID']); 
						$this->MdlOrder->deleteItems($array);
						$this->MdlOrder->deleteTeeth($array);
					
						{
							$teeth=$_POST['teeth'];
							
							foreach ($teeth as $tooth) 
							{
								$data = array('CaseID' => $CaseID , 
												'teeth' =>$tooth

									);
								$this->MdlOrder->InsertCaseTeeth($data);
							}
						
							if(isset($_POST['items']))
						{	
							$items=$_POST['items'];
							foreach ($items as $item) 
							{
								$array = array('CaseID' => $CaseID , 
												'ItemID' =>$item

									);
								$this->MdlOrder->InsertCaseItem($array);
							}
						}




						}





							redirect('Order/Info/'.$CaseID);
						
						
		}
			
			
		//}

	}
	
	public function Info()
	{	
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{	
			$this->headercheck();
			$info = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$invoice = $this->MdlInvoice->getInvoice(array('CaseID'=>$this->uri->segment(3)));
			$data['status']=$this->MdlOrder->getStatus(array('status_id'=>$info->status_id));
			$data['casetype'] = $this->MdlOrder->getCaseType();
			$data['items'] = $this->MdlInventory->getItem(array());
			$data['caseitems'] = $this->MdlOrder->getCaseItem(array('CaseID'=>$this->uri->segment(3)));
			$data['invoice'] = $this->MdlInvoice->getInvoice(array('CaseID'=>$this->uri->segment(3)));
			$data['invoiceitems'] = $this->MdlInvoice->getInvoiceItem(array('InvoiceID'=>$invoice->InvoiceID));
			$data['case'] = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['teeth'] = $this->MdlOrder->getCaseTeeth(array('CaseID'=>$this->uri->segment(3)));	
			$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$info->DentistID));	
			$this->load->view('app-orders-info',$data);
			$data['script']='<script src="'.base_url().'app/js/app-cases.js"></script><script src="'.base_url().'app/js/app-validation.js"></script><script src="'.base_url().'app/js/app-invoice.js"></script>';

			$this->footer($data);
		}
	
	
	}
	public function RX()
	{	
			
			$info = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['case'] = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['teeth'] = $this->MdlOrder->getCaseTeeth(array('CaseID'=>$this->uri->segment(3)));	
			$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$info->DentistID));	
			$this->load->view('rx-slip',$data);
			
	
	
	}

	public function getCount(){
		$data = $this->MdlOrder->countOrder();
		echo $data+1;

	}


	public function Casevalidation(){
    
        $this->form_validation->set_rules('patientfirstname','Patient First Name','alpha');
        $this->form_validation->set_rules('patientlastname','Patient Last Name','alpha');

    	if($this->form_validation->run($this)){
    		$data['error']= "";
    		$data['success']=false;
            
    		
    	}
    	else{
    		$err="Ooops! &nbsp;There is an error!";
    		//$data['error']= '<div class="ui red message"><div class="header"><center>This email address belongs to an existing account. &nbsp;Please enter another email address.</center></div></div>';
    		$data['error']='<div class="ui red message"><i class="close icon"></i><div class="header">'.$err.'</div><ul class="list">'.validation_errors('<li>', '</li>').'</ul></div>';
    		$data['success']=true;
    	}

    	echo json_encode($data);
    }


	
	
	
	
	
}
?>
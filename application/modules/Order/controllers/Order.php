<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MX_Controller
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
		
		$data['active'] =3;
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

			$data['cases'] = $this->MdlOrder->getOrder(array('sort_by'=>'CaseID','sort_direction'=>'DESC'));
			$data['status'] = $this->MdlOrder->getStatus();
			$data['invoice'] = $this->MdlInvoice->getInvoice();
			$data['dentists'] = $this->MdlCustomer->getDentist(array());
			$data['Count']	= $this->MdlOrder->countOrder(array());
			$data['items'] = $this->MdlInventory->getItem(array());
			$data['New'] = $this->MdlOrder->countOrder(array('status_id'=>1));
			$data['IP'] = $this->MdlOrder->countOrder(array('status_id'=>2));
			$data['Completed'] = $this->MdlOrder->countOrder(array('status_id'=>3));
			$data['Hold'] = $this->MdlOrder->countOrder(array('status_id'=>4));

			$this->load->view('app-orders',$data);
			$data['script']='<script src="'.base_url().'app/js/cases.js"></script>';
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
			
						$data['DentistID'] = $this->input->post('DentistID');
						$data['patientfirstname'] = $this->input->post('patient');
						$data['duedate'] = $this->input->post('duedate');
						$data['duetime'] = $this->input->post('duetime');
						$data['gender'] = $this->input->post('gender');
						$data['age'] = $this->input->post('age');
						$data['notes'] = $this->input->post('notes');
									
								/*$data=array(
									'DentistID'=>$_POST['DentistID'],
									'patient'=>$_POST['patient'],
									'duedate' => $_POST['due-date'],
									'duetime' => $_POST['due-time'],
									'gender' =>$_POST['gender'],
									'age' => $_POST['age'],
									'notes' => $_POST['notes'],
									//'file' => $upload_data['file_name']
								);*/
						
						if($this->MdlOrder->AddOrder($data))
						{
							$info = $this->MdlOrder->getOrder(array('CaseID'=>$this->db->insert_id()));
							$dentist = $this->MdlCustomer->getDentist(array('DentistID'=>$this->input->post('DentistID')));
							$data['CaseID'] = $info->CaseID;
							$data['DentistID'] = $dentist->DentistID;
							$data['fullname'] = $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;
							$data['company'] = $dentist->company;
							$data['patient'] = $info->patientfirstname;
							$data['orderdatetime'] = $info->orderdatetime;
							$data['duedate'] = $info->duedate;
							$data['duetime'] = $info->duetime;
							$data['status'] = $info->status;
							$data['success'] = true;
							$data['new_count_order'] = $this->MdlOrder->countOrder(array('status'=>'New'));
						}
						else
						{
							$data['success'] = false;
						}
						echo json_encode($data);
		}

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{				
					/*
						if(isset( $_POST['Tray'])==null)
						{
							$data =array('Tray' => 0);
						}
						else
						{
							$data =array('Tray' => $_POST['Tray']);
						}
						if(isset( $_POST['SG'])==null)
						{
							$data =array('SG' => 0);
						}
						else
						{
							$data =array('SG' => $_POST['SG']);
						}
						if( isset($_POST['BW'])==null)
						{
							$data =array('BW' => 0);
						}
						else
						{
							$data =array('BW' => $_POST['BW']);
						}
						if(isset( $_POST['MC'])==null)
						{
							$data =array('MC' => 0);
						}
						else
						{
							$data =array('MC' => $_POST['MC']);
						}
						if(isset ($_POST['OC'])==null)
						{
							$data =array('OC' => 0);
						}
						else
						{
							$data =array('OC' => $_POST['OC']);
						}
						if(isset( $_POST['Photos'])==null)
						{
							$data =array('Photos' => 0);
						}
						else
						{
							$data =array('Photos' => $_POST['Photos']);
						}
						if(isset( $_POST['Articulator'])==null)
						{
							$data =array('Articulator' => 0);
						}
						else
						{
							$data =array('Articulator' => $_POST['Articulator']);
						}
						if(isset ($_POST['OD'])==null)
						{
							$data =array('OD' => 0);
						}
						else
						{
							$data =array('OD' => $_POST['OD']);
						}*/

						
						$data=array(
									'DentistID'=>$_POST['DentistID'],
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
						$CaseID = $this->MdlOrder->AddOrder($data);
						$i=$this->MdlInvoice->countInvoice();
						$invoice= array('CaseID' => $CaseID,
							'InvoiceID' => $this->MdlInvoice->countInvoice()+1,
							'DentistID'=>$_POST['DentistID']
							);
						$this->MdlInvoice->createInvoice($invoice);
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
	
			
				$order = array(
							'CaseID'=>$_POST['CaseID'],
							'status_id' => $_POST['status_id'] 
							);
				
				if($this->MdlOrder->UpdateOrderStatus($order))
				{
					if( $_POST['DentistID']!=Null)
						redirect('Customer/Info/'.$_POST['DentistID'].'/'.$_POST['Info']);
					else
						redirect('Order');
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
			
						$data['DentistID'] = $this->input->post('DentistID');
						$data['patientfirstname'] = $this->input->post('patient');
						$data['duedate'] = $this->input->post('duedate');
						$data['duetime'] = $this->input->post('duetime');
						$data['gender'] = $this->input->post('gender');
						$data['age'] = $this->input->post('age');
						$data['notes'] = $this->input->post('notes');
									
								/*$data=array(
									'DentistID'=>$_POST['DentistID'],
									'patient'=>$_POST['patient'],
									'duedate' => $_POST['due-date'],
									'duetime' => $_POST['due-time'],
									'gender' =>$_POST['gender'],
									'age' => $_POST['age'],
									'notes' => $_POST['notes'],
									//'file' => $upload_data['file_name']
								);*/
						
						if($this->MdlOrder->AddOrder($data))
						{
							$info = $this->MdlOrder->getOrder(array('CaseID'=>$this->db->insert_id()));
							$dentist = $this->MdlCustomer->getDentist(array('DentistID'=>$this->input->post('DentistID')));
							$data['CaseID'] = $info->CaseID;
							$data['DentistID'] = $dentist->DentistID;
							$data['fullname'] = $dentist->title.' '.$dentist->firstname.' '.$dentist->lastname;
							$data['company'] = $dentist->company;
							$data['patient'] = $info->patientfirstname;
							$data['orderdatetime'] = $info->orderdatetime;
							$data['duedate'] = $info->duedate;
							$data['duetime'] = $info->duetime;
							$data['status'] = $info->status;
							$data['success'] = true;
							$data['new_count_order'] = $this->MdlOrder->countOrder(array('status'=>'New'));
						}
						else
						{
							$data['success'] = false;
						}
						echo json_encode($data);
		}

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{			/*
						if(isset( $_POST['Tray'])==)
						{
							$data =array('Tray' => 0);
						}
						else
						{
							$data =array('Tray' => $_POST['Tray']);
						}
						if(isset( $_POST['SG'])=="")
						{
							$data =array('SG' => 0);
						}
						else
						{
							$data =array('SG' => $_POST['SG']);
						}
						if( isset($_POST['BW'])==null)
						{
							$data =array('BW' => 0);
						}
						else
						{
							$data =array('BW' => $_POST['BW']);
						}
						if(isset( $_POST['MC'])==null)
						{
							$data =array('MC' => 0);
						}
						else
						{
							$data =array('MC' => $_POST['MC']);
						}
						if(isset ($_POST['OC'])==null)
						{
							$data =array('OC' => 0);
						}
						else
						{
							$data =array('OC' => $_POST['OC']);
						}
						if(isset( $_POST['Photos'])==null)
						{
							$data =array('Photos' => 0);
						}
						else
						{
							$data =array('Photos' => $_POST['Photos']);
						}
						if(isset( $_POST['Articulator'])==null)
						{
							$data =array('Articulator' => 0);
						}
						else
						{
							$data =array('Articulator' => $_POST['Articulator']);
						}
						if(isset ($_POST['OD'])==null)
						{
							$data =array('OD' => 0);
						}
						else
						{
							$data =array('OD' => $_POST['OD']);
						}*/

						{
							$data=array(
										'CaseID' => $_POST['CaseID'] , 
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
			$data['items'] = $this->MdlInventory->getItem(array());
			$data['caseitems'] = $this->MdlOrder->getCaseItem(array('CaseID'=>$this->uri->segment(3)));
			$data['invoice'] = $this->MdlInvoice->getInvoice(array('CaseID'=>$this->uri->segment(3)));
			$data['invoiceitems'] = $this->MdlInvoice->getInvoiceItem(array('InvoiceID'=>$invoice[0]->InvoiceID));
			$data['case'] = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['teeth'] = $this->MdlOrder->getCaseTeeth(array('CaseID'=>$this->uri->segment(3)));	
			$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$info->DentistID));	
			$this->load->view('app-orders-info',$data);
			$data['script']='<script src="'.base_url().'app/js/cases.js"></script>';

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

	
	
	
	
	
}
?>
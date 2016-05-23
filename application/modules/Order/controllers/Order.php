<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MX_Controller
{
	function __construct(){
		parent::__construct();
		
	
		
	}
	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
	public function index(){
		$data['active'] =3;
		$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$this->load->view('template/header',$data);
			$data['cases'] = $this->mdlOrder->getOrder(array('sort_by'=>'CaseID','sort_direction'=>'DESC'));
			$data['status'] = $this->mdlOrder->getStatus();
			$data['invoice'] = $this->mdlInvoice->getInvoice();
			$data['dentists'] = $this->mdlCustomer->getDentist(array());
			$data['Count']	= $this->mdlOrder->countOrder(array());
			$data['items'] = $this->mdlInventory->getItem(array());
			$data['New'] = $this->mdlOrder->countOrder(array('status_id'=>1));
			$data['IP'] = $this->mdlOrder->countOrder(array('status_id'=>2));
			$data['Completed'] = $this->mdlOrder->countOrder(array('status_id'=>3));
			$data['Hold'] = $this->mdlOrder->countOrder(array('status_id'=>4));

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
						
						if($this->mdlOrder->AddOrder($data))
						{
							$info = $this->mdlOrder->getOrder(array('CaseID'=>$this->db->insert_id()));
							$dentist = $this->mdlCustomer->getDentist(array('DentistID'=>$this->input->post('DentistID')));
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
							$data['new_count_order'] = $this->mdlOrder->countOrder(array('status'=>'New'));
						}
						else
						{
							$data['success'] = false;
						}
						echo json_encode($data);
		}

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
						if(isset( $_POST['Tray'])=="")
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
						}

						
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
									'notes' => $_POST['notes']

									//'file' => $upload_data['file_name']
								);
						$CaseID = $this->mdlOrder->AddOrder($data);
						$i=$this->mdlInvoice->countInvoice();
						$invoice= array('CaseID' => $CaseID,
							'InvoiceID' => $this->mdlInvoice->countInvoice()+1,
							'DentistID'=>$_POST['DentistID']
							);
						$this->mdlInvoice->createInvoice($invoice);
						if(isset($_POST['teeth']))
						{	
							$teeth=$_POST['teeth'];
							
							foreach ($teeth as $tooth) 
							{
								$array = array('CaseID' => $CaseID , 
												'teeth' =>$tooth

									);
								$this->mdlOrder->InsertCaseTeeth($array);
							}
						}

						if(isset($_POST['items']))
						{	
							$items=$_POST['items'];
							
							foreach ($items as $item) 
							{
								$array = array('CaseID' => $CaseID , 
												'ItemID' =>$item

									);
								$this->mdlOrder->InsertCaseItem($array);
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
				
				if($this->mdlOrder->UpdateOrderStatus($order))
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
						
						if($this->mdlOrder->AddOrder($data))
						{
							$info = $this->mdlOrder->getOrder(array('CaseID'=>$this->db->insert_id()));
							$dentist = $this->mdlCustomer->getDentist(array('DentistID'=>$this->input->post('DentistID')));
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
							$data['new_count_order'] = $this->mdlOrder->countOrder(array('status'=>'New'));
						}
						else
						{
							$data['success'] = false;
						}
						echo json_encode($data);
		}

		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
						if(isset( $_POST['Tray'])=="")
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
						}

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
										'notes' => $_POST['notes']

										//'file' => $upload_data['file_name']
									);
							$this->mdlOrder->modifyOrder($data);
						}
						$CaseID = $_POST['CaseID'];
						$array = array('CaseID' => $_POST['CaseID']); 
						$this->mdlOrder->deleteItems($array);
						$this->mdlOrder->deleteTeeth($array);
					
						{
							$teeth=$_POST['teeth'];
							
							foreach ($teeth as $tooth) 
							{
								$data = array('CaseID' => $CaseID , 
												'teeth' =>$tooth

									);
								$this->mdlOrder->InsertCaseTeeth($data);
							}
						
							if(isset($_POST['items']))
						{	
							$items=$_POST['items'];
							foreach ($items as $item) 
							{
								$array = array('CaseID' => $CaseID , 
												'ItemID' =>$item

									);
								$this->mdlOrder->InsertCaseItem($array);
							}
						}




						}





							redirect('Order/Info/'.$CaseID);
						
						
		}
			
			
		//}

	}
	
	public function Info()
	{	$data['active'] =3;
		$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$this->load->view('template/header',$data);
			$info = $this->mdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['items'] = $this->mdlInventory->getItem(array());
			$data['caseitems'] = $this->mdlOrder->getCaseItem(array('CaseID'=>$this->uri->segment(3)));
			$data['invoice'] = $this->mdlInvoice->getInvoice(array('CaseID'=>$this->uri->segment(3),'DentistID'=>$info->DentistID));
			$data['case'] = $this->mdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['teeth'] = $this->mdlOrder->getCaseTeeth(array('CaseID'=>$this->uri->segment(3)));	
			$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$info->DentistID));	
			$this->load->view('app-orders-info',$data);
			$data['script']='<script src="'.base_url().'app/js/cases.js"></script>';
			$this->footer($data);
		}
	
	
	}
	public function RX()
	{	
			
			$info = $this->mdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['case'] = $this->mdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['teeth'] = $this->mdlOrder->getCaseTeeth(array('CaseID'=>$this->uri->segment(3)));	
			$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$info->DentistID));	
			$this->load->view('rx-slip',$data);
			
	
	
	}

	public function getCaseItems()
	{
		$data = $this->mdlOrder->getCaseItem(array('CaseID' => $this->input->POST('CaseID')));

		
		
			foreach ($data as $datus) {
				if($datus->ItemID!=$this->input->POST('ItemID'))
				{
					$arr['test']= '<option class="item" data-value="'.$datus->ItemID.'">'.$datus->ItemID.'</option >';
				}
			}

			echo json_encode($arr);
			
	
			
	}
	
	
	
	
}
?>
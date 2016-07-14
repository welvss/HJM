<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends MX_Controller
{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		$this->load->model('MdlInvoice');
		

		
	}
	
	public function index(){
		$data['active'] =3;
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$this->load->view('template/header',$data);
			$data['cases'] = $this->MdlOrder->getOrder(array('sort_by'=>'CaseID','sort_direction'=>'DESC'));
			$data['status'] = $this->MdlOrder->getStatus();
			$data['dentists'] = $this->MdlCustomer->getDentist(array());
			$data['Count']	= $this->MdlOrder->countOrder(array());

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
	public function InvoiceSlip()
	{	
		$info = $this->MdlInvoice->getInvoice(array('InvoiceID'=>$this->uri->segment(3)));
		$data['items'] = $this->MdlInventory->getItem(array());
		$data['invoice'] = $this->MdlInvoice->getInvoice(array('InvoiceID'=>$this->uri->segment(3)));
		$data['invoiceitems'] = $this->MdlInvoice->getInvoiceItem(array('InvoiceID'=>$this->uri->segment(3)));
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$info->DentistID));
		$data['teeth'] = $this->MdlOrder->getCaseTeeth(array('CaseID'=>$info->CaseID));
		
		$this->load->view('invoice-slip',$data);
			
	}
	
	public function addInvoice()
	{
	
						
						$data=array(
									'InvoiceID' => $_POST['InvoiceID'],
									'datecreated'=>date('Y-m-d H:i:s'),
									'duedate' => $_POST['duedate'],
									'Total'=>$_POST['Total']

								);
						$InvoiceID = $this->MdlInvoice->addInvoice($data);
						if(isset($_POST['invoice']))
						{	
							$this->MdlInvoice->deleteInvoiceItem($_POST['InvoiceID']);
							$x=1;
							foreach ($_POST['invoice'] as $invoice) 
							{
								$invoice[$x] = array('
									InvoiceID' => $_POST['InvoiceID'],
									'ItemID' => $invoice['ItemID'],
									'QTY' => $invoice['QTY'],
									'Amount' => $invoice['Amount'],
									'SubTotal' => $invoice['SubTotal']
									);
								$this->MdlInvoice->addInvoiceItem($invoice[$x]);
								{
									$data = $this->MdlInventory->getItem(array('ItemID' => $invoice['ItemID']));
									$edit = 
									array(
										'ItemID' => $invoice['ItemID'],
										'TotalQTY' => $data->TotalQTY-$invoice['QTY'] , 
										);
									$this->MdlInventory->EditInventory($edit);
								}
								$x++;
							}
						}
					
						redirect('Order/Info/'.$_POST['CaseID']);
						
					
						
	
			
			
		//}

	}

	public function UpdateInvoiceStatus()
	{
	
			
				$invoice = array(
							'InvoiceID'=>$_POST['InvoiceID'],
							'status' => $_POST['status'] 
							);
				
				if($this->MdlInvoice->addInvoice($invoice))
					redirect('Order/Info/'.$_POST['CaseID']);
					
			
		
		

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
							$this->MdlOrder->modifyOrder($data);
						}
						$CaseID = $_POST['CaseID'];
						$array = array('CaseID' => $_POST['CaseID']); 

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
						}
							redirect('Order/Info/'.$CaseID);
						
						
		}
			
			
		//}

	}
	
	public function Info()
	{	$data['active'] =3;
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			$this->load->view('template/header',$data);
			$info = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['case'] = $this->MdlOrder->getOrder(array('CaseID'=>$this->uri->segment(3)));	
			$data['teeth'] = $this->MdlOrder->getCaseTeeth(array('CaseID'=>$this->uri->segment(3)));	
			$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$info->DentistID));	
			$this->load->view('app-orders-info',$data);
			$data['script']='<script src="'.base_url().'app/js/cases.js"></script>';
			$this->footer($data);
		}
	
	
	}

	
	
	
	
}
?>
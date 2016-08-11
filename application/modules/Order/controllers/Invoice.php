<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice extends MX_Controller
{
	function __construct(){
		parent::__construct();

		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		
		
		echo modules::run('Dashboard/models');
		
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


	
	
	
}
?>
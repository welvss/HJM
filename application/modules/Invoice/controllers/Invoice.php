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
	
	public function getInvoiceCount(){
		
      	$ODinvoices = $this->MdlInvoice->getInvoice(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1));
      	$invoices = $this->MdlInvoice->getInvoice(array('paid'=>0,'notduedate'=>date("Y-m-d") ,'status'=>1));
     	$ips=$this->MdlInvoice->getInvoicePayment(array('PaymentMethod'=>'Partial'));

	    $sumOI=0;
	    $sumOD=0;
	    $sumPartial=0;
	    $sumPayment=0;
	    $sumPaymentOD=0;
	    $countOI=0;
	    $countOD=0;
	    $countPartial=array();
      	foreach ($invoices as $invoice) {
        	$passed=true;
	        foreach ($ips as $ip) {
	         
	          if($ip->InvoiceID==$invoice->InvoiceID) {   
	              $passed=false;
	              $countPartial[]=$ip->InvoiceID;
	          }
	        }
	        if($passed){
	          
	          $sumOI=$sumOI+$invoice->Total;
	          $countOI++;
	        }
        
     	}
      	$InvoiceIDS=array_unique($countPartial);

      	foreach ($InvoiceIDS as $InvoiceID) {
        	foreach ($ips as $ip) {
        		if($ip->InvoiceID==$InvoiceID) {   
            		$sumPayment=$sumPayment+$ip->Amount;
         		}
        	}   
      	}

      	foreach ($invoices as $invoice) {
      		foreach ($InvoiceIDS as $InvoiceID) {
	          	if($invoice->InvoiceID==$InvoiceID) {               
	              	$sumPartial=$sumPartial+$invoice->Total;
	          	}
    		}   
    	}
      

      	foreach ($ODinvoices as $invoice) {
	        $passed=true;
	        foreach ($ips as $ip) {
	          if($ip->InvoiceID==$invoice->InvoiceID) {   
	            $sumPaymentOD=$sumPaymentOD+$ip->Amount;
	          }
	        }
	        $sumOD=$sumOD+$invoice->Total;
	        $countOD++;
	    }
   
      	$data['sum']=number_format($sumOI,2);
     	$data['OI']=$countOI;
      	$data['OD']=$countOD;
      	$data['Partial']=number_format($sumPartial-$sumPayment,2);
      	$data['overdue']=number_format($sumOD-$sumPaymentOD,2);
      	$data['PCount']=count(array_unique($countPartial));

      	echo json_encode($data);
	}


	public function InvoiceSlip()
	{	
		$info = $this->MdlInvoice->getInvoice(array('InvoiceID'=>$this->uri->segment(3)));
		$data['items'] = $this->MdlOrder->getCaseType(array());
		$data['invoice'] = $this->MdlInvoice->getInvoice(array('InvoiceID'=>$this->uri->segment(3)));
		$data['invoiceitems'] = $this->MdlInvoice->getInvoiceItem(array('InvoiceID'=>$this->uri->segment(3)));
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$info->DentistID));
		$data['case'] = $this->MdlOrder->getOrder(array('CaseID'=>$info->CaseID));
		
		$this->load->view('invoice-slip',$data);
			
	}
	
	public function addInvoice()
	{
	
						
						$data=array(
									'InvoiceID' => $_POST['InvoiceID'],
									'datecreated'=>date('Y-m-d H:i:s',strtotime($_POST['orderdate'].' '.$_POST['ordertime'])),
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


	}

	public function UpdateInvoiceStatus(){
		$invoice = array(
					'InvoiceID'=>$_POST['InvoiceID'],
					'status' => $_POST['status'] 
					);
		
		$this->MdlInvoice->addInvoice($invoice);
		$invoice = $this->MdlInvoice->getInvoice(array('InvoiceID'=>$_POST['InvoiceID']));
		$data=array(
					'InvoiceID' => $_POST['InvoiceID'],
					'DentistID'=>$_POST['DentistID'],
					'PaymentMethod' =>'New',
					'timecreated'=> date('Y-m-d H:i:s',strtotime($invoice->datecreated)),
					'datecreated'=>date('Y-m-d' ,strtotime($invoice->datecreated)),
					 

								);
		$this->MdlInvoice->addInvoicePayment($data);
			redirect('Order/Info/'.$_POST['CaseID']);
	}

	public function getInvoiceInfo()
	{	
		$info = $this->MdlInvoice->getInvoice(array('InvoiceID'=>$_POST['InvoiceID']));

		echo $_POST['InvoiceID'];
	}


	public function addInvoicePayment()
	{					if(($_POST['Balance']-$_POST['Amount'])==0)
						{
							$invoice = array(
										'InvoiceID'=>$_POST['InvoiceID'],
										'paid'=>1
										);
							
							$this->MdlInvoice->addInvoice($invoice);
						}
						
						$data=array(
									'InvoiceID' => $_POST['InvoiceID'],
									'DentistID'=>$_POST['DentistID'],
									'PaymentMethod' => (($_POST['Balance']-$_POST['Amount'])==0?'Full':'Partial'),
									'Amount'=>$_POST['Amount'],
									'timecreated'=> date('Y-m-d H:i:s',strtotime($_POST['orderdate'].' '.$_POST['ordertime'])),
									'datecreated'=>date('Y-m-d',strtotime($_POST['orderdate'])),
						);
						if($this->MdlInvoice->addInvoicePayment($data)>0)
							echo "Transaction successfully created!";	


	}


	
	
	
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends MX_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		
		$this->load->library('form_validation');
   		$this->form_validation->CI =& $this; 
		
		
		echo modules::run('Dashboard/models');
	
	}
	
	function headercheck()
	{	
		
		$data['active'] =2;
		echo modules::run('Dashboard/headercheck', $data);
	}

	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}


	
	public function index(){
		$this->headercheck();
		if($this->session->userdata('ps_id')==2 )
		{	
			$data['dentists'] = $this->MdlCustomer->getDentist(array('active'=>1));
			$data['sum']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'status'=>1));
      		$data['overdue']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1));
      		$data['OI'] = $this->MdlInvoice->getInvoice(array('paid'=>0,'status'=>1));
     		$data['OD'] = $this->MdlInvoice->getInvoice(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1));	
			$this->load->view('app-customer',$data);
			$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
			$this->footer($data);
		}

	}
	
	public function Info()
	{
		$this->headercheck();
		$data['casetype'] = $this->MdlOrder->getCaseType();
		$data['sum']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'DentistID'=>$this->uri->segment(3),'status'=>1));
		$data['overdue']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1,'DentistID'=>$this->uri->segment(3)));
		$data['Count']	= $this->MdlOrder->getOrder(array('count'=>''));
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$this->uri->segment(3)));	
		$data['invoice'] = $this->MdlInvoice->getInvoice(array('DentistID'=>$this->uri->segment(3)));
		$data['status'] = $this->MdlOrder->getStatus();
		$data['cases'] = $this->MdlOrder->getOrder(array('DentistID'=>$this->uri->segment(3)));	
		$data['New'] = $this->MdlOrder->getOrder(array('status_id'=>1,'DentistID'=>$this->uri->segment(3),'count'=>''));
		$data['IP'] = $this->MdlOrder->getOrder(array('status_id'=>2,'DentistID'=>$this->uri->segment(3),'count'=>''));
		$data['items'] = $this->MdlInventory->getItem(array());
		$data['Completed'] = $this->MdlOrder->getOrder(array('status_id'=>3,'DentistID'=>$this->uri->segment(3),'count'=>''));
		$data['Hold'] = $this->MdlOrder->getOrder(array('status_id'=>4,'DentistID'=>$this->uri->segment(3),'count'=>''));
		$data['inv'] = $this->MdlInvoice->getInvoice(array('DentistID'=>$this->uri->segment(3),'status'=>1));
		$data['invoicepayment'] = $this->MdlInvoice->getInvoicePayment(array(''));
		$this->load->view('app-customer-info',$data);
		$data['script']='<script src="'.base_url().'app/js/app-customer-info.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
		$this->footer($data);
	
	
	}



	

	public function AddDentist()
	{
			if($this->input->post('website')=="www.")
				$ws="";
			else
				$ws='http://'.$this->input->post('website');
			if($this->input->post('same'))
			{
				$street=$_POST['bstreet'];
				$city=$_POST['bcity'];
				$brgy=$_POST['bbrgy'];
			}
			else
			{
				$street=$_POST['shipstreet'];
				$city=$_POST['shipcity'];
				$brgy=$_POST['shipbrgy'];
			}
			{

						$dentist = array(
									'title'=>$_POST['title'],
									'firstname'=>$_POST['firstname'],
									'lastname' => $_POST['lastname'],
									'middlename' => $_POST['middlename'],
									'company' =>$_POST['company'],
									'email' => $_POST['email'],
									'telephone' => $_POST['telephone'],
									'mobile' => $_POST['mobile'],
									'fax' => $_POST['fax'],
									'website' => $ws,
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $street,
									'shipcity' => $city,
									'shipbrgy' => $brgy,
									'notes' => $_POST['notes'] );
						
						$DentistID=$this->MdlCustomer->AddDentist($dentist);
						

						redirect('Customer');
			}
	


		

	}


	




	public function EditDentist()
	{
			if($this->input->post('website')=="www.")
				$ws="";
			else
				$ws='http://'.$this->input->post('website');
	
			if($this->input->post('same'))
			{
				$street=$_POST['bstreet'];
				$city=$_POST['bcity'];
				$brgy=$_POST['bbrgy'];
			}
			else
			{
				$street=$_POST['shipstreet'];
				$city=$_POST['shipcity'];
				$brgy=$_POST['shipbrgy'];
			}
			
			{
						$dentist = array(
							
									'title'=>$_POST['title'],
									'DentistID' => $_POST['DentistID'],
									'firstname'=>$_POST['firstname'],
									'lastname' => $_POST['lastname'],
									'middlename' => $_POST['middlename'],
									'company' =>$_POST['company'],
									'email' => $_POST['email'],
									'telephone' => $_POST['telephone'],
									'mobile' => $_POST['mobile'],
									'fax' => $_POST['fax'],
									'website' => $ws,
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $street,
									'shipcity' => $city,
									'shipbrgy' => $brgy,
									'notes' => $_POST['notes'] );
						
						if($this->MdlCustomer->modifyDentist($dentist))
					redirect('Customer/Info/'.$_POST['DentistID']);
				redirect('Customer/Info/'.$_POST['DentistID']);
			}
	
		

	}
	
	
	
	
	public function deleteDentist()
	{	

	

		$this->MdlCustomer->modifyDentist(array('DentistID'=>$this->uri->segment(3),'active'=>0));	

		redirect('Customer');
	}
	
	

	



    public function Inputvalidation(){
    
   		if($_POST['emails']!=$_POST['email']){
   			$this->form_validation->set_rules('email','Email Address','valid_email|callback_check_email');
       	}
        $this->form_validation->set_rules('firstname','First Name','alpha');
        $this->form_validation->set_rules('middlename','Middle Name','alpha');
        $this->form_validation->set_rules('lastname','Last Name','alpha');
        $this->form_validation->set_rules('website','Website','callback_check_website');
        $this->form_validation->set_rules('telephone','Telephone','numeric');
        $this->form_validation->set_rules('mobile','Mobile','numeric');
        $this->form_validation->set_rules('fax','Fax','numeric');
       	$this->check_email($x);

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

    public function check_email($email)
    {
           	
            $email_available = $this->MdlCustomer->check_if_email_exists($email);
            if($email_available)
            {
               
                return false;
            }
            else
            {
                
              
             	return true;
   			
            }
            
    }


    public function check_website($url){
           	$www = substr($url,0,4);
           	$www2 = substr($url,0,5);
           	$www3 = substr($url,0,6);
           	$compare=strcasecmp($www,"www.");
            $compare2=strcasecmp($www2,"www..");
            $compare3=strcasecmp($www3,"www. .");
            if($compare!=0 || $compare2==0 || $compare3==0)
            {
               
                return false;
            }
            else
            {
                
              	
             	return true;
   			
            }
            
    }
    public function getInvoiceInfo()
	{	
		$info = $this->MdlInvoice->getInvoice(array('InvoiceID'=>$_POST['InvoiceID']));
		$ips = $this->MdlInvoice->getInvoicePayment();
		$sum = 0;
		foreach ($ips as $ip) {
			if($_POST['InvoiceID']==$ip->InvoiceID)
				$sum=$sum + $ip->Amount;
		}
		
		$data['InvoiceID'] = $_POST['InvoiceID'];
		$data['duedate'] = date('l F d, Y', strtotime($info->duedate));
		$data['datecreated'] = '('.date('l F d, Y', strtotime($info->datecreated)).')';
		$data['total'] =  number_format(($info->Total),2);
		$data['balance'] =  number_format(($info->Total-$sum),2);
		$data['sum'] = number_format(($sum),2);
		echo json_encode($data);

		
	}
    



}
?>

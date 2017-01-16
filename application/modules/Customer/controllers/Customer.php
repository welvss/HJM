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
			//$data['sum']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'status'=>1,'notduedate'=> date("Y-m-d")));
      		//$data['overdue']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1));
      		//$data['OI'] = $this->MdlInvoice->getInvoice(array('paid'=>0,'status'=>1,'notduedate'=> date("Y-m-d")));
     		//$data['OD'] = $this->MdlInvoice->getInvoice(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1));
     		$data['invoices']= $this->MdlInvoice->getInvoice(array('status'=>1));	
     		$data['invoicepayment'] = $this->MdlInvoice->getInvoicePayment();
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
	    	}   }
	      

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
			$this->load->view('app-customer',$data);
			$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
			$this->footer($data);
		}

	}
	
	public function Info()
	{
		$this->headercheck();
		$data['casetype'] = $this->MdlOrder->getCaseType();
		//$data['sum']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'DentistID'=>$this->uri->segment(3),'status'=>1,'notduedate'=> date("Y-m-d")));
		//$data['overdue']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1,'DentistID'=>$this->uri->segment(3)));
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
		
	   	$invoices = $this->MdlInvoice->getInvoice(array('paid'=>0,'notduedate'=>date("Y-m-d") ,'status'=>1,'DentistID'=>$this->uri->segment(3)));
	   	$ODinvoices = $this->MdlInvoice->getInvoice(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1,'DentistID'=>$this->uri->segment(3)));
	  	$ips = $this->MdlInvoice->getInvoicePayment(array('PaymentMethod'=>'Partial','DentistID'=>$this->uri->segment(3)));

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
		    foreach ($ips as $ip) {
		    	if($ip->InvoiceID==$invoice->InvoiceID) {   
		            $sumPaymentOD=$sumPaymentOD+$ip->Amount;
		        }
		    }
		    $sumOD=$sumOD+$invoice->Total;
		    $countOD++;
		}
		$data['sum']=$sumOI;
     	$data['OI']=$countOI;
      	$data['OD']=$countOD;
      	$data['Partial']=$sumPartial-$sumPayment;
      	$data['overdue']=$sumOD-$sumPaymentOD;
      	$data['PCount']=count(array_unique($countPartial));
		$this->load->view('app-customer-info',$data);
		$data['script']='<script src="'.base_url().'app/js/app-customer-info.js"></script><script src="'.base_url().'app/js/app-validation.js"></script><script src="'.base_url().'app/js/app-camera.js"></script>';
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
					if(!empty($_POST['email'])&&isset($_POST['email'])){	
						$length = 5;
						$alphabets = range('A','Z');
					    $numbers = range('0','9');
					    $additional_characters = array('_','.');
					    $final_array = array_merge($alphabets,$numbers,$additional_characters);
					         
					    $password = '';
					  
					    while($length--) {
					      $key = array_rand($final_array);
					      $password .= $final_array[$key];
					    }

						$email= array('title'=>$_POST['title'],
									'firstname'=>$_POST['firstname'],
									'lastname' => $_POST['lastname'],
									'middlename' => $_POST['middlename'],
									'company' =>$_POST['company'],
									'email' => $_POST['email'],
									'password'=>$password
								);
						$this->send_new_email($email);
						$user= array(
								'DentistID'=>$DentistID,
								'username' => $_POST['email'],
								'password'=>md5($password)
							);
						$this->MdlCustomer->AddUser($user);
					}
						
						
			
						
		    }
		    redirect('Customer');
	


		

	}

	function send_new_email($options=array()){
      $this->load->library('email');

      $this->email->from('hjm@pup-taguig.net', 'HJM Dental Laboratory');
      $this->email->to($options['email']);
      $this->email->subject('HJM Dental Laboratory Management System User Account');

      $message =  '<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN"
            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
            <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
            <body>';
      $message .= '<p>Dear '.$options['title'].' '.$options['firstname'].' '.$options['lastname'].',</p><br>';
      $message .= 'We would like to inform you that you are now part of the HJM Dental Laboratory Mangament System. Here is your account details:</p><br>
            <p>USERNAME: '.$options['email'].'</p><br>
            <p>PASSWORD:'.$options['password'].'</p><br>';
      $message .= '<p>Thank You!</p>';
      $message .= '<p>The Team at HJM Dental Laboratory Management</p>';
      $message .= '</body></html>';

      $this->email->message($message);
      if(!$this->email->send()){
        
        show_error($this->email->print_debugger());
      }
      else
        return true;
    
    }


	




	public function EditDentist()
	{
		if($this->session->userdata('ps_id')==2&&$this->session->userdata('is_logged_in')){
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
		else
		if($this->session->userdata('ps_id')==1&&$this->session->userdata('is_logged_in')){
			if($this->input->post('website')=="www.")
				$ws="";
			else
				$ws='http://'.$this->input->post('website');
	
		
			{
				$street=$_POST['shipstreet'];
				$city=$_POST['shipcity'];
				$brgy=$_POST['shipbrgy'];
			}
			if($_FILES['image']['name']!='')
			{	

				$config['upload_path']          = './app/uploads/';
                $config['allowed_types']        = 'gif|jpg|jpeg|png';
                $config['max_size']             = 2048;
                $config['encrypt_name']			= TRUE;
                $this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('image'))
		        {	 
		            $error = array('error' => $this->upload->display_errors());
		            die($this->upload->display_errors());
		                   
		        }
                		
	            else{

	              	$datus = $this->upload->data();
	                $file=true;

	            }
            }
            else{
            	$file=false;
            }
			
			{
						$dentist = array(
							
									
									'DentistID' => $this->session->userdata('DentistID'),
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
									'shipbrgy' => $brgy
									);
						if($file){
							$dentist['image'] = $datus['file_name'];

						}
						
						$this->MdlCustomer->modifyDentist($dentist);
						redirect('Dashboard');
				
			}

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


	public function AccountSettings(){

		if($this->session->userdata('ps_id')==1&&$this->session->userdata('is_logged_in')){
			$this->headercheck();
			if(isset($_POST['submit'])){
				/*
		    	$this->form_validation->set_rules('password','Password','required|callback_validate_password');
		    	$this->form_validation->set_rules('newpassword','New Password','required');   
		    	$this->form_validation->set_rules('newpasswordconf','New Password Confirmation','required|matches[newpassword]');      	
				*/
				if($this->MdlCustomer->password_check($_POST['password'])){
			    	if(md5($_POST['newpassword'])==md5($_POST['newpasswordconf'])){
				    	{
				    		$data= array(
				    			'DentistID'=>$this->session->userdata('DentistID'),
				    			'password'=>md5($_POST['newpassword'])
				    		);
				    		$this->MdlCustomer->EditUser($data);
				    		
				    	}
				    	$data['success']=1;
				    }
				    else{

				    	$data['error3']=1;
						
					}
				}
				else{
					$data['error1']=1;
					
				}
				$this->load->view('accountsettings',$data);
				$this->load->view('template/frontfooter');
    	
    		}
    		
			else{
				$this->load->view('accountsettings');
				$this->load->view('template/frontfooter');
			}
				
		}
	}

	


    public function Profile(){
    	if($this->session->userdata('ps_id')==1&&$this->session->userdata('is_logged_in')){
			$this->headercheck();
			
			$data['dentist']=$this->MdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
			$this->load->view('profile',$data);
			$this->load->view('template/frontfooter');
		}

    }
    



}
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
    if($this->session->userdata('is_logged_in') != TRUE)  
    {
      redirect();
    }
    $this->models();
    

	}
	
	public function footer()
	{
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
		$this->load->view('template/footer',$data);
	}

  function models(){
    $this->load->module('Dashboard');
    $this->load->module('Order');
    $this->load->module('Inventory');
    $this->load->module('Customer');
    $this->load->module('PO');
    $this->load->module('Order');
    $this->load->module('Supplier');
    $this->load->model('MdlDashboard');
    $this->load->model('MdlCustomer');
    $this->load->model('MdlOrder');
    $this->load->model('MdlInvoice');
    $this->load->model('MdlSupplier');
    $this->load->model('MdlPO');
    $this->load->model('MdlInventory');
    $this->load->library('form_validation');
    $this->form_validation->CI =& $this; 

  }

	function headercheck($data)
	{	
		
		
		$data['dentist'] = $this->MdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
		if($this->session->userdata('ps_id')==2 && $this->session->userdata('is_logged_in') == TRUE  )
		{
			
			$this->load->view('template/header',$data);
		}
		else
		if($this->session->userdata('ps_id')==1 && $this->session->userdata('is_logged_in') == TRUE)
		{
			$this->load->view('template/frontheader',$data);
		}
		else
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}		
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect();
    }

	public function index()
	{
		$data['active'] =1;
		$this->headercheck($data);
		if($this->session->userdata('ps_id')==2 )

		{	
      $data['i']=$this->MdlInventory->getItem(array('CurrentQTY'=>''));
      $data['sum']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'status'=>1));
      $data['overdue']=$this->MdlInvoice->addInvoiceTotal(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1));
      $data['OI'] = $this->MdlInvoice->getInvoice(array('paid'=>0,'status'=>1));
      $data['OD'] = $this->MdlInvoice->getInvoice(array('paid'=>0,'duedate'=> date("Y-m-d"),'status'=>1));
			$data['New'] = $this->MdlOrder->countOrder(array('status_id'=>1));
			$data['IP'] = $this->MdlOrder->countOrder(array('status_id'=>2));
			$data['Completed'] = $this->MdlOrder->countOrder(array('status_id'=>3));
			$data['Hold'] = $this->MdlOrder->countOrder(array('status_id'=>4));

			$this->load->view('a-dashboard',$data);
			$this->footer();		
		}
		else
		if($this->session->userdata('ps_id')==1 )
		{
			$this->load->view('d-dashboard');
			$this->load->view('template/frontfooter');
		}
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
           	
            $email_available = $this->MdlDashboard->check_if_email_exists($email);
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
		
}
?>
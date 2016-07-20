<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends MX_Controller
{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('is_logged_in') != TRUE)	
		{
			redirect();
		}
		$this->load->module('Dashboard');
		$this->load->module('Order');
		$this->load->module('Inventory');
		$this->load->module('Customer');
		$this->load->module('PO');
		$this->load->model('MdlCustomer');
		$this->load->model('MdlOrder');
		$this->load->model('MdlInvoice');
		$this->load->model('MdlSupplier');
		$this->load->model('MdlPO');
	
	}
	
	public function footer($data)
	{
		$this->load->view('template/footer',$data);
	}
	
	function headercheck()
	{	
		$data['active'] =6;

		echo modules::run('Dashboard/headercheck', $data);
	}

	public function index()
	{
		$this->headercheck();
		$data['suppliers'] = $this->MdlSupplier->getSupplier();	
		$this->load->view('app-supplier',$data);
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
		$this->footer($data);
	}
	
	public function Info()
	{

		$this->headercheck();
		$data['Count']	= $this->MdlPO->countPO(array());
		$data['supplier'] = $this->MdlSupplier->getSupplier(array('SupplierID'=>$this->uri->segment(3)));	
		$data['items'] = $this->MdlInventory->getItem(array('SupplierID'=>$this->uri->segment(3)));	
		$this->load->view('app-supplier-info',$data);
		$data['script']='<script src="'.base_url().'app/js/app-supplier-info.js"></script><script src="'.base_url().'app/js/app-validation.js"></script>';
		$this->footer($data);
	
	
	}



	

	public function AddSupplier()
	{
			if($this->input->post('website')=="www.")
				$ws="";
			else
				$ws='http://'.$this->input->post('website');
						$supplier = array(
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
									'notes' => $_POST['notes'] 
									);
						
						if($this->MdlSupplier->AddSupplier($supplier))
							redirect('Supplier');


	}
	
	public function EditSupplier()
	{
	
			if($this->input->post('website')=="www.")
				$ws="";
			else
				$ws='http://'.$this->input->post('website');		
						
						$supplier = array(
							
									'title'=>$_POST['title'],
									'SupplierID' => $_POST['SupplierID'],
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
									
									'notes' => $_POST['notes'] );
						
						$this->MdlSupplier->modifySupplier($supplier);
							redirect('Supplier/Info/'.$_POST['SupplierID']);

			

	}
	
	
	
	
	public function deleteSupplier()
	{	
		$this->MdlSupplier->deleteSupplier($this->uri->segment(3));	
		redirect('Supplier');
	}

	
    public function Inputvalidation(){
    	
   		if($_POST['emails']!=$_POST['email'])
   			$this->form_validation->set_rules('email','Email Address','valid_email|callback_check_email');
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

    public function check_email($email){
           	
            $email_available = $this->MdlSupplier->check_if_email_exists($email);
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
           	$compare=strcasecmp($www,"www.");
            $compare2=strcasecmp($www2,"www..");
            $compare3=strcasecmp($url,"www. .com");
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
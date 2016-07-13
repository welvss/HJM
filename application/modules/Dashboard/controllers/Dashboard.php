<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
<<<<<<< bb35164ef9ad33ceed4168d26ac80ba0ef409553
		
		$this->load->model('Customer/MdlCustomer');
		$this->load->model('Inventory/MdlInventory');
		$this->load->model('Order/MdlInvoice');
		$this->load->model('Order/MdlOrder');
		$this->load->model('Supplier/MdlSupplier');
		$this->headercheck();
		
=======

		$this->load->module('Order');
		$this->load->module('Customer');
		$this->load->model('MdlOrder');
		$this->load->model('MdlCustomer');

>>>>>>> Modified for web hosting
		
	}
	
	public function footer()
	{
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
		$this->load->view('template/footer',$data);
	}

<<<<<<< bb35164ef9ad33ceed4168d26ac80ba0ef409553
	public function headercheck()
	{
		$data['active'] =1;
=======
	function headercheck($data)
	{	
		
		
>>>>>>> Modified for web hosting
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
<<<<<<< bb35164ef9ad33ceed4168d26ac80ba0ef409553
		{
=======
		{	
>>>>>>> Modified for web hosting
			$data['New'] = $this->MdlOrder->countOrder(array('status_id'=>1));
			$data['IP'] = $this->MdlOrder->countOrder(array('status_id'=>2));
			$data['Completed'] = $this->MdlOrder->countOrder(array('status_id'=>3));
			$data['Hold'] = $this->MdlOrder->countOrder(array('status_id'=>4));
<<<<<<< bb35164ef9ad33ceed4168d26ac80ba0ef409553

=======
>>>>>>> Modified for web hosting
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
		
}
?>
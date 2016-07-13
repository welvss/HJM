<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		
		
		$this->headercheck();
		
		
	}
	
	public function footer()
	{
		$data['script']='<script src="'.base_url().'app/js/app-semantic.js"></script>';
		$this->load->view('template/footer',$data);
	}

	public function headercheck()
	{
		$data['active'] =1;
		$data['dentist'] = $this->mdlCustomer->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));
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
			redirect('Home');
		}		
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Home');
    }

	public function index()
	{
		if($this->session->userdata('ps_id')==2 )
		{
			$data['New'] = $this->mdlOrder->countOrder(array('status_id'=>1));
			$data['IP'] = $this->mdlOrder->countOrder(array('status_id'=>2));
			$data['Completed'] = $this->mdlOrder->countOrder(array('status_id'=>3));
			$data['Hold'] = $this->mdlOrder->countOrder(array('status_id'=>4));

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
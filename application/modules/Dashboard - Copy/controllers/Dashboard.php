<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->view('template/frontheader');
		$this->is_logged_in();
		$this->load->model('mdlDashboard');
	}
		
	public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if( $this->session->userdata('is_logged_in') != true)
        {
            redirect('Home');
        }
        if( $this->session->userdata('is_logged_in') == true && $this->session->userdata('ps_id')!=1) 
        {
            redirect('Customer');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Home');
    } 
	public function index()
	{
		$this->EditCase();
	}
	
	public function EditCase()
	{
		
		$data['cases'] = $this->mdlDashboard->getOrder(array('DentistID'=>$this->session->userdata('DentistID')));
				
		$data['dentists'] = $this->mdlDashboard->getDentist(array('DentistID'=>$this->session->userdata('DentistID')));	
		$this->load->view('d-dashboard',$data);
		$this->load->view('template/frontfooter');
	}

	
	
	public function EditDentist()
	{
	
		if($this->input->post('submit'))
		{
			if($_POST['same'] != Null)
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
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['bstreet'],
									'shipcity' => $_POST['bcity'],
									'shipbrgy' => $_POST['bbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->modifyDentist($dentist))
							redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
						redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
			}
			else
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
									'website' => $_POST['website'],
									'bstreet' => $_POST['bstreet'],
									'bbrgy' => $_POST['bbrgy'],
									'bcity' => $_POST['bcity'],
									'shipstreet' => $_POST['shipstreet'],
									'shipcity' => $_POST['shipcity'],
									'shipbrgy' => $_POST['shipbrgy'],
									'notes' => $_POST['notes'] );
						
						if($this->mdlCustomer->modifyDentist($dentist))
						redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
					redirect('Customer/CustomerInfo/'.$_POST['DentistID']);
			}
		}
		else
		{
			$this->load->view('users/register');
		}

	}
	
	
	
	public function DeleteDentist()
	{	
		$this->mdlCustomer->deleteDentist($this->uri->segment(3));	
		redirect('Customer');
	}
	
	
}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->view('template/frontheader');
		$this->load->model('mdlHome');
		$this->is_logged_in();
	
	}
	public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(isset($is_logged_in) || $is_logged_in == true && $this->session->userdata('ps_id')==1)
        {
            redirect('Dashboard');
        }
        else
        if(isset($is_logged_in) || $is_logged_in == true && $this->session->userdata('ps_id')==2)
        {
            redirect('Customer');
        }
    }
	public function index(){
		
		
		$this->load->view('sign-in');
		$this->load->view('template/frontfooter');

	}
    public function redirection()
    {
        
        if($this->session->userdata('ps_id')==1)
            redirect('Dashboard');
        else
      
            redirect('Customer');
    }
	public function login_validation() 
	{
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username','Username','required|callback_validate_credentials');
            $this->form_validation->set_rules('password','Password','required|md5');
            if($this->form_validation->run($this))
            {
               
                $data = array(
                    'username' =>$this->input->post('username'),
                    'DentistID' =>$this->mdlHome->check_id(),
                    'ps_id' =>$this->mdlHome->checK_privilege(),
                    'is_logged_in'=> true
                );
                    
                $this->session->set_userdata($data);

                $this->redirection();
      
                               
            }
            else
            {
                
                $this->load->view('sign-in');
                $this->load->view('template/frontfooter');
            }
    }
        
    public function validate_credentials()
    {
        if($this->mdlHome->can_log_in())
        {
            
            return true;
                         
        }
        else
        {
            $this->form_validation->set_message('validate_credentials','Incorrect username/password!');
            return false;
        }
    }



    public function check_if_username_exists($requested_username)
    {
            $username_available = $this->mdlHome->check_if_username_exists($requested_username);
            if($username_available)
            {
                 return TRUE;
            }
            else
            {
                
                 return FALSE;
            }

    }
    public function check_if_email_exists($requested_email)
    {
       
            $email_available = $this->mdlHome->check_if_email_exists($requested_email);
            if($email_available)
            {
                 return TRUE;
            }
            else
            {
        
                 return FALSE;
            }

    }
}
?>
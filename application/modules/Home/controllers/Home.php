<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('MdlHome');
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this; 
        $this->logincheck();


	
	}
	public function logincheck()
    {
        
       
        if($this->session->userdata('is_logged_in') == TRUE) 
        {
            redirect('Dashboard');
        }       
    }
	public function index(){
		
		$this->load->view('template/frontheader');
		$this->load->view('sign-in');
		$this->load->view('template/frontfooter');

	}
   
	public function login_validation() 
	{
            
            $this->form_validation->set_rules('username','Username','required|callback_validate_credentials');
            $this->form_validation->set_rules('password','Password','required');
            
            if($this->form_validation->run($this))
            {
               
                $data = array(
                    'username' =>$this->input->post('username'),
                    'DentistID' =>$this->MdlHome->check_id($this->input->post('username')),
                    'ps_id' =>$this->MdlHome->checK_privilege($this->input->post('username')),
                    'is_logged_in'=> true
                );
                    
                $this->session->set_userdata($data);

                redirect('Dashboard');
      
                               
            }
            else
            {
                
                $this->load->view('sign-in');
                $this->load->view('template/frontfooter');
            }
    }
        
    public function validate_credentials()
    {
        if($this->MdlHome->can_log_in())
        {
            
            return true;
                         
        }
        else
        {
            $this->form_validation->set_message('validate_credentials','Incorrect username/password!');
            return false;
        }
    }



   
   
}
?>
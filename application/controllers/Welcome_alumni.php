<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_alumni extends CI_Controller {

	public function index()
	{
		$username = $this->input->post('email');
		$this->load->view('welcome_alumni');
	}

	public function Verifylogin() {

/*		$this->load->library('form_validation');
 		$this->load->model('user');

		   $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		 
		   if($this->form_validation->run() == FALSE)
		   {*/
		     //Field validation failed.  User redirected to login page
		     //$this->load->view('login_alumni');
		  // }
		  // else
		  // {
		     //Go to private area
		    // redirect('success_login', 'refresh');
		 //  }
/*		$this->load->helper(array('form', 'url'));
		$username = $this->input->post('email');
		$password = $this->input->post('password');*/

		$this->load->model('user');
		$this->user->validate();
		$query = $this->user->validate();
		if ($query)
		{
			$data = array
			    (
				'email' => $this->input->post('email'),
				'is_logged_in' => true
				);
		    /* $this->session->set_userdata($data);	
		    redirect('success_login', 'refresh');*/
			
			$this->load->view('success_login',$data);
		}


		else {
			$this->index();
		}  
	}

/*	 function check_database($password)
 {
   //Field validation succeeded.  
   $email = $this->input->post('email');
 
   //query the database
   $result = $this->user->login($email, $password);
 
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'alumni_id' => $row->id,
         'alumni_email' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid email or password');
     return false;
   }
 }
*/}
?>
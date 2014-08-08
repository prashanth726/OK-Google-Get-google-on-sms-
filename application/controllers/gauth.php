<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gauth extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('GPlusLibrary');
		$this->load->library('form_validation');
		$this->load->library('table');
	}
	
	function index(){
		if($this->gpluslibrary->is_auth() === TRUE){
			redirect('gauth/callback');
		}else{
			$this->gpluslibrary->auth();
		}
	}
	
	function profile(){
		if($this->gpluslibrary->is_auth() === TRUE){
			$session_id = $this->session->userdata('access_token');
			
			$result=json_decode($session_id);
			
			$rcc=$result->refresh_token;
			$acc =$result->access_token;
			//echo $acc;
			
			
			//$activities = $this->gpluslibrary->get_user_profile();
			//var_dump($activities);
			$url="https://www.googleapis.com/oauth2/v2/userinfo?alt=json&access_token=$acc";
			
			$curl = curl_init($url);
 
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);	
	$curlheader[0] = "Authorization: Bearer " . $acc;
	curl_setopt($curl, CURLOPT_HTTPHEADER, $curlheader);

	$json_response = curl_exec($curl);
	curl_close($curl);
	$responseObj = json_decode($json_response);
	//print_r($responseObj);
	            $uid = $responseObj->id;
				$name = $responseObj->name;
			    $email = $responseObj->email;
				$gender = $responseObj->gender;
				$this->load->model('insert');
				$data['check'] =$this->insert->check($uid,$name,$email,$gender,$acc,$rcc);
				//echo $identifier;
				$this->session->set_userdata('uid', $uid);
				$this->session->set_userdata('name', $name);
				$this->session->set_userdata('email', $email);
				$this->load->view('prifile');
				
		}else{
			
			$this->load->view('welcome_message',$data);
		}

			//echo "success";
			
	}
	
	function form(){
		if($this->gpluslibrary->is_auth() === TRUE){
		$this->load->database();
		$this->form_validation->set_rules('username', 'Username', 'callback_rolekey_exists['.$this->input->post('provider').']');
//$this->form_validation->set_rules('username', 'Username', 'callback_rolekey_exists');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('prifile');
			$this->form_validation->set_message('username', 'Error Message');
		}
		}
		else{
			
			$this->load->view('welcome_message');
		}
		
		
	}
	public function rolekey_exists($username,$provider)
	
	
         {
			 $uid =$provider;
			 
          $this->load->model('prashanth');
		  //$this->prashanth->role_exists($username);
		  $data['user']= $this->prashanth->role_exists($username,$provider,$uid);
		  $this->load->view('prifile', $data);
		 //$this->load->view('hauth/home',$name);
         }
	
	function list_activity(){
		$activities = $this->gpluslibrary->get_list_activities();
		var_dump($activities);
	}
	
	function activity($activity_id = ''){
		$activity = $this->gpluslibrary->get_activity('z13fc3zgwqfbu1dj204chnfr2tmjsti5ufw');
		var_dump($activity);
	}
	
	
	function callback(){
		if(isset($_GET['code'])){ 
			$this->gpluslibrary->request_access_token(); 
			redirect('gauth/profile');
		}else{
			redirect('gauth/profile');
		}
	}
	
	function logout(){
		$this->session->sess_destroy();
		$this->load->view('welcome_message',$data);
		
	}
}

/*
	End of gauth.php
	Location : .application/controllers/gauth.php
*/

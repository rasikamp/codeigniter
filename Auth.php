<?php
class Auth extends CI_Controller{
	public function register(){//this will show us register page
		$this->load->model('Auth_model');
		if($this->Auth_model->authorized() == true){
			redirect(base_url().'index.php/auth/dashboard');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','first_name','required');
		$this->form_validation->set_rules('last_name','last_name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('phone','phone','required');
		$this->form_validation->set_rules('password','password','required');
		 
		 if($this->form_validation->run() == FALSE){
		 	//here we will load our view
		 	$this->load->view('register');
		 }
		 else{
		 	$this->load->model('Auth_model');//user data entry
		 	$formArray = array();
		 	$formArray['first_name']=$this->input->post('first_name');
			 $formArray['last_name']=$this->input->post('last_name');
			 $formArray['email']=$this->input->post('email');
			 $formArray['phone']=$this->input->post('phone');
			 $formArray['password']=password_hash($this->input->post('password'), PASSWORD_BCRYPT);
			 $formArray['created_at']=date('Y-m-d H:i:s');
		//	 $formArray['updated_at']=$this->input->post('updated_at');
		 	$this->Auth_model->create($formArray);
		 	$this->session->set_flashdata('msg','Your account has been created successfully.');

			redirect(base_url().'index.php/Auth/register');

		 }		
	}

	 public function dashboard(){
		$this->load->model('Auth_model');
		/*if($this->Auth_model->authorized() == false){
			$this->session->set_flashdata('msg','You are not authorized to access');
			redirect(base_url().'index.php/auth/login');
		}*/
	 	$user=$this->session->userdata('user');
	 	$data['user']=$user;

		 $this->load->view('dashboard',$data);
	 }

	 public function login(){
		$this->load->model('Auth_model');
		 if($this->Auth_model->authorized() == true){
			 redirect(base_url().'index.php/auth/dashboard');
		 }
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');
		 $this->form_validation->set_rules('Password','Password', 'required');

		 if ($this->form_validation->run() == true){

		 	$email= $this->input->post('email');
			$user=$this->Auth_model->checkUser($email);

			if (!empty($user)){
				$password=$this->input->post('password');
				if (password_verify($password,$user['password']) == true){
					$sessArray['id']=$user['id'] ;
					$sessArray['first_name']=$user['first_name'] ;
					$sessArray['last_name']=$user['last_name'] ;
					$sessArray['email']=$user['email'] ;
					$this->session->set_userdata('user',$sessArray);
					redirect(base_url().'index.php/auth/dashboard');

				}
				else{
					$this->session->set_flashdata('msg','Either email or password is incorrect,please try again!');
					redirect(base_url().'index.php/auth/login');
				}
			}
			else{
				$this->session->set_flashdata('msg','Either email or password is incorrect,please try again!');
				redirect(base_url().'index.php/auth/login');
			}
		 }
		 else {
			 $this->load->view('login');
		 }
	 }

	 function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url().'index.php/auth/login');
	 }

}
?>

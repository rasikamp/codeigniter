<?php
	/**
	 * 
	 */
	class Auth_model extends CI_Model
	{
		
		public function create($formArray)//save user's records in database
		{
			$this->db->insert('users',$formArray);
		}

		public function checkUser($email){
			$this->db->where('email',$email);
			return $row= $this->db->get('users')->row_array();
		}
		function authorized(){
			$user=$this->session->userdata('user');
			if(!empty($user)){
				return true;
			}
			else
			{
				return false;
			}
		}
	}
?>

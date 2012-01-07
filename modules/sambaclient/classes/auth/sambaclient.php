<?php
 class Auth_Sambaclient extends Auth
 {
 	protected function _login($username, $password, $remember = FALSE)
 	{
 		if(strlen($username) < 1 || strlen($password) < 1)
 			return FALSE;
 		
 		$sambaclient = new Sambaclient;
 		
 		if($sambaclient->login($username, $password))
 		{
 			$this->complete_login($username);
 			
 			return TRUE;
 		}
 		else
 		{
 			return FALSE;
 		}
 	}
 	
 	public function password($username)
 	{
 		return null;
 	}
 	
 	public function check_password($password)
 	{
 		return false;
 	}
 }
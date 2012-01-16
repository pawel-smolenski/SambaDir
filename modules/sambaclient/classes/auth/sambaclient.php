<?php
 class Auth_Sambaclient extends Auth
 {
 	protected function _login($username, $password, $remember = FALSE)
 	{
 		if(strlen($username) < 1 || strlen($password) < 1)
 			return FALSE;
 		
 		
 		if(Sambaclient::login($username, $password))
 		{
 			$this->complete_login($username, $password);
 			
 			return TRUE;
 		}
 		else
 		{
 			return FALSE;
 		}
 	}
 	
 	protected function complete_login($username, $password=NULL)
 	{
 		// Regenerate session_id
 		$this->_session->regenerate();
 		
 		// Store username in session
 		$this->_session->set($this->_config['session_key'], $user);
 		
 		$this->_session->set($this->_config['session_key'].'password', $password);
 		
 		return TRUE;
 	}
 	
 	public function password($username=NULL)
 	{
 		return $this->_session->get($this->_config['session_key'].'password', NULL);
 	}
 	
 	public function check_password($password)
 	{
 		return false;
 	}
 }
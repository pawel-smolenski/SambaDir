<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Auth extends Controller_Template  {
	
	public function before()
	{
		parent::before();
		
		$this->title = "Logowanie";
		$this->styles[] = 'login';
		$this->plugins[] = 'jquery.validate';
		$this->scripts[] = 'auth';
	}
	
	public function action_index()
	{
		
		$referrer = Session::instance()->get_once('referrer');
		
		if($this->request->post('do_login'))
		{
			$username = $this->request->post('username');
			$password = $this->request->post('password');
			
			if(Auth::instance()->login($username, $password))
			{
				if(!$referrer)
				{
					$referrer = '/';
				}
				
				$this->request->redirect($referrer);
			}
			
		}

		Session::instance()->set('referrer', $referrer);
		$view = View::factory('login');
		$this->body = $view;
	}
	
	public function action_logout()
	{
		if(Auth::instance()->get_user())
		{
			Auth::instance()->logout(TRUE);
		}
		
		return $this->action_index();
	}
}
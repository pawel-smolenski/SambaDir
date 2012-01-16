<?php
class Controller_Authorized extends Controller_Template {
	
	protected $username;
	protected $passowrd;
	
	protected $client;
	
	public function before()
	{
		parent::before();
		if(!Auth::instance()->logged_in())
		{
			if($this->request->is_ajax())
			{
				throw new HTTP_Exception_401();
			}
			Session::instance()->set('referrer', $this->request->detect_uri());
			$this->request->redirect('auth');
		}
		
		$this->username = Auth::instance()->get_user();
		$this->password = Auth::instance()->password($this->username);
		
		$this->client = new Sambaclient($this->username, $this->password);
		
		$this->template->username = $this->username;
	}
	
	
}
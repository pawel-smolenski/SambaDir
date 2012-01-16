<?php
class Controller_Authorized extends Controller_Template {
	
	protected $user;
	
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
		
		$user = Auth::instance()->get_user();
		
		$this->template->user = $user;
	}
	
	
}
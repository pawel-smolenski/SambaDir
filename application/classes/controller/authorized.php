<?php
class Controller_Authorized extends Controller_Template {
	public function before()
	{
		parent::before();
		if(!Auth::instance()->logged_in())
		{
			Session::instance()->set('referrer', $this->request->detect_uri());
			$this->request->redirect('auth');
		}
	}
	
	
}
<?php

class Controller_Browser extends Controller_Authorized
{
	public function before()
	{
		parent::before();
		
		$this->styles[] = 'browser';
		$this->title = "Przeglądarka";
		
	}
	
	public function action_index()
	{
		$this->body = new View('browser');
	}
}
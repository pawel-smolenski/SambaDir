<?php

class Controller_Browser extends Controller_Authorized
{
	public function before()
	{
		parent::before();
		
		$this->styles[] = 'browser';
		$this->plugins[] = 'jquery.splitter';
		$this->plugins[] = 'jquery.dataTables';
		$this->scripts[] = 'browser';
		$this->title = "Przeglądarka";
		
	}
	
	public function action_index()
	{
		$this->body = new View('browser');
		$content = simplexml_load_file('samples/folders.xml');
		$this->body->treeEntries = $content;
	}
}
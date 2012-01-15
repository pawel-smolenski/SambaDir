<?php

class Controller_Browser extends Controller_Authorized
{
	public function before()
	{
		parent::before();
		
		$this->styles[] = 'browser';
		$this->plugins[] = 'jquery.splitter';
		$this->scripts[] = 'browser';
		
	}
	
	public function action_index()
	{
		$this->body = new View('browser');
		$content = Sambaclient::getEntriesFromFolder('/');
		$this->body->treeEntries = $content;
		$this->body->entries = $content;
	}
	
	public function action_getTree()
	{
		$this->auto_render = false;
		
		if(!$this->request->is_ajax())
		{
			throw new HTTP_Exception_404();
		}

		$content = Sambaclient::getEntriesFromFolder($this->request->post('path'));
		
		$this->response->body(json_encode($content));
		
	}
	
	public function action_getFiles()
	{
		$this->auto_render = false;
	
		if(!$this->request->is_ajax())
		{
			throw new HTTP_Exception_404();
		}
		
		$path = $this->request->post('path');
		
		$entries = Sambaclient::getEntriesFromFolder($path);
	
		$content = new View('filelist');
		$content->entries = $entries;
		$content->path = $path;
		
		$this->response->body($content->render());
	}
	
	public function action_downloadFile()
	{
		$path = $this->request->query('path');
		$this->response->send_file(Sambaclient::getFileToDownload($path));
	}
}
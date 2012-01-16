<?php

class Controller_Browser extends Controller_Authorized
{
	
	private $path;
	
	public function before()
	{
		parent::before();
		
		$this->styles[] = 'browser';
		$this->plugins[] = 'jquery.splitter';
		$this->scripts[] = 'browser';
		
		if($this->request->post('path') == NULL)
		{
			$this->path = Session::instance()->get('path', '');
		}
		else
		{
			$this->path = $this->request->post('path');
		}
		
	}
	
	public function action_index()
	{
		$this->body = new View('browser');
		$content = Sambaclient::getEntriesFromFolder('/');
		$this->body->treeEntries = $content;
		$this->body->entries = $content;
		$this->body->path = '';
	}
	
	public function action_getTree()
	{
		$this->auto_render = false;
		
		if(!$this->request->is_ajax())
		{
			throw new HTTP_Exception_404();
		}

		
		$entries = Sambaclient::getEntriesFromFolder($this->path);
		
		$content = new View('tree');
		$content->treeEntries = $entries;
		$content->path = $this->path;
		
		$this->response->body($content);
		
	}
	
	public function action_getFiles()
	{
	
		if(!$this->request->is_ajax())
		{
			throw new HTTP_Exception_404();
		}

		$this->auto_render = false;
		
		
		//Zapamiętuję ścieżkę do aktualnie przeglądanego folderu
		Session::instance()->bind('path', $this->path);
		
		$entries = Sambaclient::getEntriesFromFolder($this->path);
	
		$content = new View('filelist');
		$content->entries = $entries;
		$content->path = $this->path;
		
		$this->response->body($content->render());
	}
	
	public function action_getHistory()
	{
		if(!$this->request->is_ajax())
		{
			throw new HTTP_Exception_404();
		}
		
		$this->auto_render = false;
		
		$historyEntries = Sambaclient::getHistoryForFile($this->path);
		
		$content = new View('history');
		$content->path = $this->path;
		$content->historyEntries = $historyEntries;
		
		$this->response->body($content);
	}
	
	public function action_downloadFile()
	{
		$path = $this->request->query('path');
		$this->response->send_file(Sambaclient::getFileToDownload($path));
	}
}
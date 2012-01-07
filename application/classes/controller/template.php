<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template {
	public $template = 'layout';
	protected $body;
	protected $title;
	protected $styles = array('reset', 'plugins/jquery.treeview/jquery.treeview','layout');
	protected $plugins = array('jquery.center', 'jquery.treeview');
	protected $scripts = array('init');

	public function before(){
		parent::before();
		
		$this->template->bind('title', $this->title);
		$this->template->bind('styles', $this->styles);
		$this->template->bind('plugins', $this->plugins);
		$this->template->bind('scripts', $this->scripts);
		$this->template->bind('body', $this->body);
	}
	
	
}
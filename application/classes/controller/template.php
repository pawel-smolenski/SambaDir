<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template extends Kohana_Controller_Template {
	public $template = 'layout';
	protected $body;
	protected $title;
	protected $styles = array('reset','layout');
	protected $scripts = array('jquery-1.7.1.min', 'plugins/jquery.center', 'init');

	public function before(){
		parent::before();
		
		$this->template->bind('title', $this->title);
		$this->template->bind('styles', $this->styles);
		$this->template->bind('scripts', $this->scripts);
		$this->template->bind('body', $this->body);
	}
	
	
}
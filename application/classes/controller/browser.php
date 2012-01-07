<?php

class Controller_Browser extends Controller_Authorized
{
	public function action_index()
	{
		$this->response->body("Browser");
	}
}
<?php
class Sambaclient
{
	public function login($username, $password)
	{
		//TODO: Napisać logowanie
		if($username == "test" && $password == "test")
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
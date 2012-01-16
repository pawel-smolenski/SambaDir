<?php

class Sambaclient
{
	private $programName;
	private $username;
	private $password;
	
	public function Sambaclient()
	{
		
	}
	
	public static function login($username, $password)
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
	
	public function getEntriesFromFolder($path)
	{
		//TODO: Nadpisać
		return simplexml_load_file('samples/folders.xml');
	}
	
	public function getFileToDownload($path, $version=NULL)
	{
		//TODO: Nadpisać
		return 'samples/testDownload.txt';
	}
	
	public function getHistoryForFile($path)
	{
		//TODO: Nadpisać
		return simplexml_load_file('samples/history.xml');
	}
}
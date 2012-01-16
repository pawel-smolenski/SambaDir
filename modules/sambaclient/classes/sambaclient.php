<?php
class Sambaclient
{
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
	
	public static function getEntriesFromFolder($path)
	{
		//TODO: Nadpisać
		return simplexml_load_file('samples/folders.xml');
	}
	
	public static function getFileToDownload($path, $version=NULL)
	{
		//TODO: Nadpisać
		return 'samples/testDownload.txt';
	}
	
	public static function getHistoryForFile($path)
	{
		//TODO: Nadpisać
		return simplexml_load_file('samples/history.xml');
	}
}
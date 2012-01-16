<?php 

class Ajax
{
	public static function success($data)
	{
		$response['status'] = 'OK';
		$response['data'] = $data;
		
		return json_encode($response);
	}
	
	public static function error($data = NULL)
	{
		$response['status'] = 'ERROR';
		$response['data'] = $data;
	
		return json_encode($response);
	}
}
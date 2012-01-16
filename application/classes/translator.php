<?php

class Translator
{
	public static function action($code)
	{
		switch($code)
		{
			case 'CREATE':
				return "Utworzenie pliku";
			case 'UPDATE':
				return "Modyfikacja";
			case 'RENAME':
				return "Zmiana nazwy";
			case 'RESTORE':
				return "Przywrócenie poprzedniej wersji";
			case 'DELETE':
				return "Usunięcie pliku";
		}
	}
	
	public static function filesize($size)
	{
		$translatedSize = ($size/1024);
		
		if($translatedSize > 1024)
		{
			$translatedSize = $size/1024/1024;
			
			if($translatedSize > 1024)
			{
				$translatedSize = $size/1024/1024/1024;
				$unit ='GB';
			}
			else
			{
				$unit ='MB';
			}
		}
		else
		{
			$unit ='KB';
		}
		
		return round($translatedSize, 2).' '.$unit;
	}
}
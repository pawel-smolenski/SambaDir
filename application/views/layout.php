<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<title><?=isSet($title) ? $title.' - ':'';?>SambaDir</title>
		<?php 
			if($styles)
			{
				foreach($styles as $style)
				{
					echo HTML::style('styles/'.$style.'.css');
				}
			}
		?>
		
		<?php 
			if($scripts)
			{
				foreach($scripts as $script)
				{
					echo HTML::script('scripts/'.$script.'.js');
				}
			}
		?>
	</head>
	<body>
		<div id="main-wrapper"><?=$body?></div>
	</body>
</html>

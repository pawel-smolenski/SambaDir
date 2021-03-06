<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
	<head>
		<title><?=isSet($title) ? $title.' - ':'';?>SambaFolder</title>
		<?php 
			if(isSet($styles))
			{
				foreach($styles as $style)
				{
					echo HTML::style('styles/'.$style.'.css');
				}
			}
		?>
		

		<?php 
			echo HTML::script('scripts/jquery-1.7.1.min');
			
			if(isSet($plugins))
			{
				foreach($plugins as $plugin)
				{
					echo HTML::script('scripts/plugins/'.$plugin.'.js');
				}
			}
		?>	
		<?php 
			if(isSet($scripts))
			{
				foreach($scripts as $script)
				{
					echo HTML::script('scripts/'.$script.'.js');
				}
			}
		?>
	</head>
	<body>
		<div id="main-wrapper">
		<div id="header">
			<h1>Samba<span>Folder</span></h1>
			<?if(isSet($username)):?>
			<div id="top-menu">
				<span class="logged-username"><?=$username?></span><a href="/logout" class="logout action-button" title="wyloguj"></a>
			</div>
			<?endif;?>
		</div>
			
		<?=$body?>
		</div>
	</body>
</html>

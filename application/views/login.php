<?=html::style('styles/login');?>
<div class="rounded-box">
	<h1>SambaDir</h1>
	<form method="POST">
		<label for="username">Login</label><input type="text" name="username" /> 
		<label for="password">Hasło</label><input type="password" name="password" /> 
		<input type="submit" name="do_login" value="Zaloguj"/>
	</form>
</div>

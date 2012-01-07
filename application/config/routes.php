<?php
Route::set('logout', 'logout')
->defaults(array(
		'controller' => 'auth',
		'action'     => 'logout',
));
Route::set('auth', 'auth(/<action>)')
->defaults(array(
		'controller' => 'auth',
		'action'     => 'index',
));
Route::set('default', '(<controller>(/<action>(/<id>)))')
->defaults(array(
		'controller' => 'browser',
		'action'     => 'index',
));
<?php
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
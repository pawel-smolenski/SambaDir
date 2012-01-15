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
Route::set('ajax/getTree', 'ajax/getTree')
->defaults(array(
		'controller' => 'browser',
		'action'     => 'getTree',
));

Route::set('ajax/getFiles', 'ajax/getFiles')
->defaults(array(
		'controller' => 'browser',
		'action'     => 'getFiles',
));

Route::set('downloadFile', 'downloadFile')
->defaults(array(
		'controller' => 'browser',
		'action'     => 'downloadFile',
));

Route::set('default', '(<controller>(/<action>(/<id>)))')
->defaults(array(
		'controller' => 'browser',
		'action'     => 'index',
));
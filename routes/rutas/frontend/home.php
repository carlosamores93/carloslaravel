<?php

	Route::get('/', 'Frontend\HomeController@index');

	//Route::get('/about', 'Frontend\AboutController@index')->name('about');
	Route::get('/compra-venta-bragas-usadas.html', 'Frontend\AboutController@bragas')->name('bragas');
	Route::get('/contacto', 'Frontend\ContactController@index')->name('contact');
	Route::post('/message', 'Frontend\ContactController@send_message')->name('contact.send.message');

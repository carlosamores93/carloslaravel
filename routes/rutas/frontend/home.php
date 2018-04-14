<?php

	Route::get('/', 'Frontend\HomeController@index');

	Route::get('/contacto', 'Frontend\ContactController@index')->name('contact');
	Route::post('/message', 'Frontend\ContactController@send_message')->name('contact.send.message');

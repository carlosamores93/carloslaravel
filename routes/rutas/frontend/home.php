<?php

	Route::get('/', 'Frontend\HomeController@index');
	//Route::get('/about', 'Frontend\AboutController@index')->name('about');
	//Route::get('/compra-venta-bragas-usadas.html', 'Frontend\AboutController@bragas')->name('bragas');
	Route::get('/generar-numeros-al-azar-de-la-primitiva.html', 'Frontend\AboutController@primitiva')->name('primitiva');
	Route::get('/contacto', 'Frontend\ContactController@index')->name('contact');
	Route::post('/mensaje-enviado', 'Frontend\ContactController@send_message')->name('contact.send.message');

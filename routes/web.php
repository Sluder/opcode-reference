<?php

Route::get('/', 'PageController@index')->name('index');
Route::get('/instructions', 'PageController@instructions')->name('instructions');

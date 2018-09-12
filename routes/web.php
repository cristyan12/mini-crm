<?php

Route::view('/', 'welcome');

Route::get('/users', 'UsersController')->name('users');

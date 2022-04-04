<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/request', function () {
    return view('request');
})->name('request');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');

Route::get('/aut', function () {
    return view('aut');
})->name('aut');

Route::get('/info/all',
    'InfoController@allData'
)->name('info-data');

Route::post('/info/submit',
    'InfoController@submit'
)->name('info-form');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');

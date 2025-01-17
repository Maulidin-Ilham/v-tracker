<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('pages.admin.index');
});

Route::get('/approver', function () {
    return view('pages.approver.index');
});

Route::get('/driver', function () {
    return view('pages.driver.index');
});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/edit-account', function () {
    return view('pages.edit-account');
});

Route::get('/generate-reports', function () {
    return view('pages.generate-reports');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/maintenance', function () {
    return view('pages.maintenance');
});

Route::get('/admin-print-queue', function () {
    return view('pages.admin-print-queue');
});

Route::get('/support', function () {
    return view('pages.support');
});

Route::get('/ticket', function () {
    return view('pages.ticket');
});

Route::get('/view-accounts', function () {
    return view('pages.view-accounts');
});

Route::get('/view-transactions', function () {
    return view('pages.view-transactions');
});

Route::get('/create-print-job', function () {
    return view('pages.create-print-job');
});

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

Route::get('/', function () {
    return view('landing.page.index');
});

Route::get('/tk-kristen-pirngadi-layanan', function () {
    return view('landing.page.service');
});

Route::get('/tk-kristen-pirngadi-about', function () {
    return view('landing.page.about');
});

Route::get('/tk-kristen-pirngadi-spp', function () {
    return view('landing.page.visi_misi');
});

Route::get('/ybppk-pirngadi-value', function () {
    return view('landing.page.value');
});

Route::get('/ybppk-pirngadi-pengurus', function () {
    return view('landing.page.pengurusyayasan');
});

Route::get('/ybppk-pirngadi-manajerial', function () {
    return view('landing.page.manajerial');
});
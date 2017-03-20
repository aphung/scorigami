<?php

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
    $grid = DB::table('grid')->get();
    return view('scorigami', compact('grid'));
});

Route::get('test', function () {
    return view('test');
});

Route::get('table', function () {
    $grid = DB::table('grid')->get();
    return view('table', compact('grid'));
});

Route::get('bootstrap', function () {
	$grid = DB::table('grid')->get();
	return view('bootstrap', compact('grid'));
});

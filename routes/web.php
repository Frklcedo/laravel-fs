<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'name' => 'Franklin'
    ]);
});

Route::get('/hello', function() {
    return 'Hello';
})->name('hello');
Route::get('/greet/{name}', function($name) {
    return "Hello, $name!";
});

Route::get('/hallo', function(){
    return redirect()->route('hello');
});

Route::fallback(function(){
    return 'Still got somewhere';
});

// GET
// POST
// PUT
// DELETE

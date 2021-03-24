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
    return 'welcome';
});

// EXO 1
Route::get('/bonjour', function () {
    return 'Bonjour chers utilisateurs';
});

Route::get('/bienvenue', function(){
    return 'Bienvenue sur mon site';
});

Route::get('/bonjour/1', function () {
    $coucou = "coucou";
    return $coucou;
});

Route::get('/hello/{id}', function ($id) {
    return "hello " . $id;
});

// EXO 2
Route::get('/about', function () {
    return view('/about');
});

Route::get('/welcome', function () {
    return view('/welcome');
});

// EXO 3 
Route::get('/about', function (){
    $prenom = "louise";
    $nom = "peiffer";
    return view('about', compact('nom','prenom'));
});
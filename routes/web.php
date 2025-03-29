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
    return view('welcome');
});

Route::get('/olamundo', function () {
    return "ola mundo";
});

Route::get('/faleconosco/{id?}',function ($id = null){ 
    return "recebi o valor = $id"; 
});

Route::get('/pagina1',function (){ 
    return view("pags.pagina1"); 
});

Route::get('/pagina2',function (){ 
    return view("pags.pagina2"); 
});

Route::get('/pagina3',function (){ 
    return  view("pags.pagina3"); 
});

Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoControle@index']);



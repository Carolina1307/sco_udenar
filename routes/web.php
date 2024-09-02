<?php

use App\Http\Controllers\primerControlador;
use App\Http\Controllers\SegundoControlador;
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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return ('Bienvenidos');
});

Route::get('/test', function () {
    return view ('test');
});

Route::get('/crudy', function () {

    $age = 30;
    $data = ['name' => 'Carolina','age' => $age];

    return view ('crud/index',$data);
})->name('crud');

Route::get('/contact', function () {
    return view ('contact');
});

Route::get('/contact2', function () {

    $num = 456;
    return view ('contact2',['name'=>'Carolina','num'=>$num]);
})->name('contact2');*/

Route::get('/', function () {
    return view ('welcome');
});
Route::get('test', [primerControlador::class,'index']);
Route::get('test2', [\App\Http\Controllers\SegundoControlador::class,'index']);

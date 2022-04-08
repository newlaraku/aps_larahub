<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterTravelController;

Auth::routes();


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
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');


// Route role conditional
Route::get('/admin', 'AdminController@index');
Route::get('/user','UserController@index');

Route::get('/register_travel','RegisterTravelController@index');
Route::post('/insert_usertravel','RegisterTravelController@store');



//traking angkutan

Route::get('/traking angkutan pelajar dan umum gratis', function(){
    return view('traking_angkutan.index');
});


//trayek dishub
Route::get('/trayek dishub banyuwangi','TrayekDishubController@index');
Route::get('/tambah_trayek','TrayekDishubController@create');
Route::post('/insert_trayek','TrayekDishubController@insert');

Route::get('/angkutan pelajar dan umum gratis/{id}', 'TrayekDishubController@show');



//route penumpangs
Route::post('insert_penumpang','PenumpangController@insert');
Route::get('sukses','PenumpangController@succes');

Route::get('/data penumpang angkutan pelajar gratis','PenumpangController@index');


//url untuk membuat qrcode url kendaraannya
Route::get('/create_qrcode', [DataController::class, 'index']);
Route::post('create_qrcode', [DataController::class, 'store'])->name('store');
Route::get('/qrcode/{id}', [DataController::class, 'generate'])->name('generate');



// scan qrcode angkutan
Route::get('/scan qrcode traking angkutan pelajar gratis dinas perhubungan', function(){
    return view('traking_angkutan.scan');
});

//hallo test comiit
Route::get('/test comit', function(){
    return view('traking_angkutan.scan');
});

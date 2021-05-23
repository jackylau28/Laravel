<?php

use App\Http\Controllers\PageControler;
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
    return view('welcome');
});


/*
Route::get("/pk",function(){
    $version = $_GET['version'];
    return view('pk',['version'=>$version]);
});
*/

Route::get('pk',[PageControler::class,'pb']);
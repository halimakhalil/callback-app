<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Auth;

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
    $shop = Auth::user();
    // $isalready_exist=$shop->id;
    // if(isset($isalready_exist)){
    // $table_data = DB::table('query')->get();
    // return view('welcome',compact('table_data'));
    // }
    $table_data = DB::table('query')->get();
    return view('welcome',compact('table_data'));
})->name('home');


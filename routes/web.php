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
    return View::make('pages.home');
});
Route::get('/guest', 'GuestController@index');

Route::get('/login', 'GuestController@login');
Route::post('/login/action', 'GuestController@loginAction');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/sign-out', 'DashboardController@signOut');

Route::get('/register', 'GuestController@register');
Route::post('/registerPost', 'GuestController@registerPost');

Route::resource('/dashboard/products', 'ProductController');
Route::resource('/dashboard/category', 'CategoryController');

Route::get('/dashboard/history', 'DashboardController@History');
Route::get('/api/dashboard/laporan-pendapatan','ApiDashboardController@getLaporanPendapatan');
Route::post('/dashboard/history/proses/','DashboardController@HistoryMenu');
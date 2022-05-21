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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');



Route::group(['middleware' => ['auth']], function(){
  
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
  Route::get('/dashboard/alat-gym', 'DashboardController@alat_gym')->name('dashboard-alat-gym');
  Route::get('/dashboard/e-member', 'DashboardController@e_member')->name('dashboard-e-member');
  Route::post('/dashboard/e-member/{redirect}', 'DashboardController@create_emember')->name('emember-create');


  Route::get('/dashboard/hitung-kalori', 'DashboardController@hitung_kalori')->name('dashboard-hitung-kalori');
  Route::post('/dashboard/hitung-kalori', 'DashboardController@hitung')->name('hitung');
  Route::get('/dashboard/pembayaran', 'DashboardController@pembayaran')->name('dashboard-pembayaran');
  Route::get('/dashboard/cetak-member', 'DashboardController@cetak_e_member')->name('dashboard-cetak-e-member');
  Route::get('cetak-E-member', 'DashboardController@cetakCard')->name('cetak-card');
}); 


Route::prefix('admin')
->namespace('Admin')
->middleware('auth', 'admin')
->group(function() {
  route::get('/', 'DashboardController@index')->name('dashboard-admin');
  route::resource('member', 'MemberController');  
  route::resource('pembayaran', 'PembayaranController'); 
  Route::resource('laporan', 'LaporanController');  
  Route::resource('laporan-nonaktif', 'LaporanMemberNonaktifController');  
  Route::resource('laporan-pembayaran', 'LaporanPembayaranController');

  Route::get('cetak-laporan', 'LaporanController@showMember')
    ->name('cetak-member');
  Route::get('cetak-laporan-nonaktif', 'LaporanMemberNonaktifController@showNonaktif')
    ->name('cetak-member-nonaktif');
  Route::post('cetak-laporan-pembayaran', 'LaporanPembayaranController@showPembayaran')
    ->name('cetak-pembayaran');

  // Route::get('', 'LaporanController@cetak')->name('cetak-member');
  // Route::get('', 'LaporanMemberNonaktifController@cetak')->name('cetak-member-nonaktif');
  // Route::get('', 'LaporanPembayaranController@cetak')->name('cetak-pembayaran');
});



Auth::routes();
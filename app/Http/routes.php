<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function() {
    return redirect('auth/login');
});

Route::get('home', ['middleware' => 'auth', function() {
    return view('home');
}]);

Route::controller('auth', 'Auth\AuthController');
Route::controller('user', 'UserController');
Route::controller('supplier', 'SupplierController');
Route::controller('warna', 'WarnaController');
Route::controller('produk', 'ProdukController');

Route::controller('pembelian', 'PembelianController');
Route::controller('penjualan', 'PenjualanController');
Route::controller('laporan', 'LaporanController');
<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminInputJastipController;
use App\Http\Controllers\AdminTablesJastipController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DaftarJastipController;
use App\Http\Controllers\DaftarPenjualController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MakananViewController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\PasarViewController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PenjualViewController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TestimoniViewController;
use App\Http\Controllers\ViewAboutController;
use App\Http\Controllers\ViewContactController;
use App\Http\Controllers\ViewHomeController;
use App\Http\Controllers\ViewMenuController;
use App\Http\Controllers\ViewPasarController;
use App\Http\Controllers\ViewJastipController;
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

// =============== Home View ===============

Route::resource('/', ViewHomeController::class);

Route::resource('home', ViewHomeController::class);

Route::resource('tentang', ViewAboutController::class);

Route::post('input-testimoni-home', [TestimoniViewController::class, 'inputTestimoni'])->name('tetimoni.home')->middleware('throttle:testi');

Route::resource('njajan', ViewMenuController::class);

Route::get('kategori/{slug}', [CategoryController::class, 'index'])->name('njajan.slug');

Route::get('search/cari', [CategoryController::class, 'search']);

Route::resource('pasar', ViewPasarController::class);

Route::resource('kontak', ViewContactController::class);

Route::resource('jastip', ViewJastipController::class);

Route::resource('daftarjastip', DaftarJastipController::class);

Route::post('terima-jastip/{id}', [DaftarJastipController::class, 'terimaJastip']);

Route::resource('daftarpenjual', DaftarPenjualController::class);

Route::resource('notification', NotificationController::class);



// =============== Login & Register ===============

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// =============== Admin View ===============

Route::post('home-input-penjual', [PenjualController::class, 'homePenjual'])->name('home.penjual');

// =============== Pages Admin

Route::group(['middleware' => ['auth']], function () {

    // =============== Page Admin

    Route::get('usersprofile', function () {
        return view('admin/users-profile');
    });

    // =============== Page Admin

    Route::resource('indexadmin', IndexAdminController::class);

    Route::resource('pages-home', HomeController::class);

    Route::resource('pages-about', AboutController::class);

    Route::resource('pages-menu-makanan', MakananViewController::class);

    Route::resource('pages-pasar', PasarViewController::class);

    Route::resource('pages-contact', ContactController::class);

    // =============== Input Admin

    Route::resource('input-penjual', PenjualController::class);

    Route::resource('input-jastip', AdminInputJastipController::class);

    Route::resource('input-pasar', PasarController::class);

    Route::resource('input-produk-makanan', MakananController::class);

    // Route::resource('input-testimoni', TestimoniController::class);

    // =============== Table Admin

    Route::resource('tables-penjual', PenjualViewController::class);

    Route::post('terima-penjual/{id}', [PenjualViewController::class, 'terimaPenjual'])->name('terima.penjual');

    Route::resource('tables-jastip', AdminTablesJastipController::class);

    Route::resource('tables-testimoni', TestimoniViewController::class);
});

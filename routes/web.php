<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MakananViewController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\MinumanViewController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\PasarViewController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PenjualViewController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\TestimoniViewController;
use App\Http\Controllers\UpdateMakananController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Makanan;
use App\Models\Minuman;
use App\Models\Pasar;
use App\Models\Penjual;
use App\Models\Testimoni;
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

Route::get('/', function () {
    $homes = Home::all();
    return view('index', compact('homes'));
});

Route::get('index', function () {
    $homes = Home::all();
    return view('index', compact('homes'));
});

Route::get('about', function () {
    $data_abouts = About::all();
    $data_testimonis = Testimoni::all();
    $hitungpasars = Pasar::count();
    $hitungmakanans = Makanan::count();
    $hitungminumans = Minuman::count();
    $hitungpenjuals = Penjual::count();
    return view('about',compact('data_abouts','data_testimonis','hitungpasars','hitungmakanans','hitungminumans','hitungpenjuals'));
});

Route::get('contact', function () {
    $datas = Contact::all();
    return view('contact', compact('datas'));
});

Route::get('menu', function () {
    $data_makanans = Makanan::all();
    $data_minumans = Minuman::all();
    return view('menu',compact('data_makanans','data_minumans'));
});

Route::get('pasar', function () {
    $data_pasars = Pasar::all();
    return view('pasar',compact('data_pasars'));
});


// =============== Login & Register ===============

Route::get('login',[LoginController::class,'login'])->name('login');
Route::post('loginproses',[LoginController::class,'loginproses'])->name('loginproses');

Route::get('register',[LoginController::class,'register'])->name('register');
Route::post('registeruser',[LoginController::class,'registeruser'])->name('registeruser');

Route::get('logout',[LoginController::class,'logout'])->name('logout');

// =============== Admin View ===============

// =============== Pages Admin

Route::group(['middleware'=>['auth']], function(){

    // =============== Page Admin

    Route::get('usersprofile', function () {
        return view('admin/users-profile');
    });

    // =============== Page Admin

    Route::get('indexadmin', function () {
        return view('admin/index');
    });

    Route::resource('pages-home', HomeController::class);
    
    Route::resource('pages-about', AboutController::class);

    Route::resource('pages-menu-makanan', MakananViewController::class);

    Route::resource('pages-menu-minuman', MinumanViewController::class);
    
    Route::resource('pages-pasar', PasarViewController::class);

    Route::resource('pages-contact', ContactController::class);

    // =============== Input Admin
    
    Route::resource('input-penjual', PenjualController::class);

    Route::resource('input-pasar', PasarController::class);

    Route::resource('input-produk-makanan', MakananController::class);

    Route::resource('input-produk-minuman', MinumanController::class);
    
    Route::resource('input-testimoni', TestimoniController::class);
    
    // =============== Table Admin
    
    Route::resource('tables-penjual', PenjualViewController::class);

    Route::resource('tables-testimoni', TestimoniViewController::class);

});


<?php

use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CriteriaRatingController;
use App\Http\Controllers\CriteriaWeightController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NormalizationController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\SpkController;
use App\Http\Controllers\SupplierController;
use App\Models\Supplier;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Models\Obat;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('home', [HomeController::class, 'index']);

Route::get('home', function () {
    $jumlahobat = Obat ::count ();
    $jumlahsupplier = Supplier ::count ();
    return view('home', compact('jumlahobat', 'jumlahsupplier'));
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/obat', [ObatController::class, 'obat'])->name('obat');

Route::get('/tambahobat', [ObatController::class, 'tambahobat'])->name('tambahobat');

Route::get('/insertobat', [ObatController::class, 'insertobat'])->name('insertobat');

Route::get('/tampilkandata/{id}', [ObatController::class, 'tampilkandata'])->name('tampilkandata');
Route::get('/updatedata/{id}', [ObatController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [ObatController::class, 'delete'])->name('delete');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/supplier', [SupplierController::class, 'supplier'])->name('supplier');
Route::get('/tambahsupplier', [SupplierController::class, 'tambahsupplier'])->name('tambahsupplier');

Route::get('/insertsupplier', [SupplierController::class, 'insertsupplier'])->name('insertsupplier');
Route::get('/tampilanedit/{id}', [SupplierController::class, 'tampilanedit'])->name('tampilanedit');
Route::get('/updatesupplier/{id}', [SupplierController::class, 'updatesupplier'])->name('updatesupplier');
Route::get('/deletesupplier/{id}', [SupplierController::class, 'deletesupplier'])->name('deletesupplier');

Route::get('/spk', [SpkController::class, 'spk'])->name('spk');


Route::resources([
'alternatives' => AlternativeController::class,
'criteriaratings' => CriteriaRatingController::class,
'criteriaweights' => CriteriaWeightController::class
]);

Route::get('home', [HomeController::class, 'index']);

Route::get('decision', [DecisionController::class, 'index']);

Route::get('normalization', [NormalizationController::class, 'index']);

Route::get('rank', [RankController::class, 'index']);

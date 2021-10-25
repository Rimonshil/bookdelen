<?php

use App\Http\Controllers\Controller\FrontendController;
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
Route::get('/book', function () {
    return view('frontend.b');
});

//frontendcontroller
Route::get('/',[FrontendController::class,'welcome'])->name('welcome');

Route::get('/bookcorner',[FrontendController::class,'bookcorner'])->name('bookcorner');
Route::get('/bookadd',[FrontendController::class,'bookadd'])->name('bookadd');

Route::get('/studenthub',[FrontendController::class,'studenthub'])->name('studenthub');
Route::get('/postadd',[FrontendController::class,'postadd'])->name('postadd');



Route::get('/signin',[FrontendController::class,'signin'])->name('signin');
Route::get('/registration',[FrontendController::class,'registration'])->name('registration');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

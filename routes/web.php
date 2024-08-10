<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\ExpenseController;
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

Route::get('/', [AuthenticationController::class,'index'])->middleware('userlogin');
Route::get('/register', [AuthenticationController::class,'register'])->middleware('userlogin');
Route::post('/registeration', [AuthenticationController::class,'registeration'])->name("user.register");
Route::post('/login', [AuthenticationController::class,'login'])->name("user.login");
Route::get('/logout', [AuthenticationController::class,'logout'])->name("user.logout");
Route::get('/dashboard', [Dashboard::class,'dashboard'])->middleware('usernotlogin');
Route::get('/categories', [CategoryController::class,'categories'])->name("categories")->middleware('usernotlogin');
Route::get('/create-categories', [CategoryController::class,'createCategory'])->middleware('usernotlogin');
Route::get('/edit-categories/{id}', [CategoryController::class,'edit'])->middleware('usernotlogin');
Route::post('/store-categories', [CategoryController::class,'storeCategory'])->name("store.category");
Route::post('/update-categories', [CategoryController::class,'update'])->name("update.category");
Route::get('/delete-categories/{id}', [CategoryController::class,'deleteCategory'])->middleware('usernotlogin');
Route::get('/budget', [ExpenseController::class,'index'])->name('budget')->middleware('usernotlogin');
Route::get('/create-budget', [ExpenseController::class,'create'])->middleware('usernotlogin');
Route::post('/store-budget', [ExpenseController::class,'store'])->name("store.budget");
Route::get('/delete-budget/{id}', [ExpenseController::class,'delete'])->middleware('usernotlogin');
Route::get('/edit-budget/{id}', [ExpenseController::class,'edit'])->middleware('usernotlogin');
Route::post('/update-budget', [ExpenseController::class,'update'])->name("update.budget");


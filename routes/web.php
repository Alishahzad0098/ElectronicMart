<?php

use App\Http\Controllers\Usercontroller;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarouselController;

Route::get("/form",[ProductController::class,"create"]);
Route::get("/table" , [ProductController::class , "table"])->name("table.product");
Route::post("/store" , [ProductController::class , "store"])->name("store.product");
Route::get('/products/{id}', [ProductController::class, 'delete'])->name('delete.product');
Route::get("/home" , [ProductController::class , "show"])->name('home');

Route::get("/carform",[CarouselController::class,"create"]);
Route::get("/cartable" , [CarouselController::class , "table"])->name("table.car");
Route::post("/carstore" , [CarouselController::class , "store"])->name("store.car");

Route::get('/cardelete/{id}', [CarouselController::class, 'delete'])->name('delete.car');
   
Route::get("/register" , [Usercontroller::class , "view"])->name('view');
Route::get("/view" , [Usercontroller::class , "page"]);
Route::post("/registersave" , [Usercontroller::class , "register"])->name('register');
Route::get("/login" , [Usercontroller::class , "loginpage"])->name('loginpage');
Route::post("/loginsave", [Usercontroller::class, "login"])->name('login');
Route::get("/dashboard", [Usercontroller::class, "dashboardpage"])->name('dashboard');
Route::get("/logout", [Usercontroller::class, "logout"])->name('logout');
Route::get("/authtable", [Usercontroller::class, "table"])->name('authtable');
Route::get('/edituser/{id}', [Usercontroller::class, "edituser"])->name('edit.user');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update.user');



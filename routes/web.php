<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CarouselController;

Route::get("/form",[ProductController::class,"create"]);
Route::get("/table" , [ProductController::class , "table"])->name("table.product");
Route::post("/store" , [ProductController::class , "store"])->name("store.product");
Route::get('/products/{id}', [ProductController::class, 'delete'])->name('delete.product');
Route::get("/home" , [ProductController::class , "show"]);

Route::get("/carform",[CarouselController::class,"create"]);
Route::get("/cartable" , [CarouselController::class , "table"])->name("table.car");
Route::post("/carstore" , [CarouselController::class , "store"])->name("store.car");
Route::get('/cardelete/{id}', [CarouselController::class, 'delete'])->name('delete.car');
    
<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panel/index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('categories', function () {
    return view('panel.category');
});
Route::post("categories",[CategoryController::class,"AddCategory"]);
Route::get("detail",[CategoryController::class,"AllCategories"]);
Route::get("update.{id}",[CategoryController::class,"updateCategories"]);
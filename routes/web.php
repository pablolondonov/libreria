<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;

// Route::get('/', function () {
//     return view('front_page.index');
// });

Route::get('/',[TaskController::class,'index']);

Route::post('/',[TaskController::class,'store']);

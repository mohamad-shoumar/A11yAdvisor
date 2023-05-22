<?php
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/form', [PagesController::class,'form']);
Route::get('/', [PagesController::class,'landing']);
Route::get('/guide', [PagesController::class,'guide']);

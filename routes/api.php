<?php

use App\Http\Controllers\TacGiaController;
use Illuminate\Support\Facades\Route;

Route::get('/tac_gia', [TacGiaController::class,'index']);
Route::get('/tac_gia/{id}', [TacGiaController::class,'show']);
Route::post('/tac_gia', [TacGiaController::class,'store']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/',[EmployeeController::class,'show_index_page'])->name('show_index');

Route::post('/store',[EmployeeController::class,'add_new_user'])->name('add_user');
Route::post('/update/{id}',[EmployeeController::class,'UpdateUser'])->name('update.user');

Route::get('/delete/{id}',[EmployeeController::class,'delete_user'])->name('delete.user');
<?php

use App\Http\Controllers\crudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/','crud.home')->name('home.route');
Route::view('/login','crud.login')->name('login.route');
Route::get('/OurTeamMembers',[crudController::class,'members'])->name('member.route');
Route::get('/modify/{id}',[crudController::class,'edit'])->name('updateInfo.route');



Route::post('/submitted',[crudController::class,'submit'])->name('form.handle');

Route::put('update/{id}',[crudController::class,'updated'])->name('update.route');

Route::delete('/delete/{id}',[crudController::class, 'destroy'])->name('delete.route');


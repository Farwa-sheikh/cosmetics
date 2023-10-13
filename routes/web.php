<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
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



route::get('/' ,[usercontroller::class, 'index'])->name("user.index");
route::get('/makeup' ,[usercontroller::class, 'makeup'])->name("user.makeup");
route::get('/jewellery' ,[usercontroller::class, 'jewellery'])->name("user.jewellery");
route::get('/contact' ,[usercontroller::class, 'contact'])->name("user.contact");
route::get('/sign_in' ,[usercontroller::class, 'sign_in'])->name("user.sign_in");
route::get('/sign_up' ,[usercontroller::class, 'sign_up'])->name("user.sign_up");
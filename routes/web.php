<?php

use App\Http\Controllers\groups;
use App\Http\Controllers\GroupController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/groups',[GroupController::class,'allGroups']) ;
Route::get('/groups/create',[GroupController::class,'showCreateForm']) ;
Route::post('/groups/create',[GroupController::class,'createGroup']) ;

Route::delete('/groups/delete/{id}',[GroupController::class,'deleteGroup']) ;

Route::get('/groups/edit/{id}',[GroupController::class,'showEditForm']) ;
Route::put('/groups/edit/{id}',[GroupController::class,'modifyGroup']) ;

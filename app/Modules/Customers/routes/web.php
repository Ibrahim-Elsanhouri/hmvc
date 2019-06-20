<?php

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

Route::namespace('Customers\Http\Controllers')->middleware('customer')->group(function(){
Route::prefix(buildPrefix('customers','backend'))->namespace('backend')->group(function(){
    Route::get('all' , 'Customer@index'); 
}); 
    Route::prefix(buildPrefix('customers','frontend'))->namespace('frontend')->group(function(){
        Route::get('all' , 'Customer@index'); 

}); 
}); 
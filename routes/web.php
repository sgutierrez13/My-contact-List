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
Route::group(["prefix"=>"Contacts"],function(){
	Route::get('Start',"ControllerContact@start")->name("start");
	Route::get('Create',"ControllerContact@createContact")->name("add_contact");
	Route::post('Create',"ControllerContact@create")->name("create");
	Route::get('Delete',"ControllerContact@deleteContact")->name("delete_contact");
	Route::post('Delete',"ControllerContact@delete")->name("delete");
	Route::get('Update',"ControllerContact@updateContact")->name("update_contact");
	Route::post('Update',"ControllerContact@update1")->name("update1");
	Route::post('Update/{id}',"ControllerContact@update2")->name("update2");
});
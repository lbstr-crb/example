<?php
Route::group(['namespace'=>'Lbstr\Example\Http\Controllers', 'prefix' => 'example'], function() {

   Route::get('/','ExampleController@index');

});
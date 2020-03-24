<?php




Route::get('/','Taskcontroller@index');
Route::get('task/{id}','Taskcontroller@show');
Route::post('store','Taskcontroller@store');

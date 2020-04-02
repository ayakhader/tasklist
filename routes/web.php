<?php




Route::get('/','Taskcontroller@index');
Route::get('task/{id}','Taskcontroller@show');
Route::post('store','Taskcontroller@store');
Route::delete('delete/{id}','Taskcontroller@destroy');
Route::post('update/{id}', 'TaskController@update');

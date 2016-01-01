<?php

Route::get('/','SettingController@index');
Route::get('/dream/setting1','SettingController@index1');
Route::get('/dream/setting2','SettingController@index2');
Route::get('/dream/setting3','SettingController2@index3');
Route::get('/dream/setting3-1','SettingController3@index4');
Route::get('/dream/setting3-2','SettingController4@index5');
Route::get('/dream/s_show/{id}','SettingController@show');
Route::get('/dream/s3_show/{id}','SettingController2@show');
Route::get('/dream/s4_show/{id}','SettingController3@show');
Route::get('/dream/s5_show/{id}','SettingController4@show');
/*Route::get('/dream', function(){
    return view("dream.master");
});*/
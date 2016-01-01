<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dream', function(){
    return view("dream.master");
});

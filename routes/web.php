<?php 


//autoload controller, database, model, route class in system/main directory
function __autoload($sysclass) {
    $filename = __DIR__ .'/../system/main/' . strtolower($sysclass) .".php";
    require_once($filename);
}

//example homepage
Route::run('/', 'homepage@index');

//example page
Route::run('/members', 'members@index');

//example page and post method
Route::run('/members', 'members@post', 'post');

//example unlimited url and folder 
Route::run('/member/{url}', 'member@index');
Route::run('/profile/change-password', 'profile/changepassword@index');
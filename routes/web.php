<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ResourceController;

use PhpParser\Node\Expr\FuncCall;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",function(){
   return "hello";
});
Route::get("/demo/{fname}",[demoController::class,"demo"]);
Route::get("/demomulti/{fname}/{mname}/{lname}",[demoController::class,"multipara"]);
Route::get("/demomultiview/{fname}/{mname}/{lname}",[demoController::class,"multiparaview"]);
Route::get("/home",[demoController::class,"home"]);
Route::get("/about",[demoController::class,"about"]);






Route::group(['prefix'=>'accounts'],function(){


  Route::get("/profile",function(){
    return("hello profile");
  });
  
  Route::get("/signin",function(){
    return("hello sign in");
  });
  
  Route::get("/signup",function(){
    return("hello sign up");
  });
  
  Route::get("/password",function(){
    return("hello password");
  });

});







Route::get('/demo',[demoController::class,'data']);

/* single controller */


Route::get('/single',SingleController::class);


/*  resource controller*/

Route::resource('resource',ResourceController::class);


/*  basic controller*/

Route::get('/blade',[demoController::class,'bladeView']);



//Route::get('demo',[demoController::class,'bladeView']);



/* include */

Route::get("/inc",function(){

  return view("index");

});








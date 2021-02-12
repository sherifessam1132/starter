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

Route::get('/', function () {
    $data=[];
    $data['id']=10;
    $data['name']='sherif';

   // return view('welcome') ->with(['age'=>26,'email'=>'sherifessam1132@gmail.com']);
});
Route::get('index','Front/UserControler@getIndex')->middleware('verified');
Route::get('master',function (){
    return view('master')->with('data',5);
});

Route::get('/show-number/{id}', function ($id) {
    return $id;
}) -> name('a');

Route::namespace('Front')->group(function (){

    Route::get('users','UserControler@showUserName');
});

Route::group(['namespace' =>'Front', 'prefix' => 'users'],function (){
    Route::get('/',function (){
       return 'welcome from route ';
    });
    Route::get('show','UserControler@showUserName');
});
Route::group(['namespace' => 'Admin'],function (){
    Route::get('secound','secoundControler@showString');
});

Route::get('index','Front\UserControler@getIndex');

Route::get('/protfolio',function (){
    return view('layout/protfolio');
});



Auth::routes(['verify'=>'true']);


Route::get('/home', 'homeController@showUserName')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

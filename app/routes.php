<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*LOGIN ADMIN*/
Route::post('auth/login', array('uses' => 'UserController@doLogin'));

Route::get('auth/logout', array('uses' => 'UserController@doLogout'));

/*LOGIN USER*/
Route::post('auth/loginuser', array('uses' => 'UserController@doLoginuser'));

Route::get('auth/logoutuser', array('uses' => 'UserController@doLogoutuser'));

/*HALAMAN SIGN_IN & REGISTER*/
Route::post('join_us', 'UserController@store');
Route::get('join_us', function()
{
	return View::make('join_us');
});

/*HALAMAN INDEX*/
Route::post('/', 'ContactController@store');
Route::post('index', 'ContactController@store');
Route::get('/', function()
{
	return View::make('index');
});

Route::get('index', function()
{
	return View::make('index');
});

/*HALAMAN NEWS*/
Route::get('news', 'NewsController@indexHomePage');

Route::post('detailnews/{id}', 'CommentsController@store');
Route::get('detailnews/{id}', function($id) {
		$data = News::find($id);
		$CommentsController=Comments::all();
		$CommentsController=Comments::paginate(3);
		return View::make('detailnews', compact('data'), compact('CommentsController'));
});

//HALAMAN MERCHANDISE
Route::get('merchandise', 'MerchandiseController@indexHomePage');

Route::get('detailmerchandise/{id}', function($id) {
		$data = Merchandise::find($id);
		return View::make('detailmerchandise', compact('data'), compact('MerchandiseController'));
});

//BACK END
Route::get('administrator/index', function()
{
	return View::make('administrator/index');
});

Route::get('administrator/dashboard', function()
{
  if(!Auth::check())
    return View::make('administrator/index');
	else
	{
		if(  Auth::user()->role == 1 ) {
			return View::make('administrator/dashboard');
		}
		else {
			return View::make('administrator/index');
		}
	}
});

//BACK END : POST NEWS
Route::post('administrator/addpost', 'NewsController@store');
Route::get('administrator/addpost', function()
{
  if(!Auth::check())
    return View::make('administrator/index');
  else
	{
		if(  Auth::user()->role == 1 ) {
			return View::make('administrator/addpost');
		}
		else {
			return View::make('administrator/index');
		}
	}
});

Route::get('editpost/{id}', function($id) {
		$data = News::find($id);
		return View::make('administrator/editpost', compact('data'));
});
Route::patch('editpost/{id}','NewsController@update');

Route::get('administrator/viewpost', 'NewsController@index');
Route::get('deletepost/{id}','NewsController@destroy');

//BACK END : COMMENT
Route::get('administrator/viewcomment', 'CommentsController@indexBackEnd');
Route::get('deletecomment/{id}','CommentsController@destroy');

//BACK END : MERCHANDISE
Route::post('administrator/addmerchandise', 'MerchandiseController@store');
Route::get('administrator/addmerchandise', function()
{
  if(!Auth::check())
    return View::make('administrator/index');
  else
	  return View::make('administrator/addmerchandise');
});

Route::get('editmerchandise/{id}', function($id) {
		$data = Merchandise::find($id);
		return View::make('administrator/editmerchandise', compact('data'));
});
Route::patch('editmerchandise/{id}','MerchandiseController@update');

Route::get('administrator/viewmerchandise', 'MerchandiseController@index');
Route::get('deletemerchandise/{id}','MerchandiseController@destroy');

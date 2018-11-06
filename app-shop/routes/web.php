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

//http://localhost:8081/app-shop/public/
//Route::get('/', function () {
	/*frente a la necesidad de procesar muchas lineas, usar controladores*/

  //  return view('welcome');
// });

Route::get('/', 'TestController@welcome');
Route::get('/suma', 'TestController@suma');

//http://localhost:8081/app-shop/public/prueba
Route::get('/prueba', function(){
	return 'Hola Laravel es la ruta de prueba';
});


/*rutas que aparecen cuando generas el auth*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

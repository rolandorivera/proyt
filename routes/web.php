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
//
Route::redirect('/', 'inicio');

Route::get('inicio', 'HomeController@index')->name('inicio');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


 Route::get('empleados/restore/{id}', 'Empleado\EmployeeController@restore')->name('empleadoRestaurar');

 Route::get('faturas/index1',    'Factura\BillController@index1')->name('indexPro');
 Route::get('faturas/aprobar/{id}',     'Factura\BillController@aprobar')->name('aprobar');

 Route::resource('empleados',    'Empleado\EmployeeController');
 Route::resource('facturas',     'Factura\BillController');
 Route::resource('procesos',     'Proceso\ProcessController');
 Route::resource('departamentos','Departamento\DepartmentController');
 Route::resource('usuarios',     'Usuario\UserController');
 Route::resource('proveedores',  'Proveedor\ProvidersController');
 Route::resource('pdf',          'PDF\PdfController');
 //Route::get('emleados.crear','Empleado\EmployeeController@create')->name('crear');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

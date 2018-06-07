<?php

//Rutas para el Front
Route::get('/', 'Front\PaginasController@inicio')->name('inicio');
Route::get('/nosotros', 'Front\PaginasController@nosotros')->name('nosotros');
Route::get('/servicios', 'Front\PaginasController@servicios')->name('servicios');
Route::get('/contacto', 'Front\PaginasController@contacto')->name('contacto');

//Rutas para la administracion
Route::get('/admin',function(){
	return view('admin.inicio');
})->name('inicio-admin');

Route::resource('admin/usuarios','Usuarios\UsuariosController');
Route::get('admin/perfil','Usuarios\UsuariosController@miPerfil')->name('miperfil');
Route::post('admin/perfilact','Usuarios\UsuariosController@miPerfilAct')->name('miperfilAct');
Route::resource('admin/medicos','Usuarios\MedicosController');
Route::resource('admin/calendario','Agenda\AgendasController');

//Ruta para exportar PDF de usuarios
Route::get('usuarios-pdf','Usuarios\UsuariosController@exportarPDF')->name('pdfusuarios');
//Ruta para exportar Excel de Usuarios
Route::get('usuarios-excel','Usuarios\UsuariosController@exportarExcel')->name('excelusuarios');
//Ruta para importar Excel de Usuarios
Route::get('usuarios-importar','Usuarios\UsuariosController@importarExcel')->name('importarusuarios');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
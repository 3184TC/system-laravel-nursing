<?php

use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\AsistencialController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\EstablecimientoController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\UserController;
use App\Models\Asistencial;
use App\Models\Certificado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'home']);
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('billing', function () {
		return view('billing');
	})->name('billing');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');

	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');

	Route::get('tables', function () {
		return view('tables');
	})->name('tables');

    Route::get('virtual-reality', function () {
		return view('virtual-reality');
	})->name('virtual-reality');

    Route::get('static-sign-in', function () {
		return view('static-sign-in');
	})->name('sign-in');

    Route::get('static-sign-up', function () {
		return view('static-sign-up');
	})->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/login', function () {
		return view('dashboard');
	})->name('sign-up');
});



Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/login', function () {
    return view('session/login-session');
})->name('login');

Route::post('solicitud/{id}/{idN]',[SolicitudController::class,'mostrar'])->name('mostrarPDF');



Route::post('/certificados/generar', [CertificadoController::class, 'generarCertificado'])->name('certificados.generar');
Route::post('/solicituds/generar', [SolicitudController::class, 'generarSolicitud'])->name('solicituds.generar');
route::get('asistenciales/pdf',[AsistencialController::class, 'pdf'])->name('asistenciales.pdf');

// Rutas para 'Establecimientos'
Route::get('establecimientos', [EstablecimientoController::class, 'index'])->name('establecimientos.index'); // Obtener lista de establecimientos
Route::get('establecimientos/create', [EstablecimientoController::class, 'create'])->name('establecimientos.create'); // Formulario para crear un nuevo establecimiento
Route::post('establecimientos', [EstablecimientoController::class, 'store'])->name('establecimientos.store'); // Guardar un nuevo establecimiento
Route::get('establecimientos/{establecimiento}', [EstablecimientoController::class, 'show'])->name('establecimientos.show'); // Ver un establecimiento específico
Route::get('establecimientos/{establecimiento}/edit', [EstablecimientoController::class, 'edit'])->name('establecimientos.edit'); // Formulario para editar un establecimiento
Route::put('establecimientos/{establecimiento}', [EstablecimientoController::class, 'update'])->name('establecimientos.update'); // Actualizar un establecimiento
Route::delete('establecimientos/{establecimiento}', [EstablecimientoController::class, 'destroy'])->name('establecimientos.destroy'); // Eliminar un establecimiento

// Rutas para 'Asistenciales'
Route::get('asistenciales', [AsistencialController::class, 'index'])->name('asistencials.index'); // Obtener lista de asistenciales
Route::get('asistenciales/create', [AsistencialController::class, 'create'])->name('asistencials.create'); // Formulario para crear un nuevo asistencial
Route::post('asistenciales', [AsistencialController::class, 'store'])->name('asistencials.store'); // Guardar un nuevo asistencial
Route::get('asistenciales/{asistencial}', [AsistencialController::class, 'show'])->name('asistencials.show'); // Ver un asistencial específico
Route::get('asistenciales/{asistencial}/edit', [AsistencialController::class, 'edit'])->name('asistencials.edit'); // Formulario para editar un asistencial
Route::put('asistenciales/{asistencial}', [AsistencialController::class, 'update'])->name('asistencials.update'); // Actualizar un asistencial
Route::delete('asistenciales/{asistencial}', [AsistencialController::class, 'destroy'])->name('asistencials.destroy'); // Eliminar un asistencial

// Rutas para 'Encargados'
Route::get('encargados', [EncargadoController::class, 'index'])->name('encargados.index'); // Obtener lista de encargados
Route::get('encargados/create', [EncargadoController::class, 'create'])->name('encargados.create'); // Formulario para crear un nuevo encargado
Route::post('encargados', [EncargadoController::class, 'store'])->name('encargados.store'); // Guardar un nuevo encargado
Route::get('encargados/{encargado}', [EncargadoController::class, 'show'])->name('encargados.show'); // Ver un encargado específico
Route::get('encargados/{encargado}/edit', [EncargadoController::class, 'edit'])->name('encargados.edit'); // Formulario para editar un encargado
Route::put('encargados/{encargado}', [EncargadoController::class, 'update'])->name('encargados.update'); // Actualizar un encargado
Route::delete('encargados/{encargado}', [EncargadoController::class, 'destroy'])->name('encargados.destroy'); // Eliminar un encargado

// Rutas para 'Certificados'
Route::get('certificados', [CertificadoController::class, 'index'])->name('certificados.index'); // Obtener lista de certificados
Route::get('certificados/create', [CertificadoController::class, 'create'])->name('certificados.create'); // Formulario para crear un nuevo certificado
Route::post('certificados', [CertificadoController::class, 'store'])->name('certificados.store'); // Guardar un nuevo certificado
Route::get('certificados/{certificado}', [CertificadoController::class, 'show'])->name('certificados.show'); // Ver un certificado específico
Route::get('certificados/{certificado}/edit', [CertificadoController::class, 'edit'])->name('certificados.edit'); // Formulario para editar un certificado
Route::put('certificados/{certificado}', [CertificadoController::class, 'update'])->name('certificados.update'); // Actualizar un certificado
Route::delete('certificados/{certificado}', [CertificadoController::class, 'destroy'])->name('certificados.destroy'); // Eliminar un certificado

// Rutas para 'Solicituds'
Route::get('solicituds', [SolicitudController::class, 'index'])->name('solicituds.index'); 
Route::get('solicituds/create', [SolicitudController::class, 'create'])->name('solicituds.create'); 
Route::post('solicituds', [SolicitudController::class, 'store'])->name('solicituds.store'); 
Route::get('solicituds/{solicitud}', [SolicitudController::class, 'show'])->name('solicituds.show');
Route::get('solicituds/{solicitud}/edit', [SolicitudController::class, 'edit'])->name('solicituds.edit'); 
Route::put('solicituds/{solicitud}', [SolicitudController::class, 'update'])->name('solicituds.update'); 
Route::delete('solicituds/{solicitud}', [SolicitudController::class, 'destroy'])->name('solicituds.destroy'); 

// Rutas para 'Asignaciones'
Route::get('asignaciones', [AsignacionController::class, 'index'])->name('asignacions.index'); // Obtener lista de asignaciones
Route::get('asignaciones/create', [AsignacionController::class, 'create'])->name('asignacions.create'); // Formulario para crear una nueva asignación
Route::post('asignaciones', [AsignacionController::class, 'store'])->name('asignacions.store'); // Guardar una nueva asignación
Route::get('asignaciones/{asignacion}', [AsignacionController::class, 'show'])->name('asignacions.show'); // Ver una asignación específica
Route::get('asignaciones/{asignacion}/edit', [AsignacionController::class, 'edit'])->name('asignacions.edit'); // Formulario para editar una asignación
Route::put('asignaciones/{asignacion}', [AsignacionController::class, 'update'])->name('asignacions.update'); // Actualizar una asignación
Route::delete('asignaciones/{asignacion}', [AsignacionController::class, 'destroy'])->name('asignacions.destroy'); // Eliminar una asignación

// Rutas para 'Gestiones'
Route::get('gestiones', [GestionController::class, 'index'])->name('gestions.index'); // Obtener lista de gestiones
Route::get('gestiones/create', [GestionController::class, 'create'])->name('gestions.create'); // Formulario para crear una nueva gestión
Route::post('gestiones', [GestionController::class, 'store'])->name('gestions.store'); // Guardar una nueva gestión
Route::get('gestiones/{gestion}', [GestionController::class, 'show'])->name('gestions.show'); // Ver una gestión específica
Route::get('gestiones/{gestion}/edit', [GestionController::class, 'edit'])->name('gestions.edit'); // Formulario para editar una gestión
Route::put('gestiones/{gestion}', [GestionController::class, 'update'])->name('gestions.update'); // Actualizar una gestión
Route::delete('gestiones/{gestion}', [GestionController::class, 'destroy'])->name('gestions.destroy'); // Eliminar una gestión

// Rutas para 'Grados'
Route::get('grados', [GradoController::class, 'index'])->name('grados.index'); // Obtener lista de grados
Route::get('grados/create', [GradoController::class, 'create'])->name('grados.create'); // Formulario para crear un nuevo grado
Route::post('grados', [GradoController::class, 'store'])->name('grados.store'); // Guardar un nuevo grado
Route::get('grados/{grado}', [GradoController::class, 'show'])->name('grados.show'); // Ver un grado específico
Route::get('grados/{grado}/edit', [GradoController::class, 'edit'])->name('grados.edit'); // Formulario para editar un grado
Route::put('grados/{grado}', [GradoController::class, 'update'])->name('grados.update'); // Actualizar un grado
Route::delete('grados/{grado}', [GradoController::class, 'destroy'])->name('grados.destroy'); // Eliminar un grado

// Rutas para 'Personas'
Route::get('personas', [PersonaController::class, 'index'])->name('personas.index'); // Obtener lista de personas
Route::get('personas/create', [PersonaController::class, 'create'])->name('personas.create'); // Formulario para crear una nueva persona
Route::post('personas', [PersonaController::class, 'store'])->name('personas.store'); // Guardar una nueva persona
Route::get('personas/{persona}', [PersonaController::class, 'show'])->name('personas.show'); // Ver una persona específica
Route::get('personas/{persona}/edit', [PersonaController::class, 'edit'])->name('personas.edit'); // Formulario para editar una persona
Route::put('personas/{persona}', [PersonaController::class, 'update'])->name('personas.update'); // Actualizar una persona
Route::delete('personas/{persona}', [PersonaController::class, 'destroy'])->name('personas.destroy'); // Eliminar una persona

// Rutas para 'Usuarios'
Route::get('usuarios', [UserController::class, 'index'])->name('usuarios.index'); // Obtener lista de usuarios
Route::get('usuarios/create', [UserController::class, 'create'])->name('usuarios.create'); // Formulario para crear un nuevo usuario
Route::post('usuarios', [UserController::class, 'store'])->name('usuarios.store'); // Guardar un nuevo usuario
Route::get('usuarios/{usuario}', [UserController::class, 'show'])->name('usuarios.show'); // Ver un usuario específico
Route::get('usuarios/{usuario}/edit', [UserController::class, 'edit'])->name('usuarios.edit'); // Formulario para editar un usuario
Route::put('usuarios/{usuario}', [UserController::class, 'update'])->name('usuarios.update'); // Actualizar un usuario
Route::delete('usuarios/{usuario}', [UserController::class, 'destroy'])->name('usuarios.destroy'); // Eliminar un usuario





// routes/web.php
Route::put('/asistencials/{asistencial}', [AsistencialController::class, 'update'])->name('asistencials.update');

//route::resource('establecimientos',EstablecimientoController::class);
//route::resource('asistenciales',AsistencialController::class);
//route::resource('encargados',EncargadoController::class);
//route::resource('certificados',CertificadoController::class);
//route::resource('asignaciones',AsignacionController::class);
//route::resource('gestiones',GestionController::class);
//route::resource('grados',GradoController::class);
//route::resource('personas',PersonaController::class);
//route::resource('usuarios',UserController::class);
// routes/web.php
//Route::resource('asistencials', AsistencialController::class);





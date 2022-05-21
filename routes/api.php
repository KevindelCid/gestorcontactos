<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactosController;
use App\Http\Controllers\SvelteapiController;
use App\Http\Controllers\LlsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
'middleware' => 'api',
'prefix' => 'auth'
], 
function($router){
   
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);
Route::get('sveltelistar', [ContactosController::class, 'listar']);
Route::post('icontact', [ContactosController::class, 'Contactosinsert']);
Route::post('llsinsert', [LlsController::class, 'worker_insert']);
Route::post('svelteapi', [SvelteapiController::class, 'Contactosinsert']);
Route::post('llseditar/{id}', [LlsController::class, 'editar']);
Route::get('sveltelistar', [SvelteapiController::class, 'listar']);
Route::get('llslistar', [LlsController::class, 'listar']);

Route::post('register', [AuthController::class, 'register']); 
}
);



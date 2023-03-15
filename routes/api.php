<?php

use App\Http\Controllers\Curriculo\CriarCurriculoController;
use App\Http\Controllers\Curriculo\ListaCurriculosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/code/{id} ', function(Request $request, $id) {
    if ($request->has ('nome_completo')){
        return response ()->json([
            'aluno salvo',
            $id
        ], 200);
    }
    return response () ->json ('Houve um problema!', 500);
}) ->name ('dependencia')->where(['id'=> '[0-9]+']);

Route::get('/curriculo/listar', ListaCurriculosController::class);
Route::post('/curriculo/salvar', CriarCurriculoController::class);
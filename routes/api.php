<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/info',[ApiController::class,'data']);
Route::get('/list/{id?}',[StudentController::class,'records']);
Route::post('/addStudent',[StudentController::class,'addStudent']);
Route::put('/updateStudent/{id}',[StudentController::class,'updateStudent']);
Route::delete('/deleteStudent/{id}',[StudentController::class,'deleteStudent']);
Route::get('/search_student/{name}',[StudentController::class,'searchStudent']);
Route::post('/validate_student',[StudentController::class,'validation']);


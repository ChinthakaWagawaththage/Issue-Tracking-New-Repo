<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Issue api-routes
Route::apiResource('/issues','App\Http\Controllers\IssueController');
//get issues with images
Route::get('/issueimages',[App\Http\Controllers\IssueController::class, 'issueImages']);



//Category api-routes
Route::apiResource('/category','App\Http\Controllers\CategoryController');



//SubCategory api-routes
Route::apiResource('/subcategory','App\Http\Controllers\SubcategoryController');



//Comment api-Routes
Route::apiResource('comment','App\Http\Controllers\CommentController');
//get comments with images
Route::get('/commentimages',[App\Http\Controllers\CommentController::class, 'commentImages']);


//image api-Routes
Route::apiResource('image','App\Http\Controllers\ImageController');



//Login Route

Route::post('/login', \App\Http\Controllers\Auth\LoginController::class);



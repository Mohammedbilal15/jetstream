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
// A route is created to check the user permission
/*Route::middleware('auth:sanctum')->get('/test', function (Request $request) {
    if($request->user()->tokenCan('delete')){
        return 'hello';
    }
    else{
        return 'unavailable';
    }
    
});

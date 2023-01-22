<?php

use App\Http\Controllers\MemberController;
use App\Models\Member;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/','MemberController@index');

Route::get('/', [MemberController::class, 'index']);
Route::get('/show',[MemberController::class, 'getMember']);

Route::post('/save',[MemberController::class, 'save']);
Route::post('/update', [MemberController::class, 'update']);
Route::post('/delete',[MemberController::class, 'delete']);

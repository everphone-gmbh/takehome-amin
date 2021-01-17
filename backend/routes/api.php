<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GiftsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('employ/{id}', 'App\Http\Controllers\EmployeeController@update');
Route::post('gifts', 'App\Http\Controllers\GiftsController@store');
Route::put('gifts/{id}', 'App\Http\Controllers\GiftsController@update');
Route::get('gifts', 'App\Http\Controllers\GiftsController@index');

// Route::get('/login', [AuthenticatedSessionController::class, 'create'])
//                 ->middleware('guest')
//                 ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');

// Route::get('/employ', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return employee::all();
// });
 
// Route::get('employ/{id}', function($id) {
//     return employee::find($id);
// });

// Route::post('employ', function(Request $request) {
//     return employee::create($request->all);
// });

// Route::put('employ/{id}', function(Request $request, $id) {


//     $updateData = $request->validate([
//         'name' => 'required|max:255',
//         'role' => 'required|max:255',
//         'interests' => 'required|max:255'
//     ]);
//     employee::whereId($id)->update($updateData);



//     // $article = employee::findOrFail($id);
//     // $article->update($request->all());

//     return $updateData;
// });

// Route::delete('employ/{id}', function($id) {
//     employee::find($id)->delete();

//     return 204;
// });

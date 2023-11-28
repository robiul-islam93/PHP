<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile/{id}', [ProfileController::class, 'index']);



Route::get('/user-agent', function (Request $request) {

    // Retrieve the 'User-Agent' header from the request
    $userAgent = $request->header('User-Agent');
    // Return the $userAgent in the response
    return $userAgent;

});



Route::get('/test', function(){
    return 'Hellow Word';
})->middleware('throttle:5,1');
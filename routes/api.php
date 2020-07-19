<?php
use App\Kelas;
use App\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ROUTE KELAS
Route::get('/kelas', function(){
    // get kelas and materi 
    return Kelas::with('materi', 'mentor')->get();
});
Route::get('/kelas/{id}', function($id){
    // get kelas and materi 
    return Kelas::with('materi', 'mentor')->find($id);
});
Route::get('/kelas/populer', function(){
    // get kelas and materi 
    return Kelas::with('materi', 'mentor')->where('populer',1)->get();
});
Route::get('/kelas/pilihan', function(){
    // get kelas and materi 
    return Kelas::with('materi', 'mentor')->where('pilihan',1)->get();
});
// END KELAS ROUTE

// ROUTE USER
Route::get('/user', function(){
    // get kelas and materi 
    return User::all();
});
// END ROUTE USER
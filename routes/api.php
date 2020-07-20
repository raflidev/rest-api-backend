<?php
use App\Kelas;
use App\User;
use App\Submateri;
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
    return Kelas::with('materi', 'mentor')->get();
});
Route::get('/kelas/{id}', function($id){
    return Kelas::with('materi', 'mentor')->find($id);
});
Route::get('/kelas/populer', function(){
    return Kelas::with('materi', 'mentor')->where('populer',1)->get();
});
Route::get('/kelas/pilihan', function(){
    return Kelas::with('materi', 'mentor')->where('pilihan',1)->get();
});
Route::get('/kelas/materi/{materi_id}', function($materi_id){
    // get sub materi 
    return Submateri::with('materi')->where('id', $materi_id)->get();
});
// END KELAS ROUTE

// ROUTE USER
Route::get('/user', function(){
    return User::all();
});
// END ROUTE USER
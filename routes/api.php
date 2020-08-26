<?php

use App\Kelas;
use App\User;
use App\Ulasan;
use App\Materi;
use App\Mading;
use App\Roadmap;
use App\KelasRoadmap;
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
Route::get('/kelas', function () {
    return Kelas::with('materi.submateri', 'mentor')->get();
});
Route::get('/kelas/{id}', function ($id) {
    return Kelas::with('materi', 'mentor')->find($id);
});
Route::get('/kelas/info/populer/', function () {
    return Kelas::with('materi.submateri', 'mentor')->where('populer', '=', 1)->get();
});
Route::get('/kelas/info/pilihan', function () {
    return Kelas::with('materi.submateri', 'mentor')->where('pilihan', '=', 1)->get();
});
Route::get('/kelas/materi/{materi_id}', function ($materi_id) {
    return Materi::with('materi')->where('id', $materi_id)->get();
});

Route::get('/kelas/ulasan/{id}', function ($id) {
    return Ulasan::with('kelas:id,name','user:id,nama,username,skill')->where('kelas_id','=',$id)->get();
});
// END KELAS ROUTE

// ROUTE USER
Route::get('/user', function () {
    return User::all();
});
// END ROUTE USER

//  ROUTE MADING
Route::get('/mading', function () {
    return Mading::with('user:id,nama,skill')->get();
});
Route::get('/mading/{id}', function ($id) {
    return Mading::with('user:id,nama,skill')->where('id', $id)->get();
});
Route::get('/mading/user/{id}', function ($id) {
    return Mading::with('user:id,nama,skill')->where('user_id', $id)->get();
});
// END ROUTE MADING

// ROUTE ULASAN
Route::get('/ulasan', function () {
    return Ulasan::with('kelas:id,name','user:id,nama,username,skill')->get();
});
Route::get('/ulasan/{id}', function ($id) {
    return Ulasan::with('kelas:id,name','user:id,nama,username,skill')->where('id','=',$id)->get();
});
Route::get('/ulasan/user/{id}', function ($id) {
    return Ulasan::with('kelas:id,name','user:id,nama,username,skill')->where('user_id','=',$id)->get();
});
// END ROUTE ULASAN

// ROUTE ROADMAP
Route::get('/roadmap', function () {
    return Roadmap::with('kelas')->get();
});
Route::get('/roadmap/{id}', function ($id) {
    return Roadmap::with('kelas')->where('id',$id)->get();
});
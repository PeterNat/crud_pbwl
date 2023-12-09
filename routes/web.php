<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModelController;

Route::get('/', [ModelController::class,'welcome']);

Route::get('/buku/{locale?}', [ModelController::class,'buku']);
Route::get('/createbuku/{locale?}', [ModelController::class,'createbuku']);
Route::post('/savebuku', [ModelController::class,'savebuku']);
Route::post('/delbuku/{id}', [ModelController::class,'delbuku'])
->name('hapusbuku');
Route::get('/editbuku/{id}', [ModelController::class,'editbuku'])
->name('ubahbuku');
Route::post('/updatebuku/{id}', [ModelController::class,'updatebuku'])
->name('modifbuku');

Route::get('/anggota', [ModelController::class,'anggota']);
Route::get('/createanggota/{locale?}', [ModelController::class,'createanggota']);
Route::post('/saveanggota', [ModelController::class,'saveanggota']);
Route::post('/delanggota/{id}', [ModelController::class,'delanggota'])
->name('hapusanggota');
Route::get('/editanggota/{id}', [ModelController::class,'editanggota'])
->name('ubahanggota');
Route::post('/updateanggota/{id}', [ModelController::class,'updateanggota'])
->name('modifanggota');

Route::get('/peminjaman', [ModelController::class,'peminjaman']);
Route::get('/createpeminjaman/{locale?}', [ModelController::class,'createpeminjaman']);
Route::post('/savepeminjaman', [ModelController::class,'savepeminjaman']);
Route::post('/delpeminjaman/{id}', [ModelController::class,'delpeminjaman'])
->name('hapuspeminjaman');
Route::get('/editpeminjaman/{id}', [ModelController::class,'editpeminjaman'])
->name('ubahpeminjaman');
Route::post('/updatepeminjaman/{id}', [ModelController::class,'updatepeminjaman'])
->name('modifpeminjaman');

Route::get('/lap1', [ModelController::class,'lap1']);
Route::get('/lap2', [ModelController::class,'lap2']);
Route::get('/lap3', [ModelController::class,'lap3']);
Route::get('/lap4', [ModelController::class,'lap4']);
Route::get('/lap5', [ModelController::class,'lap5']);
Route::get('/lap6', [ModelController::class,'lap6']);
<?php

use Modules\Project\Http\Controllers\DetailController;
use Modules\Project\Http\Controllers\DtolakController;
use Modules\Project\Http\Controllers\DtotalController;
use Modules\Project\Http\Controllers\DprosesController;
use Modules\Project\Http\Controllers\DselesaiController;
use Modules\Project\Http\Controllers\PengajuanController;
use Modules\Project\Http\Controllers\DuncompleteController;


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

Route::prefix('project')->group(function () {
    Route::get('/', 'ProjectController@index');
    Route::resource('/pengajuan', PengajuanController::class);
    // Route::resource('/proses', DprosesController::class);
    // Route::resource('/tolak', DtolakController::class);
    // Route::resource('/selesai', DselesaiController::class);
    // Route::resource('/uncomplete', DuncompleteController::class);
    Route::resource('/total', DtotalController::class);
    Route::resource('/lihat', DetailController::class);
    Route::resource('/print', PrintController::class);
    Route::resource('/edit', DetailController::class);
    Route::get('/project/pengajuan/checkSlug', [PengajuanController::class , 'checkSlug']);
    Route::get('/lampiran/{id}', [PengajuanController::class , 'lampiran']);
    Route::get('/lihathistory/{id}', [PengajuanController::class , 'lihathistory']);
    Route::delete('hapusBiaya/{id}',[PengajuanController::class,'hapusBiaya'])->name('hapusBiaya');
    Route::delete('hapusPendapatan/{id}',[PengajuanController::class,'hapusPendapatan'])->name('hapusPendapatan');
    Route::delete('hapusLampiran/{id}',[PengajuanController::class,'hapusLampiran'])->name('hapusLampiran');
});

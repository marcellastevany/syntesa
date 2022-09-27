<?php


use Modules\Pengajuan\Http\Controllers\DitolakController;
use Modules\Pengajuan\Http\Controllers\SelesaiController;
use Modules\Pengajuan\Http\Controllers\DiprosesController;
use Modules\Pengajuan\Http\Controllers\PencairanController;
use Modules\Pengajuan\Http\Controllers\MasukBiasaController;
use Modules\Pengajuan\Http\Controllers\HistoriBiasaController;
use Modules\Pengajuan\Http\Controllers\MasukProjectController;
use Modules\Pengajuan\Http\Controllers\TolakProjectController;
use Modules\Pengajuan\Http\Controllers\DetailProjectController;
use Modules\Pengajuan\Http\Controllers\ProsesProjectController;
use Modules\Pengajuan\Http\Controllers\PengajuanBiasaController;
use Modules\Pengajuan\Http\Controllers\SelesaiProjectController;
use Modules\Pengajuan\Http\Controllers\DetailPengajuanController;
use Modules\Pengajuan\Http\Controllers\PengajuanProjekController;
use Modules\Pengajuan\Http\Controllers\PencairanProjectController;
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

Route::prefix('pengajuan')->group(function () {
    Route::get('/', 'PengajuanController@index');
    Route::resource('/pengajuanbiasa', PengajuanBiasaController::class);
    Route::resource('/detail', DetailPengajuanController::class);
    Route::resource('/histori', HistoriBiasaController::class);
    Route::resource('/ditolak', DitolakController::class);
    Route::resource('/diproses', DiprosesController::class);
    Route::resource('/masuk', MasukBiasaController::class);
    Route::resource('/pencairan', PencairanController::class);
    Route::resource('/selesai', SelesaiController::class);
    Route::resource('/projek_proses', ProsesProjectController::class);
    Route::resource('/projek_tolak', TolakProjectController::class);
    Route::resource('/projek_selesai', SelesaiProjectController::class);
    Route::resource('/projek_masuk', MasukProjectController::class);
    Route::resource('/detailproject', DetailProjectController::class);
    Route::resource('/cairproject', PencairanProjectController::class);
   
});

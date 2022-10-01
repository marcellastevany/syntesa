@extends('pengajuan::layouts.main')

@section('content')

@php

// biasa
$biasas= Modules\Pengajuan\Entities\PengajuanBiasa::select()->get();
$projects= Modules\Project\Entities\Project::select()->get();
// $kategori = Modules\Pengajuan\Entities\kategori_pengajuan::select()->where('kategori', $biasas->kategori)->get() ->first();

//MANAGER
//masuk biasa
$masuk_manager_op = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==4 && $histori->jabatan==7 && $histori->divisi==3 ) { $masuk_manager_op ++;}
}

//proses biasa
$proses_manager_op  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==1 && $histori->jabatan==4 && $histori->divisi==3 ||
$histori->status==1 && $histori->jabatan==3 && $histori->divisi==3 ||
$histori->status==1 && $histori->jabatan==1 && $histori->divisi==3
) { $proses_manager_op ++;}
}

//selesai biasa
$selesai_manager_op  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==3 && $histori->divisi==3
) { $selesai_manager_op ++;}
}

//tolak biasa
$tolak_manager_op  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->divisi==3
) { $tolak_manager_op ++;}
}

//total biasa
$total_manager_op  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_manager_op = $masuk_manager_op + $proses_manager_op + $tolak_manager_op + $selesai_manager_op;


}


//project
$masuk_project_manager_op = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if($histori->status==4 && $histori->jabatan==7 && $histori->divisi==3 ) { $masuk_project_manager_op ++;}
}

$proses_project_manager_op = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 1 && $histori->jabatan == 4 && $histori->divisi == 3 ||
 $histori->status == 1 && $histori->jabatan == 3 && $histori->divisi == 3 ||  
$histori->status == 1 && $histori->jabatan == 4 && $histori->divisi == 1 || 
$histori->status == 1 && $histori->jabatan == 2 ||
$histori->status == 1 && $histori->jabatan == 1  ) { $proses_project_manager_op ++;}
}

$selesai_project_manager_op = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 3 && $histori->divisi == 3 ) { $selesai_project_manager_op ++;}
}

$tolak_project_manager_op = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 2 && $histori->divisi == 3 && $histori->jabatan == 4 ) { $tolak_project_manager_op ++;}
}

$total_project_manager_op = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
   ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

$total_project_manager_op = $masuk_project_manager_op + $proses_project_manager_op + $tolak_project_manager_op + $selesai_project_manager_op;
}

//MANAGER

//DIROP
$masuk_dirop = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==1  && $histori->jabatan==4 && $histori->divisi==3 && $a_biasa->kategori==1 ) { $masuk_dirop ++;}
}

//proses biasa
$proses_dirop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==1 && $histori->jabatan==3 && $histori->divisi==3 || 
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==3 || $histori->status==1 && $histori->jabatan==4 && $histori->divisi==3  && $a_biasa->kategori==2 ) { $proses_dirop ++;}
}

//selesai biasa
$selesai_dirop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==3 && $histori->divisi==3 && $histori->jabatan==7
) { $selesai_dirop ++;}
}

//tolak biasa
$tolak_dirop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->divisi==3
) { $tolak_dirop ++;}
}

//total biasa
$total_dirop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_dirop = $masuk_dirop + $proses_dirop + $tolak_dirop + $selesai_dirop;
}

$masuk_project_dirop = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status==1 && $histori->jabatan==4 && $histori->divisi==3) { $masuk_project_dirop ++;}
}

$proses_project_dirop = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ( $histori->status == 1 && $histori->jabatan == 3 && $histori->divisi == 3 ||  
$histori->status == 1 && $histori->jabatan == 4 && $histori->divisi == 1 || 
$histori->status == 1 && $histori->jabatan == 2 ||
$histori->status == 1 && $histori->jabatan == 1  ) { $proses_project_dirop ++;}
}

$selesai_project_dirop = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 3 && $histori->divisi == 3  ) { $selesai_project_dirop ++;}
}

$tolak_project_dirop = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 2 && $histori->divisi == 3 && $histori->jabatan == 3 ) { $tolak_project_dirop ++;}
}

$total_project_dirop = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
   ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

$total_project_dirop = $masuk_project_dirop + $proses_project_dirop + $tolak_project_dirop + $selesai_project_dirop;
}

//DIROP


//MANKEU

$masuk_mankeu = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==4  && $histori->jabatan==7 && $histori->divisi==1 ) { $masuk_mankeu ++;}
}

//proses biasa
$proses_mankeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==1 && $histori->jabatan==4 && $histori->divisi==1 || 
 $histori->status==1 && $histori->jabatan==2 && $histori->divisi==1 || 
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==1) { $proses_mankeu ++;}
}

//selesai biasa
$selesai_mankeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==3 && $histori->divisi==1 && $histori->jabatan==7) { $selesai_mankeu ++;}
}

//tolak biasa
$tolak_mankeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->jabatan==4 && $histori->divisi==1 || 
$histori->status==2 && $histori->jabatan==2 && $histori->divisi==1 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==1) { $tolak_mankeu ++;}
}

//total biasa
$total_mankeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_mankeu = $masuk_mankeu + $proses_mankeu + $tolak_mankeu + $selesai_mankeu;
}

$masuk_project_mankeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status==1 && $histori->jabatan==3 ) { $masuk_project_mankeu ++;}
}

$proses_project_mankeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ( $histori->status == 1 && $histori->jabatan == 4 && $histori->divisi == 1 || 
 $histori->status == 1 && $histori->jabatan == 2 ||
 $histori->status == 1 && $histori->jabatan == 1  ) { $proses_project_mankeu ++;}
}

$selesai_project_mankeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 3 && $histori->divisi == 3  ) { $selesai_project_mankeu ++;}
}

$tolak_project_mankeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 2 && $histori->divisi == 3 && $histori->jabatan == 3 ) { $tolak_project_mankeu ++;}
}

$total_project_mankeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
   ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

$total_project_mankeu =  $masuk_project_mankeu +  $tolak_project_mankeu +  $selesai_project_mankeu +  $proses_project_mankeu;
}

//MANKEU

//DIRKEU

$masuk_dirkeu = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==1  && $histori->jabatan==4 && $histori->divisi==1 && $a_biasa->kategori==1 ||
$histori->status==1  && $histori->jabatan==4 && $histori->divisi==2 && $a_biasa->kategori==1) { $masuk_dirkeu ++;}
}

//proses biasa
$proses_dirkeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==1 && $histori->jabatan==2 && $histori->divisi==1 && $a_biasa->kategori==1 || 
 $histori->status==1 && $histori->jabatan==2 && $histori->divisi==2 && $a_biasa->kategori==1 || 
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==1 && $a_biasa->kategori==1 ||
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==2 && $a_biasa->kategori==1 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==1 && $a_biasa->kategori==2 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==2 && $a_biasa->kategori==2 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==3 && $a_biasa->kategori==2 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==3 && $a_biasa->kategori==1 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==3 && $a_biasa->kategori==1 ||
 $histori->status==1 && $histori->jabatan==3 && $histori->divisi==3 && $a_biasa->kategori==1 ||
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==3) { $proses_dirkeu ++;}
}

//selesai biasa
$selesai_dirkeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==3 && $histori->jabatan==7 && $histori->divisi==1 ||
$histori->status==3 && $histori->jabatan==7 && $histori->divisi==2 ||
$histori->status==3 && $histori->jabatan==7 && $histori->divisi==3) { $selesai_dirkeu ++;}
}

//tolak biasa
$tolak_dirkeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->jabatan==2 && $histori->divisi==1 || 
$histori->status==2 && $histori->jabatan==2 && $histori->divisi==2 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==1 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==2) { $tolak_dirkeu ++;}
}

//total biasa
$total_dirkeu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_dirkeu = $masuk_dirkeu + $proses_dirkeu + $tolak_dirkeu + $selesai_dirkeu;
}


$masuk_project_dirkeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status==1 && $histori->jabatan==4 && $histori->divisi == 1) { $masuk_project_dirkeu ++;}
}

$proses_project_dirkeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 1 && $histori->jabatan == 2 ||  $histori->status == 1 && $histori->jabatan == 1  ){ $proses_project_dirkeu ++;}
}

$selesai_project_dirkeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 3 && $histori->divisi == 3  ) { $selesai_project_dirkeu ++;}
}

$tolak_project_dirkeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 2  && $histori->jabatan == 2 ) { $tolak_project_dirkeu ++;}
}

$total_project_dirkeu = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
   ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

$total_project_dirkeu = $masuk_project_dirkeu + $proses_project_dirkeu + $tolak_project_dirkeu + $selesai_project_dirkeu;
}


//DIRKEU


//DIRUT

$masuk_dirut = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==1  && $histori->jabatan==2 && $histori->divisi==1  ||
$histori->status==1  && $histori->jabatan==2 && $histori->divisi==2 ||
$histori->status==1  && $histori->jabatan==3 && $histori->divisi==3){ $masuk_dirut ++;}
}

//proses biasa
$proses_dirut  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==1 && $histori->jabatan==1 && $histori->divisi==1 || 
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==2 || 
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==3 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==1 && $a_biasa->kategori==2 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==2 && $a_biasa->kategori==2 ||
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==3 && $a_biasa->kategori==2) { $proses_dirut ++;}
}

//selesai biasa
$selesai_dirut  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==3 && $histori->jabatan==7 && $histori->divisi==1 ||
$histori->status==3 && $histori->jabatan==7 && $histori->divisi==2 ||
$histori->status==3 && $histori->jabatan==7 && $histori->divisi==3) { $selesai_dirut ++;}
}

//tolak biasa
$tolak_dirut  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->jabatan==1 && $histori->divisi==1 || 
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==2 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==3) { $tolak_dirut ++;}
}

//total biasa
$total_dirut  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_dirut = $masuk_dirut + $selesai_dirut + $tolak_dirut + $proses_dirut;
}


$masuk_project_dirut = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status==1 && $histori->jabatan=2 && $histori->divisi == 4) { $masuk_project_dirut ++;}
}

$proses_project_dirut = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 1 && $histori->jabatan == 2 ||  $histori->status == 1 && $histori->jabatan == 1  && $histori->divisi == 4  ) { $proses_project_dirut ++;}
}

$selesai_project_dirut = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 3 && $histori->divisi == 3  ) { $selesai_project_dirut ++;}
}

$tolak_project_dirut = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
    ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

   $a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

if ($histori->status == 2  && $histori->jabatan == 1 ) { $tolak_project_dirut ++;}
}

$total_project_dirut = 0;
foreach ($projects as $project) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanProjek::select()
   ->where('project_id', $project->id )
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_project = Modules\Project\Entities\Project::select()
->where('id', $histori->project_id )
->get()
->first();

$total_project_dirut = $masuk_project_dirut + $proses_project_dirut + $tolak_project_dirut + $selesai_project_dirut;
}

//DIRUT


//STAFFOP

//proses biasa
$proses_staffop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==4 && $histori->jabatan==7 && $histori->divisi==3 || 
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==3 || 
 $histori->status==1 && $histori->jabatan==3 && $histori->divisi==3 ||
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==3 ) { $proses_staffop ++;}
}

//selesai biasa
$selesai_staffop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==3 && $histori->jabatan==7 && $histori->divisi==3) { $selesai_staffop ++;}
}

//tolak biasa
$tolak_staffop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->jabatan==4 && $histori->divisi==3 || 
$histori->status==2 && $histori->jabatan==3 && $histori->divisi==3 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==3) { $tolak_staffop ++;}
}

//total biasa
$total_staffop  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_staffop = $proses_staffop + $selesai_staffop + $tolak_staffop;
}


//STAFFOP

//STAFF SDM


//proses biasa
$proses_staff_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==4 && $histori->jabatan==7 && $histori->divisi==2 || 
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==2 || 
 $histori->status==1 && $histori->jabatan==2 && $histori->divisi==2 ||
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==2 ) { $proses_staff_sdm ++;}
}

//selesai biasa
$selesai_staff_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==3 && $histori->jabatan==7 && $histori->divisi==2) { $selesai_staff_sdm ++;}
}

//tolak biasa
$tolak_staff_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->jabatan==4 && $histori->divisi==2 || 
$histori->status==2 && $histori->jabatan==2 && $histori->divisi==2 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==2) { $tolak_staff_sdm ++;}
}

//total biasa
$total_staff_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_staff_sdm = $proses_staff_sdm + $selesai_staff_sdm + $tolak_staff_sdm;
}


//STAFF SDM

//MAN SDM

$masuk_manager_sdm = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==4  && $histori->jabatan==7 && $histori->divisi==2){ $masuk_manager_sdm ++;}
}


//proses biasa
$proses_manager_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if (
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==2 || 
 $histori->status==1 && $histori->jabatan==2 && $histori->divisi==2 ||
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==2 ) { $proses_manager_sdm ++;}
}

//selesai biasa
$selesai_manager_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==3 && $histori->jabatan==7 && $histori->divisi==2) { $selesai_manager_sdm ++;}
}

//tolak biasa
$tolak_manager_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->jabatan==4 && $histori->divisi==2 || 
$histori->status==2 && $histori->jabatan==2 && $histori->divisi==2 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==2) { $tolak_manager_sdm ++;}
}

//total biasa
$total_manager_sdm  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();
$total_manager_sdm = $masuk_manager_sdm + $selesai_manager_sdm + $proses_manager_sdm + $tolak_manager_sdm;
}


//MAN SDM


//STAFF KEUANGAN

//proses biasa
$proses_staff_keu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if (
 $histori->status==4 && $histori->jabatan==7 && $histori->divisi==1 || 
 $histori->status==1 && $histori->jabatan==4 && $histori->divisi==1 ||
 $histori->status==1 && $histori->jabatan==2 && $histori->divisi==1 ||
 $histori->status==1 && $histori->jabatan==1 && $histori->divisi==1  ) { $proses_staff_keu ++;}
}

//selesai biasa
$selesai_staff_keu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if ($histori->status==3 && $histori->jabatan==7 && $histori->divisi==1) { $selesai_staff_keu ++;}
}

//tolak biasa
$tolak_staff_keu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

if($histori->status==2 && $histori->jabatan==4 && $histori->divisi==1 || 
$histori->status==2 && $histori->jabatan==2 && $histori->divisi==1 ||
$histori->status==2 && $histori->jabatan==1 && $histori->divisi==1) { $tolak_staff_keu ++;}
}

//total biasa
$total_staff_keu  = 0;
foreach ($biasas as $biasa) {

    $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
   ->where('pengajuan_biasa_id', $biasa->id )
   
   ->orderby('created_at','desc')
   ->get()
   ->first(); 

$a_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
->where('id', $histori->pengajuan_biasa_id )

->get()
->first();

$total_staff_keu = $proses_staff_keu + $selesai_staff_keu + $tolak_staff_keu;
}

//STAFF KEUANGAN


@endphp


@if ($role == 100)
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <div class="row match-height">
                        <div class="content-header-left col-md-12 col-12 mb-2">
                            <div class="row breadcrumbs-top">
                                <h2 class="content-header-title float-start mb-0">Dashboard</h2>

                                <!-- Pengajuan diproses start -->
                                <div class="col-lg-2 col-sm-6 col-12 mt-2">
                                    <div class="card">
                                        <div class="card-header flex-column align-items-start pb-0 ">
                                            <div class="avatar bg-light-warning p-50 m-0">
                                                <div class="avatar-content">
                                                    <i data-feather="activity" class="font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="fw-bolder mt-1">34</h2>
                                            <p class="card-text mb-2">Pengajuan di proses</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pengajuan diproses ends -->


                                <!-- Pengajuan ditolak starts -->
                                <div class="col-lg-2 col-sm-6 col-12 mt-2">
                                    <div class="card">
                                        <div class="card-header flex-column align-items-start pb-0">
                                            <div class="avatar bg-light-danger p-50 m-0">
                                                <div class="avatar-content">
                                                    <i data-feather="x-circle" class="font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="fw-bolder mt-1">22</h2>
                                            <p class="card-text mb-2">Pengajuan ditolak</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pengajuan ditolak ends -->

                                <!-- Pengajuan Selesai starts -->
                                <div class="col-lg-2 col-sm-6 col-12 mt-2">
                                    <div class="card">
                                        <div class="card-header flex-column align-items-start pb-0">
                                            <div class="avatar bg-light-success p-50 m-0">
                                                <div class="avatar-content">
                                                    <i data-feather="check-circle" class="font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="fw-bolder mt-1">78</h2>
                                            <p class="card-text mb-2">Pengajuan Selesai</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pengajuan Selesai ends -->

                                <!-- Total Pengajuan starts -->
                                <div class="col-lg-2 col-sm mt-2">
                                    <div class="card ">
                                        <div class="card-header flex-column align-items-start pb-0">
                                            <div class="avatar bg-light-primary p-50 m-0">
                                                <div class="avatar-content">
                                                    <i data-feather="circle" class="font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="fw-bolder mt-1">250</h2>
                                            <p class="card-text mb-2">Total Pengajuan</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Total Pengajuan ends -->

                                <!-- kekurangan start -->
                                <div class="col-lg-4 col-sm-6 col-12 mt-2">
                                    <div class="card ">
                                        <div class="card-header flex-column align-items-start pb-0 ">
                                            <div class="avatar bg-light-danger p-50 m-0">
                                                <div class="avatar-content">
                                                    <i data-feather="alert-triangle" class="font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="fw-bolder mt-1">12</h2>
                                            <p class="card-text mb-2">Pengajuan Tidak Lengkap</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- kekuranganends -->


                                <!-- Basic table -->
                                <div class="col-12">
                                    <h2 class="content-header-title mt-2">Pengajuan Tidak Lengkap</h2>
                                </div>
                                <section id="basic-datatable">
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="card">

                                                <table class="datatables-basic table">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th>Keterangan</th>
                                                            <th>No Projek</th>
                                                            <th>Yang Mengajukan</th>
                                                            <th>Tanggal Pengajuan</th>
                                                            <th>Yang Mengajukan</th>
                                                            <th>Kekurangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>Biaya Pulsa</td>
                                                            <td>1123</td>
                                                            <td>Marcella</td>
                                                            <td>22 Juli 2022</td>
                                                            <td>Staff operasional</td>
                                                            <td>file lampiran</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>       

                                        
@elseif ($role == 7)
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <div class="col-12">
                        <h2 class="content-header-title mt-1">
                            Dashboard</h2>
                    </div>
                    <div class="content-body">

                    </div>
                    <!-- Transaction Card -->
                    <div class="mt-2 col-lg-6 col-md-6">
                        <div class="card card-transaction text-center">
                            <div class="card-header">
                                <h4 class="card-title">Pengajuan Biasa
                                </h4>

                            </div>
                            <div class="card-body">
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-warning ">
                                            <div class="avatar-content">
                                                <i data-feather="activity"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Proses</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder">{{ $proses_staffop }}
                                    </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-danger ">
                                            <div class="avatar-content">
                                                <i data-feather="x"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Tolak</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $tolak_staffop }}</div>
                                </div>
                               
                                

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-success ">
                                            <div class="avatar-content">
                                                <i data-feather="check"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Selesai</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $selesai_staffop }}</div>
                                </div>

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-primary ">
                                            <div class="avatar-content">
                                                <i data-feather="circle"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Total</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $total_staffop }}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->
        

@elseif($role == 8) 
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay">
    </div>
    <div
        class="header-navbar-shadow">
    </div>
    <div
        class="content-wrapper container-xxl p-0">
        <div
            class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section
                id="dashboard-analytics">
                <div
                    class="row match-height">
                    <div
                        class="row match-height">
                        <div
                            class="content-header-left col-md-12 col-12 mb-2">
                            <div
                                class="row breadcrumbs-top">
                                <h2
                                    class="content-header-title float-start mb-0">
                                    Dashboard
                                </h2>

                              
                                 <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Biasa
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $masuk_manager_op  }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_manager_op  }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $tolak_manager_op  }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $selesai_manager_op  }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $total_manager_op  }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                    </div>

                                     

                            <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Project
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $masuk_project_manager_op}}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_project_manager_op }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $tolak_project_manager_op }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $selesai_project_manager_op }}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{  $total_project_manager_op }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>



@elseif($role == 9)
<div class="app-content content ">
    <div class="content-overlay">
    </div>
    <div
        class="header-navbar-shadow">
    </div>
    <div
        class="content-wrapper container-xxl p-0">
        <div
            class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section
                id="dashboard-analytics">
                <div
                    class="row match-height">
                    <div
                        class="row match-height">
                        <div
                            class="content-header-left col-md-12 col-12 mb-2">
                            <div
                                class="row breadcrumbs-top">
                                <h2
                                    class="content-header-title float-start mb-0">
                                    Dashboard
                                </h2>

                              
                                 <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Biasa
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $masuk_dirop }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_dirop  }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $tolak_dirop  }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $selesai_dirop  }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $total_dirop  }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                    </div>

                                     

                            <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Project
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $masuk_project_dirop}}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_project_dirop }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $tolak_project_dirop }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $selesai_project_dirop }}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{  $total_project_dirop }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

@elseif ($role == 1)
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <div class="col-12">
                        <h2 class="content-header-title mt-1">
                            Dashboard</h2>
                    </div>
                    <div class="content-body">

                    </div>
                    <!-- Transaction Card -->
                    <div class="mt-2 col-lg-6 col-md-6">
                        <div class="card card-transaction text-center">
                            <div class="card-header">
                                <h4 class="card-title">Pengajuan Biasa
                                </h4>

                            </div>
                            <div class="card-body">
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-warning ">
                                            <div class="avatar-content">
                                                <i data-feather="activity"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Proses</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder">{{ $proses_staff_keu }}
                                    </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-danger ">
                                            <div class="avatar-content">
                                                <i data-feather="x"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Tolak</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                     {{ $tolak_staff_keu }}</div>
                                </div>
                               
                                

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-success ">
                                            <div class="avatar-content">
                                                <i data-feather="check"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Selesai</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $selesai_staff_keu }}</div>
                                </div>

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-primary ">
                                            <div class="avatar-content">
                                                <i data-feather="circle"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Total</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $total_staff_keu }}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->

@elseif($role == 2)
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay">
    </div>
    <div
        class="header-navbar-shadow">
    </div>
    <div
        class="content-wrapper container-xxl p-0">
        <div
            class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section
                id="dashboard-analytics">
                <div
                    class="row match-height">
                    <div
                        class="row match-height">
                        <div
                            class="content-header-left col-md-12 col-12 mb-2">
                            <div
                                class="row breadcrumbs-top">
                                <h2
                                    class="content-header-title float-start mb-0">
                                    Dashboard
                                </h2>

                              
                                 <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Biasa
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $masuk_mankeu }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_mankeu }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $tolak_mankeu }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $selesai_mankeu }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">{{ $total_mankeu }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                    </div>

                                     

                            <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Project
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $masuk_project_mankeu}}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_project_mankeu }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $tolak_project_mankeu }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $selesai_project_mankeu }}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{  $total_project_mankeu }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>

@elseif($role == 3)
 <div class="app-content content ">
    <div class="content-overlay">
    </div>
    <div
        class="header-navbar-shadow">
    </div>
    <div
        class="content-wrapper container-xxl p-0">
        <div
            class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section
                id="dashboard-analytics">
                <div
                    class="row match-height">
                    <div
                        class="row match-height">
                        <div
                            class="content-header-left col-md-12 col-12 mb-2">
                            <div
                                class="row breadcrumbs-top">
                                <h2
                                    class="content-header-title float-start mb-0">
                                    Dashboard
                                </h2>


                                 <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Biasa
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            14</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">5
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            12</div>
                                    </div>
                                   
                                   
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            40</div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                    </div>


@elseif ($role == 4)
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row match-height">
                    <div class="col-12">
                        <h2 class="content-header-title mt-1">
                            Dashboard</h2>
                    </div>
                    <div class="content-body">

                    </div>
                    <!-- Transaction Card -->
                    <div class="mt-2 col-lg-6 col-md-6">
                        <div class="card card-transaction text-center">
                            <div class="card-header">
                                <h4 class="card-title">Pengajuan Biasa
                                </h4>

                            </div>
                            <div class="card-body">
                                
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-warning ">
                                            <div class="avatar-content">
                                                <i data-feather="activity"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Proses</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder">{{  $proses_staff_sdm }}
                                    </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-danger ">
                                            <div class="avatar-content">
                                                <i data-feather="x"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Tolak</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{  $tolak_staff_sdm }}</div>
                                </div>
                               
                                

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-success ">
                                            <div class="avatar-content">
                                                <i data-feather="check"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Selesai</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{  $selesai_staff_sdm }}</div>
                                </div>

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-primary ">
                                            <div class="avatar-content">
                                                <i data-feather="circle"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Total Pengajuan</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{  $total_staff_sdm }}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->

@elseif($role == 5)
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay">
    </div>
    <div
        class="header-navbar-shadow">
    </div>
    <div
        class="content-wrapper container-xxl p-0">
        <div
            class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section
                id="dashboard-analytics">
                <div
                    class="row match-height">
                    <div
                        class="row match-height">
                        <div
                            class="content-header-left col-md-12 col-12 mb-2">
                            <div
                                class="row breadcrumbs-top">
                                <h2
                                    class="content-header-title float-start mb-0">
                                    Dashboard
                                </h2>

                            
                              
                                 <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Biasa
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">{{ $masuk_manager_sdm }}
                                            </div>
                                    </div>
                                    

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder"> {{ $proses_manager_sdm }}
                                        </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $tolak_manager_sdm }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">{{ $selesai_manager_sdm }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">{{ $total_manager_sdm }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                    </div>

                                     


@elseif($role == 6)
<div class="app-content content ">
    <div class="content-overlay">
    </div>
    <div
        class="header-navbar-shadow">
    </div>
    <div
        class="content-wrapper container-xxl p-0">
        <div
            class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section
                id="dashboard-analytics">
                <div
                    class="row match-height">
                    <div
                        class="row match-height">
                        <div
                            class="content-header-left col-md-12 col-12 mb-2">
                            <div
                                class="row breadcrumbs-top">
                                <h2
                                    class="content-header-title float-start mb-0">
                                    Dashboard
                                </h2>

                              
                                 <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Biasa
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $masuk_dirkeu  }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_dirkeu  }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $tolak_dirkeu  }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $selesai_dirkeu  }}
                                            </div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{ $total_dirkeu  }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                    </div>

                                     

                            <!-- Transaction Card -->
                                <div class="mt-2 col-lg-6 col-md-6">
                                    <div class="card card-transaction">
                                        <div class="card-header">
                                            <h4 class="card-title">Pengajuan Project
                                            </h4>

                                        </div>

                                <div class="card-body">

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-primary ">
                                                <div class="avatar-content">
                                                    <i data-feather="arrow-down"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Masuk</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $masuk_project_dirkeu}}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-warning ">
                                                <div class="avatar-content">
                                                    <i data-feather="activity"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Proses</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder">{{ $proses_project_dirkeu }}
                                        </div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-danger ">
                                                <div class="avatar-content">
                                                    <i data-feather="x"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Di Tolak</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{  $tolak_project_dirkeu }}</div>
                                    </div>
                                

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="check"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Selesai</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder ">
                                            {{ $selesai_project_dirkeu }}</div>
                                    </div>

                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div
                                                class="avatar bg-light-success ">
                                                <div class="avatar-content">
                                                    <i data-feather="circle"
                                                        class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div
                                                class="transaction-percentage">
                                                <h6 class="transaction-title">
                                                    Total</h6>

                                            </div>
                                        </div>
                                        <div class="fw-bolder "> {{  $total_project_dirkeu }}
                                            </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                     
@elseif($role == 10)
 <!-- BEGIN: Content-->
 <div class="app-content content ">
    <div class="content-overlay">
    </div>
    <div
        class="header-navbar-shadow">
    </div>
    <div
        class="content-wrapper container-xxl p-0">
        <div
            class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section
                id="dashboard-analytics">
                <div
                    class="row match-height">
                    <div
                        class="row match-height">
                        <div 
                            class="content-header-left col-md-12 col-12 mb-2">
                            <div
                                class="row breadcrumbs-top">
                                <h2
                                    class="content-header-title float-start mb-0">
                                    Dashboard
                                </h2>


                                  <!-- Transaction Card -->
                    <div class="mt-2 col-lg-6 col-md-6">
                        <div class="card card-transaction text-center">
                            <div class="card-header">
                                <h4 class="card-title">Pengajuan Biasa
                                </h4>

                            </div>
                            <div class="card-body">

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-primary ">
                                            <div class="avatar-content">
                                                <i data-feather="arrow-down"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Masuk</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">{{ $masuk_dirut }}
                                        </div>
                                </div>

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-warning ">
                                            <div class="avatar-content">
                                                <i data-feather="activity"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Proses</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder">{{ $proses_dirut }}
                                    </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-danger ">
                                            <div class="avatar-content">
                                                <i data-feather="x"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Tolak</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $tolak_dirut }}</div>
                                </div>
                               
                                

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-success ">
                                            <div class="avatar-content">
                                                <i data-feather="check"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Selesai</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $selesai_dirut }}</div>
                                </div>

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-primary ">
                                            <div class="avatar-content">
                                                <i data-feather="circle"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Total</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $total_dirut }}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->

                    
                    <!-- Transaction Card -->
                    <div class="mt-2 col-lg-6 col-md-6 ">
                        <div class="card card-transaction">
                            <div class="card-header">
                                <h4 class="card-title ">Pengajuan Project
                                </h4>

                            </div>
                            <div class="card-body">
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-primary ">
                                            <div class="avatar-content">
                                                <i data-feather="arrow-down"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Masuk</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder "> {{ $masuk_project_dirut }}
                                        </div>
                                </div>

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-warning ">
                                            <div class="avatar-content">
                                                <i data-feather="activity"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Proses</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder"> {{ $proses_project_dirut }}
                                    </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-danger ">
                                            <div class="avatar-content">
                                                <i data-feather="x"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Di Tolak</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                        {{ $tolak_project_dirut }}</div>
                                </div>
                               
                              
                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-success ">
                                            <div class="avatar-content">
                                                <i data-feather="check"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Selesai</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                       {{$selesai_project_dirut}}</div>
                                </div>

                                <div class="transaction-item">
                                    <div class="d-flex">
                                        <div
                                            class="avatar bg-light-primary ">
                                            <div class="avatar-content">
                                                <i data-feather="circle"
                                                    class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div
                                            class="transaction-percentage">
                                            <h6 class="transaction-title">
                                                Total</h6>

                                        </div>
                                    </div>
                                    <div class="fw-bolder ">
                                       {{$total_project_dirut}}</div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!--/ Transaction Card -->          

                                     

@endif
@endsection

@extends('project::layouts.main')

@section('content')


@php
$projects= Modules\Project\Entities\Project::select()->get();

$proses = 0;
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

if($histori->status==4 && $histori->jabatan==7 || $histori->status==1 && $histori->jabatan==4 || 
$histori->status==1 && $histori->jabatan==3 || $histori->status==1 && $histori->jabatan==2 ||
$histori->status==1 && $histori->jabatan==1 ) { $proses++;}
}

$selesai=0;
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

if($histori->status==3) { $selesai++;}


$tolak = 0;
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

if($histori->status==2  ) { $tolak++;}
}

$total = 0;
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

$total = $tolak + $selesai + $proses;
}
}
@endphp
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
data-menu="vertical-menu-modern" data-col="">
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
        </div>
        <div class="row match-height">
           
            <div class="mt-2 col-lg-6 col-md-6">
                <div class="card card-transaction">
                    <div class="card-header">
                        <h4 class="card-title">Pengajuan Project
                        </h4>

                    </div>

            <div class="card-body justify-content-center">


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
                    <div class="fw-bolder">{{ $proses }}
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
                        {{  $tolak }}</div>
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
                        {{ $selesai }}</div>
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
                    <div class="fw-bolder "> {{  $total }}
                        </div>
                </div>
                </div>
                </div>
</body>

@endsection

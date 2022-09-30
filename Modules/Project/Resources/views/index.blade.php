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

if($histori->status==1 || $histori->status==2 || $histori->status==3 || $histori->status==4  ) { $total++;}
}

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
                   
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="activity" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $proses }}</h2>
                                <a class="card-text mb-2" href="#">Project Di Proses</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pengajuan diproses ends -->

                    <!-- kekurangan start -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card ">
                            <div class="card-header flex-column align-items-start pb-0 ">
                                <div class="avatar bg-light-danger p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="x-circle" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $tolak }}</h2>
                                <a class="card-text mb-2" href="#">Project Di Tolak</a>
                            </div>
                        </div>
                    </div>
                    <!-- kekuranganends -->

                    <!-- Pengajuan ditolak starts -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-danger p-50 m-0">
                                    <div class="avatar-content">

                                        <i data-feather="check-circle" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $selesai }}</h2>
                                <a class="card-text mb-2" href="#">Project Selesai</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pengajuan ditolak ends -->

                   

                    <!-- Total Pengajuan starts -->
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="circle" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">{{ $total }}</h2>
                                <a class="card-text mb-2" href="#" style="text-align-center">Total Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Total Pengajuan ends -->
                    {{-- <div class="col-6">
                        <div class="card">
                            <div
                                class="
                          card-header
                          d-flex
                          flex-sm-row flex-column
                          justify-content-md-between
                          align-items-start
                          justify-content-start
                        ">
                                <div>
                                    <h4 class="card-title">Statistik</h4>
                                    
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="font-medium-2" data-feather="calendar"></i>
                                    <input type="text"
                                        class="form-control flat-picker bg-transparent border-0 shadow-none"
                                        placeholder="YYYY-MM-DD" />
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="line-area-chart"></div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Line Chart Starts -->
    {{-- <div class="col-6">
        <div class="card">
          <div
            class="
              card-header
              d-flex
              flex-sm-row flex-column
              justify-content-md-between
              align-items-start
              justify-content-start
            "
          >
            <div>
              <h4 class="card-title mb-25">Balance</h4>
              <span class="card-subtitle text-muted">Commercial networks & enterprises</span>
            </div>
            <div class="d-flex align-items-center flex-wrap mt-sm-0 mt-1">
              <h5 class="fw-bolder mb-0 me-1">$ 100,000</h5>
              <span class="badge badge-light-secondary">
                <i class="text-danger font-small-3" data-feather="arrow-down"></i>
                <span class="align-middle">20%</span>
              </span>
            </div>
          </div>
          <div class="card-body">
            <div id="line-chart"></div>
          </div>
        </div>
      </div>
      <!-- Line Chart Ends -->
                </div>
            </div>
        </div> --}}
        
       
        <!-- END: Content-->
    
    </body>
@endsection

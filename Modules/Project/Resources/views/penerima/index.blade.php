@extends('project::layouts.main')

@section('content')
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body">
    </div>
    <div class="row match-height">
      <div class="col-lg-2 col-sm-6 col-12" >
        <div class="card">
          <div class="card-header flex-column align-items-start pb-0" >
            <div class="avatar bg-light-warning p-50 m-0">
              <div class="avatar-content" >
                <i data-feather="activity" class="font-medium-5"></i>
              </div>
            </div>
            <h2 class="fw-bolder mt-1" >34</h2>
            <a class="card-text mb-2" href="/project/masuk">Pengajuan Masuk</a>
          </div>
        </div>
      </div>
      <!-- Pengajuan diproses ends -->
      
      <!-- kekurangan start -->
      <div class="col-lg-2 col-sm-6 col-12">
        <div class="card ">
          <div class="card-header flex-column align-items-start pb-0 ">
            <div class="avatar bg-light-danger p-50 m-0">
              <div class="avatar-content">
                <i data-feather="x-circle" class="font-medium-5"></i>
              </div>
            </div>
            <h2 class="fw-bolder mt-1">12</h2>
            <a class="card-text mb-2" href="/project/acc">Perlu di ACC </a>
          </div>
        </div>
      </div>
      <!-- kekuranganends -->
      
      <!-- Pengajuan ditolak starts -->
      <div class="col-lg-2 col-sm-6 col-12">
        <div class="card">
          <div class="card-header flex-column align-items-start pb-0">
            <div class="avatar bg-light-danger p-50 m-0">
              <div class="avatar-content">
                
                <i data-feather="check-circle" class="font-medium-5"></i>
              </div>
            </div>
            <h2 class="fw-bolder mt-1">22</h2>
            <a class="card-text mb-2" href=/project/tolak>Pengajuan Di Tolak</a>
          </div>
        </div>
      </div>
      <!-- Pengajuan ditolak ends -->
      
      <!-- Pengajuan Selesai starts -->
      <div class="col-lg-2 col-sm-6 col-12">
        <div class="card">
          <div class="card-header flex-column align-items-start pb-0">
            <div class="avatar bg-light-success p-50 m-0">
              <div class="avatar-content">
                <i data-feather="alert-triangle" class="font-medium-5"></i>
              </div>
            </div>
            <h2 class="fw-bolder mt-1">78</h2>
            <a class="card-text mb-2" href=/project/revisi>Pengajuan Di Revisi</a>
          </div>
        </div>
      </div>
      <!-- Pengajuan Selesai ends -->
      
      <!-- Total Pengajuan starts -->
      <div class="col-lg-4 col-sm-6 col-12">
        <div class="card">
          <div class="card-header flex-column align-items-start pb-0">
            <div class="avatar bg-light-primary p-50 m-0">
              <div class="avatar-content">
                <i data-feather="circle" class="font-medium-5"></i>
              </div>
            </div>
            <h2 class="fw-bolder mt-1">250</h2>
            <a class="card-text mb-2" href=/project/terima style="text-align-center">Pengajuan Di Terima</a>
          </div>
        </div>
      </div>
<!-- Total Pengajuan ends -->
        <div class="row match-height">
          <!-- Company Table Card -->
           <!-- Line Chart Starts -->
    <div class="col-12">
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
            <h4 class="card-title mb-25">Statistic</h4>
          </div>
          <div class="d-flex align-items-center flex-wrap mt-sm-0 mt-1">
         
          </div>
        </div>
        <div class="card-body">
          <div id="line-chart"></div>
        </div>
      </div> 
    </div>
    <!-- Line Chart Ends -->
    
        
@endsection
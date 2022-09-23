@extends('pengajuan::layouts.main')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
<div class="row match-height">
  <div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-start mb-0">Pengajuan Di Tolak</h2>
        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"> Approval Pengajuan</a>
            </li>
            <li class="breadcrumb-item active">Pengajuan Di Tolak</a>
            </li>
          </ol>
        </div>
      </div>
    </div>

<!-- List DataTable -->
<section id="basic-datatable">
  <div class="row">
  <div class="col-12 mt-2">
    <div class="card">
     
      <table class="datatables-basic table">
            <thead>
              <tr>
                <th></th>
                <th>No</th>
                <th>Keterangan</th>
                <th>No Projek</th>
                <th>Yang Mengajukan</th>
                <th>Jumlah</th>
                <th>Tanggal Pengajuan</th>
                <th>Divisi</th>
                <th>Posisi Penolakan</th>
                <th>Action</th>
              </tr>
            </thead> 
            <tbody> 
              <tr> 
                <td></td>
                <td>No</td>
                <td>Keterangan</td>
                <td>No Projek</td>
                <td>Yang Mengajukan</td>
                <td>Jumlah</td>
                <td>Tanggal Pengajuan</td>
                <td>Divisi</td>
                <td>Posisi </td>
                <td>Action</td>
              </tr>
            </tbody>
  
          </table>
        </div>
      </div>
    </div>

@endsection
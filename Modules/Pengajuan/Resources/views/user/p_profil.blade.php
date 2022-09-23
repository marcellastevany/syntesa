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
          <h2 class="content-header-title float-start mb-0">Edit User</h2>
          <div class="breadcrumb-wrapper">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"> Home</a>
              </li>
              <li class="breadcrumb-item active"><a href="#">Edit User</a>
              </li>
            </ol>
          </div>
        </div>
      </div>

 <!-- BEGIN: Content-->
      <div class="content-body ">
        <section class="app-user-view-account">
<div class="row">
  <!-- User Sidebar -->
  <div class="Col-5 mb-0">
    <!-- User Card -->
    <div class="card">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class="d-flex align-items-center flex-column">
            <img
              class="img-fluid rounded mt-3 mb-2"
              src="../../../app-assets/images/portrait/small/avatar-s-2.jpg"
              height="210"
              width="210"
              alt="User avatar"
            />
            <div class="user-info text-cente0r">
              <h4>Admin</h4>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around mb-0 my-2 pt-75">
          <div class="d-flex align-items-start">
          </div>
        </div>
        <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-75">
              <span class="fw-bolder me-25">Nama:</span>
              <span>Violita</span>
            </li>
            <li class="mb-75">
              <span class="fw-bolder me-25">Jabatan:</span>
              <span>Admin</span>
            </li>
            <li class="mb-75">
              <span class="fw-bolder me-25">Divisi:</span>
              <span>Operasional</span>
            </li>
            <li class="mb-75">
              <span class="fw-bolder me-25">Email:</span>
              <span>violita@gmail.com</span>
            </li>
            <li class="mb-75">
              <span class="fw-bolder me-25">No Telp:</span>
              <span>08965xxxxx</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center pt-2">
            <a href="javascript:;" class="btn btn-primary me-1" data-bs-target="#editUser" data-bs-toggle="modal">
              Edit
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card -->
</div>
</div>
</div>

@endsection
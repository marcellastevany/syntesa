@extends('pengajuan::layouts.main')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Pengajuan Projek</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Buat Pengajuan</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Pengajuan Projek </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modern Horizontal Wizard -->
                <section class="modern-horizontal-wizard">
                    <div class="bs-stepper wizard-modern modern-wizard-example">
                        <form method="POST" action="/pengajuan/pengajuanProjek" enctype="multipart/form-data">
                            @csrf
                            <div class="bs-stepper-header">
                            <div class="step" data-target="#account-details-modern" role="tab"
                                id="account-details-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="edit" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Form Pengajuan</span>
                                        <span class="bs-stepper-subtitle">Add Form Pengajuan</span>
                                    </span>
                                </button>
                            </div>

                        </div>
                        <div class="bs-stepper-content">
                            <div id="account-details-modern" class="content" role="tabpanel"
                                aria-labelledby="account-details-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Form Pengajuan</h5>

                                </div>
                                <div class="row">
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="no_projek">No Projek</label>
                                        <input type="text" id="no_projek" name="no_projek" class="form-control" />
                                    </div>

                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="keterangan">Keterangan</label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control" />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="jumlah">Jumlah</label>
                                        <input type="text" id="jumlah" name="jumlah" class="form-control numeral-mask" />
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="tanggal">Tanggal</label>
                                        <input type="text" id="tanggal" name="tanggal" class="form-control pickadate"
                                        placeholder="18 June, 2022"/>
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="divisi">Divisi</label>
                                        <select class="form-select" id="divisi" name="divisi" required>
                                            <option value="">Divisi</option>
                                            <option value="SDM dan Umum">SDM dan Umum</option>
                                            <option value="Operasional">Operasional</option>
                                            <option value="Keuangan">Keuangan</option>
                                        </select>
                                    </div>
                                    <div class="mb-1 col-md-12">
                                        <label class="d-block form-label" for="catatan">Catatan</label>
                                        <textarea class="form-control" id="catatan" name="catatan" placeholder="Catatan" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-2">
                                <button class="btn btn-success btn-submit">Ajukan</button>
                            </form>

                               
        </div>
    </div>

    </div>
    </div>
    </section>
    <!-- /Modern Horizontal Wizard -->
@endsection

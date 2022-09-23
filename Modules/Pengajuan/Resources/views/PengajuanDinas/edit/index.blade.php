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
                            <h2 class="content-header-title float-start mb-0">Edit Pengajuan Dinas</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Revisi Pengajuan</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Edit Pengajuan Dinas </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


               
                <!-- Modern Horizontal Wizard -->
                <section class="modern-horizontal-wizard">
                    <div class="bs-stepper wizard-modern modern-wizard-example">
                        <form method="POST" action="/pengajuan/pengajuanDinas" enctype="multipart/form-data">
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
                            <div class="line">
                                <i data-feather="chevron-right" class="font-medium-2"></i>
                            </div>
                            <div class="step" data-target="#personal-info-modern" role="tab"
                                id="personal-info-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-box">
                                        <i data-feather="file-text" class="font-medium-3"></i>
                                    </span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Form Lampiran</span>
                                        <span class="bs-stepper-subtitle">Add Form Lampiran</span>
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
                                        <label class="form-label" for="no_surat">No Surat Perjalanan Dinas</label>
                                        <input type="intiger" id="no_surat" name="no_surat" class="form-control numeral" />
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
                                    <button class="btn btn-outline-secondary btn-prev" disabled>
                                        <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Prev</span>
                                    </button>
                                    <a class="btn btn-primary btn-next " type="button">
                                        <span class="align-middle d-sm-inline-block d-none">Next</span>
                                        <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                    </a>
                                </div>

                            </div>
                            <div id="personal-info-modern" class="content" role="tabpanel"
                                aria-labelledby="personal-info-modern-trigger">
                                <div class="content-header">
                                    <h5 class="mb-0">Form Lampiran</h5>

                                </div>
                                <div class="content-body">
                                    <section class="form-control-repeater">

                                        <!-- Invoice repeater -->
                                        <div class="row">
                                            <div class="invoice-repeater">
                                                <div data-repeater-list="lampiran">
                                                    <div data-repeater-item>
                                                        <div class="row d-flex align-items-end">

                                                            <div class="col-md-5 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="note_lampiran"
                                                                        >Keterangan</label>
                                                                    <input type="text" class="form-control"
                                                                        id="note_lampiran" name="note_lampiran"/>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-5 col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label" for="lampiran"
                                                                        name="">Simpan File disini</label>
                                                                    <input class="form-control" type="file"
                                                                        id="lampiran" name="lampiran" />
                                                                </div>
                                                            </div>

                                                            <div class="col-md-2 col-12 mb-50">
                                                                <div class="mb-1">
                                                                    <button
                                                                        class="btn btn-outline-danger text-nowrap px-1"
                                                                        data-repeater-delete type="button">
                                                                        <i data-feather="x" class="me-25"></i>
                                                                        <span>Hapus</span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button class="btn btn-icon btn-primary" type="button"
                                                            data-repeater-create>
                                                            <i data-feather="plus" class="me-25"></i>
                                                            <span>Tambah</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                
                                                <div class="d-flex justify-content-between  mt-2">

                                                    <button class="btn btn-outline-primary btn-prev">
                                                        <i data-feather="arrow-left"
                                                            class="align-middle me-sm-25 me-0 "></i>
                                                        <span class="align-middle d-sm-inline-block d-none">Prev</span>
                                                    </button>
                                                    <button class="btn btn-success btn-submit">Ajukan Kembali</button>
                                                </div>

                                            </form>
                    
                                        </div>
                                    </section>
                                 </div>
        </div>
    </div>


   
    <!-- /Modern Horizontal Wizard -->
@endsection

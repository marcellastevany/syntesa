@extends('layouts.main')


@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        <div class="content-wrapper ">


            <div class="content-body">


                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Developer Meetup Card -->
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="https://pixinvent.com/demo/vuexy-bootstrap-laravel-admin-template/demo-5/images/illustration/email.svg"
                                        alt="Meeting Pic" height="170" />
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">
                                            <h6 class="mb-0">THU</h6>
                                            <h3 class="mb-0">24</h3>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">Deadline Web</h4>
                                            <p class="card-text mb-0">Progres Back End</p>
                                        </div>
                                    </div>
                                    <div class="mt-0">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Sat, May 25, 2020</h6>
                                            <small>10:AM to 6:PM</small>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="avatar float-start bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="more-info">
                                            <h6 class="mb-0">Central Park</h6>
                                            <small>Manhattan, New york City</small>
                </section>
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">Menu Utama</h2>
                        </div>
                    </div>
                </div>
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="/pengajuan">
                                    <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                        alt="knowledge-base-image" />

                                    <div class="card-body text-center">
                                        <h4>E-Pengajuan</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Membuat Pengajuan
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="/absen">
                                    <img src="../../../app-assets/images/illustration/marketing.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Absensi</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Record Absensi
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="/surat">
                                    <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Penyuratan</h4>
                                        <p class="text-body mt-1 mb-0">Membuat Surat</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="/inventory">
                                    <img src="../../../app-assets/images/illustration/personalization.svg"
                                        class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Inventory</h4>
                                        <p class="text-body mt-1 mb-0">Record Inventory</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="/project">
                                    <img src="../../../app-assets/images/illustration/email.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>LR</h4>
                                        <p class="text-body mt-1 mb-0">-</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                </section>
            @endsection

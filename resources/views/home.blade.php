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
                                            <h4 class="card-title mb-25">Developer Meetup</h4>
                                            <p class="card-text mb-0">Meet world popular developers</p>
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
                            <h2 class="content-header-title mb-0">Pengaturan Sistem</h2>
                        </div>
                    </div>
                </div>
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                        alt="knowledge-base-image" />

                                    <div class="card-body text-center">
                                        <h4>Pengaturan Kantor</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Menambahkan Dan Menghapus Kantor
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/marketing.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Pengaturan User</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Custom dan Penutupan Akun
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Pengaturan Sub-Admin</h4>
                                        <p class="text-body mt-1 mb-0">Menambahkan Dan Menutup Akun Sub-admin</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">

                                <img src="../../../app-assets/images/illustration/personalization.svg" class="card-img-top"
                                    alt="knowledge-base-image" />
                                <div class="card-body text-center">
                                    <h4>Pengaturan Pengajuan</h4>
                                    <a class="text-body mt-1 mb-0" href="/admin/index">Atur Alur Pengajuan</a>
                                </div>

                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/email.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Pengaturan Pengajihan </h4>
                                        <p class="text-body mt-1 mb-0">Custom Penggajihan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                </section>
                <div class="content-overlay"></div>
                <div class="header-navbar-shadow"></div>
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="col-12">
                            <h2 class="content-header-title mb-0">Record Sistem</h2>
                        </div>
                    </div>
                </div>
                <section id="knowledge-base-content">
                    <div class="row kb-search-content-info match-height">
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/sales.svg" class="card-img-top"
                                        alt="knowledge-base-image" />

                                    <div class="card-body text-center">
                                        <h4>Record Absensi</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Lihat Rekap Absensi Pegawai
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- marketing -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/marketing.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Record Pengajuan</h4>
                                        <p class="text-body mt-1 mb-0">
                                            Custom dan Penutupan Akun
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- api -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/api.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Record Penggajihan</h4>
                                        <p class="text-body mt-1 mb-0">Menambahkan Dan Menutup Akun Sub-admin</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- personalization -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/personalization.svg"
                                        class="card-img-top" alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Record Inventory</h4>
                                        <p class="text-body mt-1 mb-0">Atur Alur Pengajuan</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- email -->
                        <div class="col-md-3 col-sm-6 col-12 kb-search-content">
                            <div class="card">
                                <a href="page-kb-category.html">
                                    <img src="../../../app-assets/images/illustration/email.svg" class="card-img-top"
                                        alt="knowledge-base-image" />
                                    <div class="card-body text-center">
                                        <h4>Record Surat </h4>
                                        <p class="text-body mt-1 mb-0">Custom Penggajihan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                </section>
                <!-- Knowledge base ends -->

            </div>
        </div>
    </div>
@endsection

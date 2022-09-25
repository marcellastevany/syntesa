@if ($role == 100)
    <!-- Admin-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand"
                        href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                        </span>
                        <h2 class="brand-text">E-Pengajuan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="approval">Approval Pengajuan</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/pengajuan/diproses"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="proses">Pengajuan Di Proses</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/selesai"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="selesai">Pengajuan Selesai</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/ditolak"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="tolak">Pengajuan Di Tolak</span></a>
                        </li>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/revisi"><i
                            data-feather="circle"></i><span class="menu-title text-truncate" data-i18n="revisi">Revisi
                            Pengajuan</span></a>
                </li>
            </ul>
            </li>


            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama </span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                        data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="surat">Surat
                        Menyurat</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="masuk">Surat Masuk</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="keluar">Surat Keluar</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="edaran">Surat Edaran</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="perjalanan">Surat Perjalanan
                                Dinas</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="tugaskeluar">Surat Tugas
                                Keluar</span></a>
                    </li>
                </ul>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/ppegawai"><i
                        data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="user">User</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> User </span><i
                    data-feather="more-horizontal"></i>
            </li>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/pprofil"><i
                        data-feather="user"></i><span class="menu-title text-truncate"
                        data-i18n="user">Profile</span></a>
            </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
@elseif ($role == 7)
    <!-- staff travel-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama </span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i
                            data-feather="circle"></i><span class="menu-title text-truncate"
                            data-i18n="buatpengajuan"> Pengajuan Biasa</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanbiasa"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="buatpengajuan">Buat Pengajuan</span></a>
                        </li>
                        {{-- <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/create"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuanbiasa">Lihat Pengajuan</span></a>
                        </li> --}}
                        {{-- <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanbiasa/show"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="lampiranpengajuanbiasa">Lampiran</span></a>
                        </li> --}}
                        <li><a class="d-flex align-items-center" href="/pengajuan/diproses/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuanproses">Pengajuan Di Proses</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/selesai/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuanselesai">Pengajuan Selesai</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/ditolak/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuantolak">Pengajuan Di Tolak</span></a>
                        </li>


                    </ul>





        </div>
    </div>
    <!-- END: Main Menu-->
@elseif ($role == 8)
    <!-- manager travel-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                                data-feather="circle"></i><span class="menu-title text-truncate"
                                data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/masuk/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/diproses/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/selesai/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/ditolak/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>


                        </ul>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"
                            href="#"><i data-feather="circle"></i><span
                                class="menu-title text-truncate" data-i18n="surat">Pengajuan Project</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/projek_masuk/"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_proses"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_selesai"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_tolak"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>


                        </ul>
                    </li>
                </ul>
            </ul>

        </div>
    </div>



    <!-- END: Main Menu-->
@elseif($role == 9)
    <!-- Direktur Operasional-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate"
                                data-i18n="pengajuanbiasa">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/masuk/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/diproses/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/selesai/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/ditolak/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>


                        </ul>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"
                        href="#"><i data-feather="circle"></i><span
                            class="menu-title text-truncate" data-i18n="surat">Pengajuan Project</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center"
                                href="/pengajuan/projek_masuk"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                    Masuk</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_proses"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pproses">Pengajuan Di
                                    Proses</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_selesai"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pselesai">Pengajuan
                                    Selesai</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_tolak"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="ptolak">Pengajuan Di
                                    Tolak</span></a>
                        </li>


                    </ul>
                </li>
                </ul>
            </ul>

        </div>
    </div>



    <!-- END: Main Menu-->
@elseif ($role == 1)
    <!-- staff keuangan-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama </span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i
                            data-feather="circle"></i><span class="menu-title text-truncate"
                            data-i18n="buatpengajuan"> Pengajuan Biasa</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanbiasa"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="buatpengajuan">Buat Pengajuan</span></a>
                        </li>

                        {{-- <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                         data-feather="circle"></i><span class="menu-item text-truncate"
                         data-i18n="lampiranpengajuanbiasa">Lampiran</span></a>
                     </li> --}}
                        <li><a class="d-flex align-items-center" href="/pengajuan/diproses/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuanproses">Pengajuan Di Proses</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/selesai/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuanselesai">Pengajuan Selesai</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/ditolak/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuantolak">Pengajuan Di Tolak</span></a>
                        </li>


                    </ul>
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> PENCAIRAN </span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i
                            data-feather="circle"></i><span class="menu-title text-truncate" data-i18n="pencairan">
                            Pengajuan Biasa</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center"
                                href="/pengajuan/pencairan/create"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan Masuk
                                </span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/pencairan"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pmasuk">Pengajuan Selesai
                                </span></a>
                        </li>

                    </ul>
                </li>

                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i
                    data-feather="circle"></i><span class="menu-title text-truncate" data-i18n="pencairan">
                    Pengajuan Project</span></a>
            <ul class="menu-content">
                <li class=" nav-item"><a class="d-flex align-items-center"
                        href="/pengajuan/cairproject/show"><i data-feather="circle"></i><span
                            class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan Masuk
                        </span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/cairproject"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pmasuk">Pengajuan Selesai
                        </span></a>
                </li>

            </ul>
        </li>
        </div>
    </div>
    <!-- END: Main Menu-->
@elseif ($role == 2)
    <!-- manager keuangan-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"><i data-feather="circle"></i><span
                                class="menu-title text-truncate" data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/masuk/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/diproses/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/selesai/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/ditolak/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>



                        </ul>
                    </li>
 <li class=" nav-item"><a class="d-flex align-items-center"
                            href="#"><i data-feather="circle"></i><span
                                class="menu-title text-truncate" data-i18n="surat">Pengajuan Project</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/projek_masuk/"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_proses"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_selesai"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_tolak"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>




                </ul>
                </li>
            </ul>
            </ul>

        </div>
    </div>



    <!-- END: Main Menu-->
@elseif($role == 3)
    <!-- Direktur Umum dan Keuangan-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center"
                        href="#"><i data-feather="circle"></i><span
                            class="menu-title text-truncate" data-i18n="surat">Pengajuan Project</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center"
                                href="/pengajuan/projek_masuk/"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                    Masuk</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_proses"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pproses">Pengajuan Di
                                    Proses</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_selesai"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pselesai">Pengajuan
                                    Selesai</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_tolak"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="ptolak">Pengajuan Di
                                    Tolak</span></a>
                        </li>

                    {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate"
                                data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/masuk/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/diproses/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/selesai/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/ditolak/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>


                        </ul>
                    </li> --}}


                </ul>
                </li>
            </ul>
            </ul>

        </div>
    </div>
@elseif ($role == 4)
    <!-- staff SDM dan Umum-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama </span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center"><i data-feather="circle"></i><span
                            class="menu-title text-truncate" data-i18n="buatpengajuan"> Pengajuan Biasa</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanbiasa"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="buatpengajuan">Buat Pengajuan</span></a>
                        </li>
                        {{-- <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/create"><i
                          data-feather="circle"></i><span class="menu-item text-truncate"
                          data-i18n="pengajuanbiasa">Lihat Pengajuan</span></a>
                      </li>
                      <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                          data-feather="circle"></i><span class="menu-item text-truncate"
                          data-i18n="lampiranpengajuanbiasa">Lampiran</span></a>
                      </li> --}}
                        <li><a class="d-flex align-items-center" href="/pengajuan/diproses/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuanproses">Pengajuan Di Proses</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/selesai/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuanselesai">Pengajuan Selesai</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/ditolak/show"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuantolak">Pengajuan Di Tolak</span></a>
                        </li>


                    </ul>





        </div>
    </div>
    <!-- END: Main Menu-->
@elseif ($role == 5)
    <!-- manager SDM dan Umum-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"><i data-feather="circle"></i><span
                                class="menu-title text-truncate" data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/masuk/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/diproses/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/selesai/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/ditolak/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>


                            


                        </ul>
                    </li>





                </ul>
                </li>
            </ul>
            </ul>

        </div>
    </div>



    <!-- END: Main Menu-->
@elseif($role == 6)
    <!-- Direktur SDM dan Umum-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"><i data-feather="circle"></i><span
                                class="menu-title text-truncate" data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/masuk/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/diproses/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/selesai/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/ditolak/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>


                        </ul>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"
                        href="#"><i data-feather="circle"></i><span
                            class="menu-title text-truncate" data-i18n="surat">Pengajuan Project</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center"
                                href="/pengajuan/projek_masuk/"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                    Masuk</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_proses"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pproses">Pengajuan Di
                                    Proses</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_selesai"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pselesai">Pengajuan
                                    Selesai</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_tolak"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="ptolak">Pengajuan Di
                                    Tolak</span></a>
                        </li>


                </ul>
                </li>



                </ul>
                </li>
            </ul>
            </ul>

        </div>
    </div>



    <!-- END: Main Menu-->
@elseif($role == 10)
    <!-- Direktur Utama-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                        <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png"
                            width="20%" alt="Logo Sayaga">


                        <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>

                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                data-feather="circle"></i><span class="menu-title text-truncate"
                                data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/masuk/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/diproses/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/selesai/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/ditolak/show"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>


                        </ul>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"
                        href="#"><i data-feather="circle"></i><span
                            class="menu-title text-truncate" data-i18n="surat">Pengajuan Project</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item"><a class="d-flex align-items-center"
                                href="/pengajuan/projek_masuk/"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                    Masuk</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_proses"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pproses">Pengajuan Di
                                    Proses</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_selesai"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pselesai">Pengajuan
                                    Selesai</span></a>
                        </li>
                        <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/projek_tolak"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="ptolak">Pengajuan Di
                                    Tolak</span></a>
                        </li>


                </ul>
                </li>
            </ul>
            </ul>

        </div>
    </div>



    <!-- END: Main Menu-->
@endif

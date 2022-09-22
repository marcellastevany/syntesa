
<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Print</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-invoice-print.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body  class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="invoice-print p-2">
            <section class="invoice-preview-wrapper">
                <div class="row invoice-preview">
                    <!-- Invoice -->
                    <div class="">
                        <div class="invoice p-3 mb-3">
                            <div class="card-body invoice-padding pb-0">
                                <!-- Header starts -->
                                <div
                                    class="d-flex justify-content-center flex-md-row flex-column invoice-spacing mt-0">
                                    <div>

                                        <div class="logo-wrapper">
                                            @foreach ($projects as $project)
                                                <h3 class="text" style="text-align:center">PT SAYAGA WISATA BOGOR
                                                </h3>
                                                <h3 class="text" style="text-align:center">
                                                    {{ $project->nama_project }}
                                                </h3>
                                                <h3 class="text" style="text-align:center">No. Project :
                                                    {{ $project->no_project }}</h3>
                                            @endforeach
                                        </div>

                                    </div>

                                </div>
                                <!-- Header ends -->
                            </div>

                            <hr class="invoice-spacing" />

                            <!-- Invoice Description starts -->
                            <h4 class="card-title" style="text-align:center">Biaya</h4>
                            <div class=" table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Item</th>
                                            <th>Ket. Jumlah</th>
                                            <th>Ket. Waktu</th>
                                            <th>Biaya</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if (!empty($biayas))
                                            @foreach ($biayas as $biaya)
                                                {{-- @php
                                       $project = Modules\Pengajuan\Entities\Project::select()
                                                ->where('id', $biaya->id)
                                                ->get()
                                                ->first();                                                    
                                    @endphp --}}
                                                <tr>
                                                    <td>{{ $biaya->kategori }} </td>
                                                    <td> {{ $biaya->item }}</td>
                                                    <td>{{ $biaya->jumlah }} </td>
                                                    <td>{{ $biaya->waktu }} </td>
                                                    <td>{{ $biaya->biaya_satuan }} </td>
                                                    <td>{{ $biaya->total_biaya }} </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="py-1">Jumlah</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ $jumlah_biaya }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            {{-- <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="py-1">Jumlah</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div> --}}
                            <!-- Invoice Description ends -->
                            <h4 class="card-title text-center mt-2" style="text-align:center">Pendapatan</h4>
                            <div class="table-responsive">
                                <table class="table table-striped" >
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Item</th>
                                            <th>Ket. Jumlah</th>
                                            <th>Ket. Waktu</th>
                                            <th>Pendapatan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($pendapatans))
                                            @foreach ($pendapatans as $pendapatan)
                                                {{-- @php
                                   $project = Modules\Pengajuan\Entities\Project::select()
                                            ->where('id', $biaya->id)
                                            ->get()
                                            ->first();                                                    
                                @endphp --}}
                                                <tr>
                                                    <td>{{ $pendapatan->kategori }} </td>
                                                    <td> {{ $pendapatan->item }}</td>
                                                    <td>{{ $pendapatan->jumlah }} </td>
                                                    <td>{{ $pendapatan->waktu }} </td>
                                                    <td>{{ $pendapatan->pendapatan_satuan }} </td>
                                                    <td>{{ $pendapatan->total_pendapatan }} </td>

                                                </tr>
                                            @endforeach
                                        @endif
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr style="background-color">
                                            <th class="py-1">Jumlah</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>{{ $jumlah_pendapatan }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-5">
                                </div>
                                <!-- /.col -->
                                <div class="col-7">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <br>
                                            <tr>
                                                <th class="py-1">Laba</th>
                                                <th class=text-right>:</th>
                                                <td class=text-left>{{ $laba }}</td>
                                            </tr>
                                            <tr>
                                                <th class="py-1">Persentase</th>
                                                <th class=text-right>:</th>
                                                <td class=text-left>{{ $persentase }} %</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div>
                                <div class="filter-container p-0 row">
                                    <div class="filtr-item col-sm-2 py-1" data-category="1"
                                        data-sort="white sample">
                                        <p style="class=text-left">Diajukan Oleh :</p>
                                        <p style="class=text-left">Marcella</p>
                                    </div>

                                    <div class="filtr-item col-sm-2 py-1">
                                        <p style="class=text-left">Disetujui Oleh :</p>
                                        <p style="class=text-left">Marcella</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Invoice -->

                        </div>
                    </div>
            </section>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-invoice-print.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>
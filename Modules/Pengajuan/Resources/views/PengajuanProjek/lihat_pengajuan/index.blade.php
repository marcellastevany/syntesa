@extends('pengajuan::layouts.main')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Lihat Pengajuan Projek</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Lihat pengajuan Projek
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>

                                            <th>No</th>
                                            <th>No Projek</th>
                                           
                                            <th>Keterangan</th>  
                                            <th>Jumlah</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Divisi</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($pengajuanprojeks as $pengajuanprojek)
                                        <tr>
                                            <td></td>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengajuanprojek->no_projek }}</td>
                                            <td>{{ $pengajuanprojek->keterangan }}</td>
                                            <td>{{ $pengajuanprojek->jumlah }}</td>
                                            <td>{{ $pengajuanprojek->tanggal }}</td>
                                            <td>{{ $pengajuanprojek->divisi }}</td>
                                            <td>{{ $pengajuanprojek->catatan }}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                </section>
            </div>
        </div>
    </div>
@endsection

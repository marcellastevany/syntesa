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
                            <h2 class="content-header-title float-start mb-0">Lihat Pengajuan Dinas</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Lihat pengajuan Dinas
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
                                            <th>No Surat</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Divisi</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($pengajuandinass as $pengajuandinas)
                                        <tr>
                                            <td></td>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengajuandinas->no_surat }}</td>
                                            <td>{{ $pengajuandinas->keterangan }}</td>
                                            <td>{{ $pengajuandinas->jumlah }}</td>
                                            <td>{{ $pengajuandinas->tanggal }}</td>
                                            <td>{{ $pengajuandinas->divisi }}</td>
                                            <td>{{ $pengajuandinas->catatan }}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                </section>
            </div>
        </div>
    </div>
@endsection

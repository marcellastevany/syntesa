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
                            <h2 class="content-header-title float-start mb-0">History</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Menu Utama</a>
                                    </li>
                                    <li class="breadcrumb-item active">History
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
                                            <th>Keterangan</th>
                                            <th>Status</th>
                                            <th>Yang Mengajukan</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($historis as $histori)
                                       @php
                                           $pengajuan_biasa = Modules\Pengajuan\Entities\pengajuanBiasa::select()
                                                    ->where('id', $histori->pengajuan_biasa_id)
                                                    
                                                    ->get()
                                                    ->first();                                                    
                                        @endphp
                                            <tr>
                                                <td></td>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $histori ->keterangan}}</td>
                                                <td>{{ $histori->status }}</td>
                                                <td>{{ $histori->user_id }}</td>
                                                <td>{{ $histori->catatan}}</td>
                                              
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                </section>
            </div>
        </div>
    </div>
@endsection

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
                            <h2 class="content-header-title float-start mb-0">Lihat Pengajuan Biasa</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Pengajuan Biasa</a>
                                    </li>
                                    <li class="breadcrumb-item active">Lihat pengajuan Biasa
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
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Divisi</th>
                                            <th>Catatan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanbiasas as $pengajuanbiasa)
                                        
                                        @php
                                        $historipengajuanbiasa = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
                                            ->where('pengajuan_biasa_id', $pengajuanbiasa->id)
                                            ->orderby('created_at')
                                            ->get()
                                            ->first();
                                         @endphp
                                    
                                            <tr>
                                                <td></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pengajuanbiasa->kategoripengajuan }}</td>
                                                <td>{{ $pengajuanbiasa->keterangan }}</td>
                                                <td>{{ $pengajuanbiasa->jumlah }}</td>
                                                <td>{{ $pengajuanbiasa->tanggal }}</td>
                                                <td>{{ $pengajuanbiasa->divisi }}</td>
                                                <td>{{ $pengajuanbiasa->catatan }}</td> 
                                                <td></td>
                                            
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                </section>
            </div>
        </div>
    </div>
@endsection

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
                            <h2 class="content-header-title float-start mb-0">Pengajuan Selesai</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Pengajuan Biasa</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Pengajuan Selesai </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- List DataTable -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="card">

                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th style="text-align: center">No</th>
                                            <th style="text-align: center">kategori</th>
                                            <th style="text-align: center">Keterangan</th>
                                            <th style="text-align: center">Jumlah</th>
                                            <th style="text-align: center">Tanggal Pengajuan</th>
                                            <th style="text-align: center">Divisi</th>
                                            <th style="text-align: center">Waktu Aksi</th>
                                            <th style="text-align: center">Status</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanbiasas as $pengajuanbiasa)

                                        @php
                                         $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
                                            ->where('pengajuan_biasa_id', $pengajuanbiasa->id)
                                            ->orderby('created_at','desc')
                                            ->get()
                                            ->first();

                                        $pengajuan_biasa =  Modules\Pengajuan\Entities\PengajuanBiasa::select()
                                            ->where('id', $histori->pengajuan_biasa_id)
                                            ->get()
                                            ->first();

                                        $user = App\Models\User::select()
                                            ->where('id', $pengajuan_biasa->user_id)
                                            ->get()
                                            ->first();

                                        $kategori = Modules\Pengajuan\Entities\kategori_pengajuan::select()
                                            ->where('kategori', $pengajuan_biasa->kategori)
                                            ->get()
                                            ->first();

                                        $divisi = Modules\Pengajuan\Entities\Divisi::select()
                                            ->where('divisi', $pengajuan_biasa->divisi)
                                            ->get()
                                            ->first();

                                        $status = Modules\Pengajuan\Entities\StatusPengajuan::select()
                                            ->where('status', $histori->status)
                                            ->get()
                                            ->first();

                                        $jabatan = Modules\Pengajuan\Entities\KeteranganJabatan::select()
                                          ->where('jabatan', $histori->jabatan)
                                          ->get()
                                          ->first();
                                        
                                        
                                         @endphp

                                         @if ($status->status==3 )
                                        <tr>
                                            <td></td>

                                            <td style="text-align: center">{{ $loop->iteration }}</td>

                                           
                                            <td style="text-align: center"> <span class="badge rounded-pill badge-light-primary">{{ $kategori->keterangan }} </span> </td>

                                            
                                            <td>{{ $pengajuanbiasa->keterangan }}</td>
                                            <td>{{ $pengajuanbiasa->jumlah }}</td>
                                            <td>{{ $pengajuanbiasa->tanggal }}</td>
                                           
                                            <td>{{ $divisi->keterangan }}</td>
                                            <td>{{ $histori->updated_at  }}</td>
                                            <td style="text-align: center">
                                                <span class="badge badge-glow bg-success"> {{ $status->keterangan }}</span> 
                                            </td> 

                                            <td>
                                                <div class="demo-inline-spacing">
                                                    <a type="button" class="btn btn-outline-primary round"
                                                            href="{{ url('pengajuan/histori/' . $pengajuanbiasa->id)}}">Detail</a>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                @endsection

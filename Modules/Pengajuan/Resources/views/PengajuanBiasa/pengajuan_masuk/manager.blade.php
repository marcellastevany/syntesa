@extends('pengajuan::layouts.main')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">

                {{-- @if (Session::has('berhasil'))
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Berhasil</h4>
                    <div class="alert-body">
                        {{ session('berhasil') }}
                    </div>
                </div>
                @elseif (Session::has('tolak'))
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Berhasil</h4>
                    <div class="alert-body">
                        {{ session('tolak') }}
                    </div>
                </div>
                @endif --}}

                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Pengajuan Masuk</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> Pengajuan Biasa</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Pengajuan Masuk </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <div class="card">

                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>

                                            <th></th>
                                            <th style="text-align: center">No</th>
                                            <th style="text-align: center">Kategori</th>
                                            <th style="text-align: center">Keterangan</th>
                                            <th style="text-align: center">Jumlah</th>
                                            <th style="text-align: center">Tanggal Pengajuan</th>
                                            <th style="text-align: center">Yang Mengajukan</th>
                                            <th style="text-align: center">Divisi</th>
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

                                      $kategori = Modules\Pengajuan\Entities\kategori_pengajuan::select()
                                          ->where('kategori', $pengajuan_biasa->kategori)
                                          ->get()
                                          ->first();
                                      $user = App\Models\User::select()
                                          ->where('id', $pengajuan_biasa->user_id)
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

                                      @if ($histori->status==4)
                                            <tr>
                
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-icon btn-icon btn-flat-success">
                                                        <i data-feather="eye"></i>
                                                    </button>
                                                </td>

                                                <td>{{ $loop->iteration }}</td>

                                                @if ($kategori->kategori==1)
                                                <td style="text-align: center"> <span class="badge rounded-pill badge-light-primary">{{ $kategori->keterangan }} </span> </td>

                                                @elseif ($kategori->kategori==2)
                                                <td style="text-align: center"> <span class="badge rounded-pill badge-light-info">{{ $kategori->keterangan }} </span> </td>
                                                
                                                @endif

                                                <td>{{ $pengajuanbiasa->keterangan }}</td>
                                                <td>{{ $pengajuanbiasa->jumlah }}</td>
                                                <td>{{ $pengajuanbiasa->tanggal }}</td>
                                                <td>{{ $user->name}}</td>
                                                <td>{{ $divisi->keterangan }}</td>

                                                
                                                <td style="text-align: center">
                                                    <span class="badge rounded-pill badge-glow bg-warning"> {{ $status->keterangan }} {{ $jabatan->keterangan }} 
                                                    </span> 
                                                </td> 
                                               


                                            <td>
                                                <div class="demo-inline-spacing">

                                                    <a type="button" class="btn btn-outline-primary round"
                                                        href="{{ url('pengajuan/histori/' . $pengajuanbiasa->id)}}">Detail</a>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>

                                        {{-- @elseif ($histori->status==1 || $kategori->kategori==1)
                                            
                                        <tr>
                
                                            <td>
                                                <button type="button"
                                                        class="btn btn-icon btn-icon btn-flat-success">
                                                        <i data-feather="eye"></i>
                                                </button>
                                            </td>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kategori->keterangan }}</td>
                                            <td>{{ $pengajuanbiasa->keterangan }}</td>
                                            <td>{{ $pengajuanbiasa->jumlah }}</td>
                                            <td>{{ $pengajuanbiasa->tanggal }}</td>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $divisi->keterangan }}</td>
                                            <td>{{ $status->keterangan }}</td>
                                           


                                        <td>
                                            <div class="demo-inline-spacing">

                                                <a type="button" class="btn btn-outline-primary round"
                                                    href="{{ url('pengajuan/HistoriBiasa/' . $pengajuanbiasa->id)}}">Detail</a>
                                                </a>
                                            </div>
                                        </td> --}}

                                    </tr>

                                        @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection

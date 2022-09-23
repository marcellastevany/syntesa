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
                            <h2 class="content-header-title float-start mb-0">Lampiran Pengajuan Biasa</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Lampiran</a>
                                    </li>
                                    <li class="breadcrumb-item active">Lampiran Pengajuan Biasa
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
                                            <th>Nama Lampiran</th>
                                            <th>Lampiran</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanlampirans as $pengajuanlampiran)
                                        @php
                                           $pengajuanbiasa = Modules\Pengajuan\Entities\pengajuanBiasa::select()
                                                    ->where('id', $pengajuanlampiran->pengajuan_biasa_id)
                                                    ->get()
                                                    ->first();
                                            $lampiran = Modules\Pengajuan\Entities\LampiranpengajuanBiasa::select()
                                                    ->where('id', $pengajuanbiasa->id)
                                                    ->get()
                                                    ->first();                                          
                                        @endphp
                                            <tr>
                                                <td>   
                                                    <button type="button"
                                                    class="btn btn-icon btn-icon btn-flat-success">
                                                    <i data-feather="eye"></i>
                                                    </button>
                                                </td>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pengajuanbiasa->keterangan }}</td>
                                                <td>{{ $pengajuanlampiran->note_lampiran }}</td>
                                                <td> <div class="demo-inline-spacing align=center">
                                                    <a type="button" class="btn btn-icon btn-outline-primary" target="blank" href="{{ asset('storage/' . $pengajuanlampiran->lampiran) }}">
                                                      <i data-feather="eye"></i>
                                                    </a>
                                                     </td>


                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                </section>
            </div>
        </div>
    </div>
@endsection

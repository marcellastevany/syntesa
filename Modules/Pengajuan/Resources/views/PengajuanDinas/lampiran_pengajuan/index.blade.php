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
                            <h2 class="content-header-title float-start mb-0">Lampiran Pengajuan Dinas</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Lampiran</a>
                                    </li>
                                    <li class="breadcrumb-item active">Lampiran Pengajuan Dinas
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
                                            <th>Lampiran</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanlampirans as $pengajuanlampiran)
                                        @php
                                           $pengajuan_dinas = Modules\Pengajuan\Entities\pengajuanDinas::select()
                                                    ->where('id', $pengajuanlampiran->pengajuan_dinas_id)
                                                    
                                                    ->get()
                                                    ->first();                                                    
                                        @endphp
                                            <tr>
                                                <td></td>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pengajuan_dinas->keterangan }}</td>
                                                <td>{{ $pengajuanlampiran->note_lampiran }}</td>
                                                <td> <iframe img class="img-fluid rounded mb-75"
                                                    src="{{ asset('storage/' . $pengajuanlampiran->lampiran) }}" height="300"
                                                    ></iframe>
                                                <!--/ post img --></td>


                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                </section>
            </div>
        </div>
    </div>
@endsection

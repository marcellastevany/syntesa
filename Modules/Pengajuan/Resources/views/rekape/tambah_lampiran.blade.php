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
                            <h2 class="content-header-title float-start mb-0">Lampiran</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Menu Utama</a>
                                    </li>
                                    <li class="breadcrumb-item active">Lampiran
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <section id="basic-datatable">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header border-bottom">
                <h4 class="card-title">Lihat Pengajuan</h4>
              </div>
              <table class="datatables-basic table">
                <thead>
                  <tr>
                    <th></th>
                    <th></th>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Salary</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header border-bottom">
      <h4 class="card-title">Lampiran</h4>
    </div> --}}
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>

                                            <th></th>
                                            <th>No</th>
                                            <th>Keterangan</th>
                                            <th>No Projek</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Jenis Pengajuan</th>
                                            <th>Posisi Pengajuan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kurang1s as $kurang1)
                                            <tr>

                                                <td></td>
                                                <td></td>
                                                <td>{{ $kurang1->keterangan }}</td>
                                                <td></td>
                                                <td>{{ $kurang1->tanggal }}</td>
                                                <td></td>
                                                <td></td>
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

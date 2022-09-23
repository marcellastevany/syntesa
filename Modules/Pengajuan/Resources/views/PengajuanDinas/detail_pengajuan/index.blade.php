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
                            <h2 class="content-header-title float-start mb-0">Detail Pengajuan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/pengajuan/pengajuan_masukM">Pengajuan Masuk</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Detail Pengajuan</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="mb-75 ">Detail Pengajuan</h3>
                      </div>

                      <div class="card-body">
                        <p class="card-text">
                       
                        <div class="mt-2">
                            <h6>Keterangan        : {{$detail->keterangan}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Jumlah            : {{$detail->jumlah}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Tanggal Pengajuan : {{$detail->tanggal}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Yang Mengajukan   : </h6>
                        </div>
                        <div class="mt-2">
                            <h6>Divisi            : {{$detail->divisi}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Catatan           : {{$detail->catatan}}</h6>
                        </div>
                   <hr class="mt-3">


                        <h3 class="mb-75 mt-5">Detail Lampiran</h3>
                        
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <table class="datatables-basic table">
                                            <thead>
                                                <tr>
                                                 
                                                 
                                                    <th>No</th>
                                                    <th>Nama Lampiran</th>
                                                    <th>Lampiran</th>
        
                                                </tr>
                                                <tr>
                                                 <td></td>
                                                    <td>no</td>
                                                    <td>{{ $detail->note_lampiran }}</td>
                                                   
                                                <td> <iframe class="img-fluid rounded mb-75"
                                                    src="{{ asset('storage/' . $detail->lampiran) }}" height="300"
                                                    ></iframe>

                                                </tr>
                                            </thead>
                                        </table>
                                          
                                    </div>
                                </div>
                            </div>
                      
        
        
                 <hr>

            <form method="POST" action="{{ url('pengajuan/detailPengajuan', $detail->id)}}" >
            @csrf
            @method('put');
            <h5 class="mb-75 mt-3 " >Tanggapi Pengajuan</h5>
            
            <div class="demo-inline-spacing mt-1">

            <div class="form-check form-check-danger ">
              <input type="checkbox" class="form-check-input" id="colorCheck5" unchecked />
              <label class="form-check-label" for="colorCheck5">Danger</label>
            </div>

            <div class="form-check form-check-warning">
              <input type="checkbox" class="form-check-input" id="colorCheck4" unchecked />
              <label class="form-check-label" for="colorCheck4">Warning</label>
            </div>

            <div class="form-check form-check-info">
              <input type="checkbox" class="form-check-input" id="colorCheck6" unchecked />
              <label class="form-check-label" for="colorCheck6">Info</label>
            </div>

            </div>
             <button type="button"class="btn btn-success mt-2 col-12">Save</button>
            </form>

                    {{-- <div class="demo-inline-spacing mt-1">
                        <button type="button" value="1" class="btn btn-success">Terima</button>
                        <button type="button" class="btn btn-danger">Tolak</button>
                        <button type="button" class="btn btn-warning">Revisi</button>
                    </div>     --}}
                    
               
                </div>
                </div>

             

               
                  
            @endsection

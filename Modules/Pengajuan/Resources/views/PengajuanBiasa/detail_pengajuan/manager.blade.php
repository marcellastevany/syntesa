@extends('pengajuan::layouts.main')

@section('content')
    @php
        $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
            ->where('pengajuan_biasa_id', $detail->id)
            ->orderby('created_at', 'desc')
            ->get()
            ->first();
        $kategori = Modules\Pengajuan\Entities\kategori_pengajuan::select()
            ->where('kategori', $detail->kategori)
            ->get()
            ->first();
        $divisi = Modules\Pengajuan\Entities\Divisi::select()
            ->where('divisi', $detail->divisi)
            ->get()
            ->first();
        $user = App\Models\User::select()
            ->where('id', $detail->user_id)
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

                                    @if ($status->status == 4)
                                        <li class="breadcrumb-item"><a href="/pengajuan/masuk/show"> Pengajuan Masuk</a>
                                        </li>
                                    @elseif($status->status == 1)
                                        <li class="breadcrumb-item"><a href="/pengajuan/diproses/show"> Pengajuan Di
                                                Proses</a>
                                        </li>
                                    @elseif($status->status == 3)
                                        <li class="breadcrumb-item"><a href="/pengajuan/selesai/show"> Pengajuan Selesai</a>
                                        </li>
                                    @elseif($status->status == 2)
                                        <li class="breadcrumb-item"><a href="/pengajuan/ditolak/show"> Pengajuan Di
                                                Tolak</a>
                                        </li>
                                    @endif

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

                                @php
                                    $kategori = Modules\Pengajuan\Entities\kategori_pengajuan::select()
                                        ->where('kategori', $detail->kategori)
                                        ->get()
                                        ->first();
                                    $divisi = Modules\Pengajuan\Entities\Divisi::select()
                                        ->where('divisi', $detail->divisi)
                                        ->get()
                                        ->first();
                                    $user = App\Models\User::select()
                                        ->where('id', $detail->user_id)
                                        ->get()
                                        ->first();
                                @endphp
                            <div class="mt-2">
                                <h6>Kategori : {{ $kategori->keterangan }}</h6>
                            </div>
                            <div class="mt-2">
                                <h6>Keterangan : {{ $detail->keterangan }}</h6>
                            </div>
                            <div class="mt-2">
                                <h6>Jumlah : {{ $detail->jumlah }}</h6>
                            </div>
                            <div class="mt-2">
                                <h6>Tanggal Pengajuan : {{ $detail->tanggal }}</h6>
                            </div>
                            <div class="mt-2">
                                <h6>Yang Mengajukan : {{ $user->name }}</h6>
                            </div>
                            <div class="mt-2">
                                <h6>Divisi : {{ $divisi->keterangan }}</h6>
                            </div>

                            @if ($status->status == 1)
                                <div class="mt-2">
                                    <h6>Status : {{ $status->keterangan }} {{ $jabatan->keterangan }}</h6>
                                </div>
                            @elseif($status->status == 3)
                                <div class="mt-2">
                                    <h6>Status : {{ $status->keterangan }}</h6>
                                </div>
                            @elseif($status->status == 2)
                                <div class="mt-2">
                                    <h6>Status : {{ $status->keterangan }} {{ $jabatan->keterangan }}</h6>
                                </div>
                            @elseif($status->status == 4)
                                <div class="mt-2">
                                    <h6>Status : {{ $status->keterangan }} {{ $jabatan->keterangan }}</h6>
                                </div>
                            @endif

                            <div class="mt-2">
                                <h6>Catatan : {{ $detail->catatan }}</h6>
                            </div>
                            <hr class="mt-3">


                            <h3 class="mb-75 mt-5">Detail Lampiran</h3>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <table class="table">
                                            <thead>

                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>Nama Lampiran</th>
                                                    <th>Lampiran</th>
                                                </tr>
                                            <tbody>
                                                @foreach ($pengajuanlampirans as $pengajuanlampiran)
                                                    @php
                                                        $pengajuan_biasa = Modules\Pengajuan\Entities\LampiranPengajuanBiasa::select()
                                                            ->where('id', $pengajuanlampiran->pengajuan_biasa_id)
                                                            ->get()
                                                            ->first();
                                                    @endphp
                                                    <tr>
                                                        <td></td>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $pengajuanlampiran->note_lampiran }}</td>

                                                        <td>
                                                            <div class="demo-inline-spacing align=center">
                                                                <a type="button" class="btn btn-icon btn-outline-primary"
                                                                    target="blank"
                                                                    href="{{ asset('storage/' . $pengajuanlampiran->lampiran) }}">
                                                                    <i data-feather="eye"></i>
                                                                </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                    </div>
                                    </tbody>
                                    </thead>
                                    </table>
                                </div>
                            </div>
                            <hr>

                            @if ($status->status == 4)
                                @if($divisi->divisi==1)
                                <h3 class="mb-75 mt-3 text-center">Tanggapi Pengajuan</h3>
                                <div class="d-flex flex-column flex-sm-row pt-1 justify-content-center mt-3">
                                    <form method="POST" action="/pengajuan/histori/ {{ $detail->id }}">
                                        @csrf
                                        @method('put')

                                        <button class="btn btn-success btn-lg py-1 px-3 mx-2 ">
                                            <input type="hidden" name="status" id="status" value=1 />
                                            <input type="hidden" name="jabatan" id="jabatan" value=4 />
                                            <input type="hidden" name="divisi" id="divisi" value=1 />
                                            Setuju </button>
                                    </form>

                                    <form method="POST" action="/pengajuan/histori/ {{ $detail->id }}">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-danger btn-lg py-1 px-3 mx-2">
                                            <input type="hidden" name="status" id="status" value=2 />
                                            <input type="hidden" name="jabatan" id="jabatan" value=4 />
                                            <input type="hidden" name="divisi" id="divisi" value=1 />
                                            Tolak
                                        </button>
                                    </form>
                                </div>
                                @elseif($divisi->divisi==2)
                                <h3 class="mb-75 mt-3 text-center">Tanggapi Pengajuan</h3>
                                <div class="d-flex flex-column flex-sm-row pt-1 justify-content-center mt-3">
                                    <form method="POST" action="/pengajuan/histori/ {{ $detail->id }}">
                                        @csrf
                                        @method('put')

                                        <button class="btn btn-success btn-lg py-1 px-3 mx-2 ">
                                            <input type="hidden" name="status" id="status" value=1 />
                                            <input type="hidden" name="jabatan" id="jabatan" value=4 />
                                            <input type="hidden" name="divisi" id="divisi" value=2/>
                                            Setuju </button>
                                    </form>

                                    <form method="POST" action="/pengajuan/histori/ {{ $detail->id }}">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-danger btn-lg py-1 px-3 mx-2">
                                            <input type="hidden" name="status" id="status" value=2 />
                                            <input type="hidden" name="jabatan" id="jabatan" value=4 />
                                            <input type="hidden" name="divisi" id="divisi" value=2 />
                                            Tolak
                                        </button>
                                    </form>
                                </div>
                                @elseif($divisi->divisi==3)
                                <h3 class="mb-75 mt-3 text-center">Tanggapi Pengajuan</h3>
                                <div class="d-flex flex-column flex-sm-row pt-1 justify-content-center mt-3">
                                    <form method="POST" action="/pengajuan/histori/ {{ $detail->id }}">
                                        @csrf
                                        @method('put')

                                        <button class="btn btn-success btn-lg py-1 px-3 mx-2 ">
                                            <input type="hidden" name="status" id="status" value=1 />
                                            <input type="hidden" name="jabatan" id="jabatan" value=4 />
                                            <input type="hidden" name="divisi" id="divisi" value=3 />
                                            Setuju </button>
                                    </form>

                                    <form method="POST" action="/pengajuan/histori/ {{ $detail->id }}">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-danger btn-lg py-1 px-3 mx-2">
                                            <input type="hidden" name="status" id="status" value=2 />
                                            <input type="hidden" name="jabatan" id="jabatan" value=4 />
                                            <input type="hidden" name="divisi" id="divisi" value=3 />
                                            Tolak
                                        </button>
                                    </form>
                                </div>
                                @endif
                            @elseif ($status->status == 3)
                                <h3 class="mb-75 mt-5"> Lampiran Pencairan</h3>

                                @foreach ($lampiran_cairs as $lampiran_cair)
                                    @php
                                        $lampiran = Modules\Pengajuan\Entities\Pencairan::select()
                                            ->where('id', $lampiran_cair->pengajuan_biasa_id)
                                            ->get()
                                            ->first();
                                    @endphp

                                    <div class="mt-2">
                                        <h6>
                                            <a type="button" class="btn  btn-primary btn-lg" target="blank"
                                                href="{{ asset('storage/' . $lampiran_cair->lampiran_cair) }}">
                                                Lihat Lampiran
                                            </a>
                                        </h6>
                                    </div>
                                @endforeach
                                <hr>
                            @endif

                            <div class="d-flex flex-column flex-sm-row">

                                @if ($status->status == 4)
                                    <div class="demo-inline-spacing mt-2">
                                        <button type="submit" class="btn btn-flat-primary round"><i
                                                data-feather="arrow-left" class="me-25"></i> <a
                                                href=/pengajuan/masuk/show>Kembali</a></button>
                                    </div>
                                @elseif ($status->status == 1)
                                    <div class="demo-inline-spacing mt-2">
                                        <button type="submit" class="btn btn-outline-primary round"><i
                                                data-feather="arrow-left" class="me-25"></i> <a
                                                href=/pengajuan/diproses/show>Kembali</a></button>
                                    </div>
                                @elseif ($status->status == 2)
                                    <div class="demo-inline-spacing mt-2">
                                        <button type="submit" class="btn btn-outline-primary round"><i
                                                data-feather="arrow-left" class="me-25"></i> <a
                                                href=/pengajuan/ditolak/show>Kembali</a></button>
                                    </div>
                                @elseif ($status->status == 3)
                                    <div class="demo-inline-spacing mt-2">
                                        <button type="submit" class="btn btn-outline-primary round"><i
                                                data-feather="arrow-left" class="me-25"></i> <a
                                                href=/pengajuan/selesai/show>Kembali</a></button>
                                    </div>
                                @endif
                            </div>


                        @endsection


                        {{-- <div class="form-check form-check-danger ">
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
             <button type="button"class="btn btn-success mt-2 col-12">Save</button> --}}






                        <!-- add new card modal  -->
                        {{-- <div class="modal fade" id="setuju" tabindex="-1"
                     aria-labelledby="addNewCardTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                             <div class="modal-header bg-transparent">
                                 <button type="button" class="btn-close"
                                     data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div class="modal-body px-sm-5 mx-50 pb-5">
                                 <h1 class="text-center mb-1" id="addNewCardTitle">
                                     Apakah Anda Yakin Untuk Menyetujui Pengajuan ?
                                 </h1>
                                 <p class="text-center"></p>

                                 <!-- form -->
                                 <div id="addNewCardValidation">
                                     {{-- class="row gy-1 gx-2 mt-75" method="POST"
                                     action="/pengajuan/HistoriBiasa"> --}}
                        {{-- @csrf --}}

                        {{-- <form class="col-md-12">
                                         <label class="form-label"
                                             for="catatan">Catatan</label>
                                         <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Catatan Anda"></textarea>
                                     </div>
                                     <input type="hidden" name="pengajuan_biasa_id"
                                         value="{{ $detail->id }}">
                                     <input type="hidden" name="status_id" value=1>
                                     <input type="hidden" name="user_id"
                                         value="{{ Auth::user()->id }}">

                                     <div class="col-12 text-center">
                                         <button type="submit"
                                             class="btn btn-primary me-1 mt-1">Yakin</button>
                                         <button type="reset"
                                             class="btn btn-outline-secondary mt-1"
                                             data-bs-dismiss="modal"
                                             aria-label="Close">
                                             Tidak
                                         </button>
                                     </div>
                                    </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--/ add new card modal  --> --}}


                        {{-- <!-- add new card modal  -->
                     <div class="modal fade" id="tolak" tabindex="-1"
                     aria-labelledby="addNewCardTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                             <div class="modal-header bg-transparent">
                                 <button type="button" class="btn-close"
                                     data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div class="modal-body px-sm-5 mx-50 pb-5">
                                 <h1 class="text-center mb-1" id="addNewCardTitle">
                                     Apakah Anda Yakin Untuk Menolak Pengajuan ?
                                 </h1>
                                 <p class="text-center"></p>

                                 <!-- form -->
                                 <form id="addNewCardValidation"
                                     class="row gy-1 gx-2 mt-75" method="POST"
                                     action="/pengajuan/History">
                                     @csrf

                                     <div class="col-md-12">
                                         <label class="form-label"
                                             for="catatan">Catatan</label>
                                         <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Catatan Anda"></textarea>
                                     </div>
                                     <input type="hidden" name="pengajuan_biasa_id"
                                         value="{{ $detail->id }}">
                                     <input type="hidden" name="status_id" value=1>
                                     <input type="hidden" name="user_id"
                                         value="{{ Auth::user()->id }}">

                                     <div class="col-12 text-center">
                                         <button type="submit"
                                             class="btn btn-primary me-1 mt-1">Yakin</button>
                                         <button type="reset"
                                             class="btn btn-outline-secondary mt-1"
                                             data-bs-dismiss="modal"
                                             aria-label="Close">
                                             Tidak
                                         </button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--/ add new card modal  --> --}}

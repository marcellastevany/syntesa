@extends('project::layouts.main')

@section('content')

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">
        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-start mb-0">Tambah Project</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-body">
                    <!-- Card Advance -->
                    <div class="row match-height">
                        <!-- Payment Card -->
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="card card-payment">
                                <div class="card-header">
                                    <h4 class="card-title">Data Project </h4>
                                </div>
                                <div class="card-body">

                                    <form action="/project/pengajuan" method="POST" class="form"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">

                                            <div class="col-xl-2 col-md-6 col-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="no_project">No. Project</label>
                                                    <input type="text" id="no_project" value="22.1" name="no_project"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <!-- full Editor start -->
                                            <div class="mb-1">
                                                <label class="form-label" for="pemegang_project">Pemegang Project</label>
                                                <select class="form-select" id="pemegang_project" name="pemegang_project">
                                                    <option value="Rizky Fauzi">Rizky Fauzi</option>
                                                    <option value="Rebecca Pardede">Rebecca Pardede</option>
                                                    <option value="Breynda Syauta">Breynda Syauta</option>
                                                    <option value="Merda Suryono">Merda Suryono</option>

                                                </select>
                                            </div>
                                            <!-- full Editor end -->

                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <label class="form-label" for="nama_project">Nama Project</label>
                                                    <input type="text" id="nama_project" name="nama_project"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-2 col-md-6 col-12">
                                                    <div class="mb-2">
                                                        <label class="form-label" for="tgl_project">Tanggal Project</label>
                                                        <input type="text" id="tgl_project"
                                                            class="form-control flatpickr-basic" name="tgl_project"
                                                            placeholder="YYYY-MM-DD" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <label for="sales_order" class="form-label">Sales Order</label>
                                                    <input class="form-control" name="sales_order" type="file"
                                                        id="sales_order" multiple>
                                                </div>
                                            </div>
                                            <!-- Basic Textarea start -->
                                            <section class="basic-textarea">
                                                <div class="row">
                                                    <div class="col-12">

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="deskripsi">Deskripsi</label>
                                                                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        {{-- ubah --}}
                                            <input type="hidden" id="status" name="status" class="form-control"
                                            value="4">
                                        <input type="hidden" id="jabatan" name="jabatan" class="form-control"
                                            value="7">
                                        <input type="hidden" id="divisi" name="divisi" class="form-control"
                                            value="3">
                                        <input type="hidden" id="jenis_pengajuan" name="jenis_pengajuan" class="form-control"
                                            value="2">
                                            {{-- ubah --}}

                                            <div class="card-header">
                                                <br>
                                                <b class="card-title text-center">Biaya</b>
                                                <br>
                                            </div>
                                            <section id="form-repeater">
                                                <div class="row">
                                                    <div class="mb-1 col-md-12">
                                                        <div class="repeater-default">
                                                            <div>
                                                                <div id="tampung_biaya">
                                                                    <div class="row d-flex align-items-end">
                                                                        <div class="col-xl-2 col-md-6 col-12">
                                                                            <div class="mb-1">
                                                                                <label>Kategori</label>
                                                                                <select class="form-control kategori"
                                                                                    name="kategoriadd"
                                                                                    style="font-size: 14px;">
                                                                                    <option value="Tiket">Tiket</option>
                                                                                    <option value="Hotel">Hotel</option>
                                                                                    <option value="Transport">Transport
                                                                                    </option>

                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-xl-1 col-md-6 col-12">
                                                                            <div class="mb-1">
                                                                                <a class="btn btn-icon btn-primary"
                                                                                    type="button" id="addnew"
                                                                                    data-kategori="Tiket">
                                                                                    <i data-feather="plus"
                                                                                        class="me-25"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                            </section>
                                            <div class="card-header">
                                                <br>
                                                <b class="card-title text-center">Pendapatan</b>
                                                <br>
                                            </div>
                                            <section id="form-repeater">
                                                <div class="row">
                                                    <div class="mb-1 col-md-12">
                                                        <div class="repeater-default">
                                                            <div>
                                                                <div id="tampung_pendapatan">

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                            </section>
                                            <hr>
                                            <div class="card-header">
                                                <br>
                                                <b class="card-title text-center">Lampiran</b>
                                                <br>
                                            </div>
                                            <section id="form-control-repeater">
                                                <!-- Invoice repeater -->
                                                <div class="row">
                                                    <div class="invoice-repeater">
                                                        <div>
                                                            <div>
                                                                <div id="tampung_lampiran">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </section>



                                            <!-- penjualan -->
                                            <div class="card-footer">
                                                <button type="hidden" value="Normal" name="keterangan"
                                                    class="btn btn-success"
                                                    onclick="return confirm ('Apakah anda yakin?')">Ajukan Project</button>
                                            </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                        <!--/ Payment Card -->
                    </div>

                    <!--/ Card Advance -->

                </div>
            </div>
        </div>

    </body>
    <!-- END: Content-->
@endsection
@push('scripts')
    <script>
        $("body").on("click", ".remove_btn", function(e) {
            $(this).parents('.input_add').remove();
            //the above method will remove the user_data div
        });
        let counterTiket = 0;
        let counterHotel = 0;
        let counterTransport = 0;
        let catSelected = 'Tiket';
        let listOpt;
        $('.kategori').on('change', function() {
            let val = $(this).val();
            catSelected = val;
        })
        $('#addnew').on('click', function() {

            if (catSelected == 'Tiket') {
                counterTiket += 1;
                listOpt = `<option selected value="Tiket">Tiket</option>
        <option  value="Hotel">Hotel</option>
        <option value="Transport">Transport</option>`;
            } else if (catSelected == 'Hotel') {
                counterHotel += 1;
                listOpt = `<option  value="Tiket">Tiket</option>
        <option selected value="Hotel">Hotel</option>
        <option value="Transport">Transport</option>`;
            } else {
                counterTransport += 1;
                listOpt = `<option  value="Tiket">Tiket</option>
        <option  value="Hotel">Hotel</option>
        <option selected value="Transport">Transport</option>`;
            }
            $('#tampung_biaya').append(`
        <div class="input_add">  
        <div class="row d-flex align-items-end">
        <div class="col-xl-2 col-md-6 col-12">
        <div class="mb-1">
                <label>Kategori</label>
                <select class="form-control" name="kategori_biaya[]"
                    style="font-size: 14px;">
                    ${listOpt}

                </select>
            </div>
        </div>
        <div class="col-xl-2 col-md-6 col-12">
            <div class="mb-1">
                <label>Item</label>
                <input type="text" name="item_biaya[]"
                    class="form-control"/>
            </div>
        </div>

        <div class="col-xl-1 col-md-6 col-12">
            <div class="mb-1">
                <label>Ket. Jumlah</label>
                <input type="number" class="form-control"
                     name="jumlah_biaya[]">
            </div>
        </div>
        <div class="col-xl-1 col-md-6 col-12">
            <div class="mb-1">
                <label>Ket. Waktu</label>
                <input type="number" class="form-control"
                    name="waktu_biaya[]">
            </div>
        </div>
        <div class="col-xl-2 col-md-6 col-12">
            <div class="mb-1">
                <label>Biaya satuan/Hari</label>
                <input type="number" class="form-control"
                    name="biaya_satuan_biaya[]">
            </div>
        </div>
        
        <div class="col-xl-1 col-md-6 col-12">
            <div class="mb-1">
                <button class="remove_btn btn btn-outline-danger text-nowrap px-1 waves-effect" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

            </button>
            </div>
        </div>
        <hr>
    </div>
    <div/>
    `);
            $('#tampung_pendapatan').append(`
    <div class="input_add"> 
    <div class="row d-flex align-items-end">
    <div class="col-xl-2 col-md-6 col-12">
        <div class="mb-1">
            <label>Kategori</label>
            <select class="form-control" name="kategori_pendapatan[]"
                style="font-size: 14px;">
                 ${listOpt}

            </select>
        </div>
    </div>
    <div class="col-xl-2 col-md-6 col-12">
        <div class="mb-1">
            <label>Item</label>
            <input type="text" name="item_pendapatan[]"
                class="form-control" />
        </div>
    </div>

    <div class="col-xl-1 col-md-6 col-12">
        <div class="mb-1">
            <label>Ket. Jumlah</label>
            <input type="number" class="form-control"
                 name="jumlah_pendapatan[]">
        </div>
    </div>
    <div class="col-xl-1 col-md-6 col-12">
        <div class="mb-1">
            <label>Ket. Waktu</label>
            <input type="number" class="form-control"
               name="waktu_pendapatan[]">
        </div>
    </div>
    <div class="col-xl-2 col-md-6 col-12">
        <div class="mb-1">
            <label>Pendapatan satuan/Hari</label>
            <input type="number" class="form-control"
                name="pendapatan_satuan[]">
        </div>
    </div>
     <div class="col-xl-1 col-md-6 col-12">
        <div class="mb-1">
            <button class="remove_btn btn btn-outline-danger text-nowrap px-1 waves-effect" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

            </button>
           
        </div>
    </div>
   
    <hr>
</div>
</div>`);

            if (catSelected == 'Tiket' && counterTiket == 1) {
                loadTampungLampiran(listOpt, catSelected);
            }
            if (catSelected == 'Hotel' && counterHotel == 1) {
                loadTampungLampiran(listOpt, catSelected);
            }
            if (catSelected == 'Transport' && counterTransport == 1) {
                loadTampungLampiran(listOpt, catSelected);
            }

        })

        function loadTampungLampiran(listOpt, catSelected) {
            $('#tampung_lampiran').append(`
    <div class="input_add">
    <div class="row d-flex align-items-end">
                                                                
    <div class="col-xl-2 col-md-6 col-12">
        <div class="mb-1">
            <label>Kategori</label>
            <select class="form-control" name="kategori_lampiran[]" style="font-size: 14px;">
                ${listOpt}

            </select>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 col-12">
        <div class="mb-1">
            <label>Lampiran</label>
            <input class="form-control" name="dokumen_lampiran_${catSelected}[]"
                type="file" multiple>
        </div>
    </div>
    <div class="col-xl-4 col-md-6 col-12">
        <div class="mb-1">
            <label>Keterangan</label>
            <input type="text" class="form-control"
                 name="keterangan_lampiran[]">
        </div>
    </div>
    
    <div class="col-xl-1 col-md-6 col-12">
        <div class="mb-1">
            <button class="remove_btn btn btn-outline-danger text-nowrap px-1 waves-effect" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x me-25"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>

            </button>
        </div>
    </div>
</div>
</div>
`)
        }
    </script>
@endpush

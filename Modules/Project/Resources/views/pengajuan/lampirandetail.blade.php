@extends('project::layouts.main')

@section('content')
    <!-- BEGIN: Content-->

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-start mb-0">Data Lampiran</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">

                               
                                @foreach ($docs as $d)
                                    
                               
                                @php
                                    $ext = pathinfo(storage_path().'/dokumen_project/'.$d, PATHINFO_EXTENSION);
                                    
                                @endphp
                                @if ($ext=='pdf')
                                    <div class="col-md-6">

                                        <div id="viewpdf{{ $loop->iteration }}" style="height: 800px;"></div>
                                    </div>
                                @else
                                @php
                                    $img=asset('storage/' .str_replace('public/','',$d) );
                                @endphp
                                    <div class="col-md-6">
                                        <img src="{{ $img }}" style="width: 100%;"/>
                                    </div>  
                                @endif
                                @endforeach
                    </div>

                </section>
            </div>
        </div>

    </body>
@endsection
@push('scripts')
    <script src="/plugin/pdfobject/pdfobject.min.js"></script>
    <script>
         @foreach ($docs as $d)
            @php
                $ext = pathinfo(storage_path().'/dokumen_project/'.$d, PATHINFO_EXTENSION);
            @endphp
            @if ($ext=='pdf')
                @php
                    $pdf=asset('storage/' .str_replace('public/','',$d) );
                @endphp
                let viewer=$('#viewpdf{{ $loop->iteration }}');
                PDFObject.embed('{{ $pdf }}',viewer);
            @endif
            @endforeach
    </script>
@endpush
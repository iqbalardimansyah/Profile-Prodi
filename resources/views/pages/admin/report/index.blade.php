@extends('layouts.admin')
@section('title', "Laporan Kinerja Program Studi") 

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Laporan Kinerja Program Studi (LKPS)</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Rekayasa Perangkat Lunak</a></li>
                        <li class="breadcrumb-item active">Laporan Kinerja Program Studi (LKPS)</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row mt-4">
            <object class="col-md-12" style="min-height: 600px" data="{{ asset('file/led.pdf') }}" type="application/pdf">
                <embed src="{{ asset('file/led.pdf') }}" type="application/pdf" />
            </object>

        </div>

    </div>
    <!-- container-fluid -->

</div>
<!-- content -->
@endsection
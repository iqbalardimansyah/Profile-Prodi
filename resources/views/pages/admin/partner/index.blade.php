@extends('layouts.admin')
@section('title', "Kerjasama") 

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Kerjasama</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Rekayasa Perangkat Lunak</a></li>
                        <li class="breadcrumb-item">Infografik</li>
                        <li class="breadcrumb-item active">Kerja Sama</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

        @if (Session::has('success'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <a href="{{ route('admin.partner.add') }}" class="btn btn-primary waves-effect waves-light ml-3 mt-3 mb-4">
                            <i class="fa fa-plus"></i> Tambah Data
                        </a>

                        <table id="datatable" class="table table-striped nowrap table-responsive" style="border-collapse: collapse; border-spacing: 0;">
                            <thead>
                                <tr>
                                    <th>Lembaga Mitra</th>
                                    <th>Tingkat</th>
                                    <th>Judul Kegiatan Kerjasama</th>
                                    <th>Durasi</th>
                                    <th>Tahun Berakhir</th>
                                    <th>Link Google Drive</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $index = 0;
                                @endphp 
                                @foreach ($data as $partner)
                                    <tr>
                                        <td>{{ $partner->company_name }}</td>
                                        <td>{{ $partner->level }}</td>
                                        <td>{{ $partner->partner_type }}</td>
                                        <td>{{ $partner->duration_time }}</td>
                                        <td>{{ $partner->end_year }}</td>
                                        <td>
                                            @if ($partner->link_drive)
                                                <a href="{{ $partner->link_drive }}" target="_blank">{{ $partner->link_drive }}</a>
                                            @else
                                                Tidak ada data
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('admin.partner.delete', encode($partner->id)) }}" method="POST" class="d-flex">
                                                @csrf
                                                @method("DELETE")

                                                <button type="button" data-toggle="modal" data-target="#modal_{{ $index }}" class="btn btn-info btn-sm mr-2">
                                                    <li class="fa fa-info"></li>
                                                </button>
                                                <a href="{{ route('admin.partner.edit', encode($partner->id)) }}" class="btn btn-warning btn-sm">
                                                    <li class="fa fa-cut"></li>
                                                </a>

                                                <button type="submit" class="btn btn-danger btn-sm ml-2">
                                                    <li class="fa fa-trash"></li>
                                                </button>
                                            </form>
                                        </td>
                                        
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal_{{ $index }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h6>Lembaga Mitra</h6>
                                                    <p>{{ $partner->company_name }}</p>
                                                    <h6>Tingkat</h6>
                                                    <p>{{ $partner->level }}</p>
                                                    <h6>Jenis Kegiatan Kerjasama</h6>
                                                    <p>{{ $partner->partner_type }}</p>
                                                    <h6>Manfaat bagi Program Studi diakreditasi</h6>
                                                    <p>{{ $partner->benefits }}</p>
                                                    <h6>Waktu dan Durasi</h6>
                                                    <p>{{ $partner->duration_time }}</p>
                                                    <h6>Bukti Kerjasama</h6>
                                                    <p>{{ $partner->partner_proven }}</p>
                                                    <h6>Tahun Berakhirnya Kerjasama</h6>
                                                    <p>{{ $partner->end_year }}</p>
                                                    <h6>Link Drive</h6>
                                                    <p>
                                                        @if ($partner->link_drive)
                                                            <a href="{{ $partner->link_drive }}" target="_blank">{{ $partner->link_drive }}</a>
                                                        @else
                                                            Tidak ada data
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </tr>
                                    @php
                                        $index++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- content -->
@endsection

@push('before-styles')
    <!-- DataTables -->
    <link href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('after-scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        } );    
    </script>   
@endpush
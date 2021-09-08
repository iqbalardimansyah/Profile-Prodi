@extends('layouts.admin')
@section('title', "Edit Kerjasama") 

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Edit Kerja Sama</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Rekayasa Perangkat Lunak</a></li>
                        <li class="breadcrumb-item">Infografik</li>
                        <li class="breadcrumb-item">Kerja Sama</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form action="{{ route('admin.partner_researches.update', encode($tb_partner_researches->id)) }}" method="POST">
                            @csrf
                            @method("PUT")
                            
                            <div class="form-group row">
                                <label for="company_name" class="col-sm-2 col-form-label">Lembaga Mitra</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $tb_partner_researches->company_name }}" type="text" name="company_name" id="company_name" placeholder="Masukan Lembaga Mitra">
                                    @error('company_name')
                                        <div class="form-control-feedback">{{ $errors->first('company_name') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="level" class="col-sm-2 col-form-label">Tingkat</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="level" id="level">
                                        <option selected>Pilih Tingkat</option>
                                        <option value="Internasional" {{ $tb_partner_researches->level == "Internasional" ? 'selected' : '' }}>Internasional</option>
                                        <option value="Nasional" {{ $tb_partner_researches->level == "Nasional" ? 'selected' : '' }}>Nasional</option>
                                        <option value="Wilayah/Lokal" {{ $tb_partner_researches->level == "Wilayah/Lokal" ? 'selected' : '' }}>Wilayah/Lokal</option>
                                    </select>
                                    @error('level')
                                        <div class="form-control-feedback">{{ $errors->first('level') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="partner_type" class="col-sm-2 col-form-label">Judul Kegiatan</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $tb_partner_researches->partner_type }}" type="text" name="partner_type" id="partner_type" placeholder="Masukan Judul Kegiatan Kerjasama">
                                    @error('partner_type')
                                        <div class="form-control-feedback">{{ $errors->first('partner_type') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="benefits" class="col-sm-2 col-form-label">Manfaat</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="benefits" id="benefits" placeholder="Masukan manfaat dari PS yang diakreditasi" rows="6">{{ $tb_partner_researches->benefits }}</textarea>
                                    @error('benefits')
                                        <div class="form-control-feedback">{{ $errors->first('benefits') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="duration_time" class="col-sm-2 col-form-label">Waktu dan Durasi</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $tb_partner_researches->duration_time }}" type="text" name="duration_time" id="duration_time" placeholder="Masukan Waktu dan Durasi">
                                    @error('duration_time')
                                        <div class="form-control-feedback">{{ $errors->first('duration_time') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="partner_proven" class="col-sm-2 col-form-label">Bukti Kerjasama</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="partner_proven" id="partner_proven" placeholder="Masukan bukti kerjasama" rows="8">{{ $tb_partner_researches->partner_proven }}</textarea>
                                    @error('partner_proven')
                                        <div class="form-control-feedback">{{ $errors->first('partner_proven') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="end_year" class="col-sm-2 col-form-label">Tahun Berakhir</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $tb_partner_researches->end_year }}" type="text" name="end_year" id="end_year" placeholder="Masukan Tahun Berakhirnya Kerjasama">
                                    @error('end_year')
                                        <div class="form-control-feedback">{{ $errors->first('end_year') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="link_drive" class="col-sm-2 col-form-label">Link Google Drive</label>
                                <div class="col-sm-10">
                                    <input class="form-control" value="{{ $tb_partner_researches->link_drive }}" type="text" name="link_drive" id="link_drive" placeholder="Masukan Link Google Drive (Opsional)">
                                    @error('link_drive')
                                        <div class="form-control-feedback">{{ $errors->first('link_drive') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button class="btn btn-primary waves-effect waves-light mt-2" type="submit">
                                        Simpan Data
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>
    <!-- container-fluid -->

</div>
<!-- content -->
@endsection

@push('after-scripts')
<!--Summernote js-->
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>

<script>
    $(document).ready(function () {
        if($("#elm1").length > 0){
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                height:300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ]
            });
        }
    });
</script>
@endpush
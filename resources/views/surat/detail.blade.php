@extends('layouts.default')
@section('title', __( 'Detail Arsip Surat'))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Arsip Surat >> Lihat
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" enctype="multipart/form-data" action="{{ URL::to('/do-update-surat/'.$data->id) }}">
                    	@csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nomor Surat</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" type="text" name="nomor_surat" required="" value="{{ $data->nomor_surat }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Kategori</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" type="text" name="kategori" required="" value="{{ $data->kategori }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Judul</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" type="text" name="judul" required="" value="{{ $data->judul }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Waktu Unggah</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" type="text" name="created_at" readonly="" value="{{ $data->created_at }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                    	<embed src="{{ asset('asset') }}/{{ $data->file }}" style="width:100%; height:800px;" frameborder="0">
                        <br><br><br>
                        <label>File Surat</label>
                        <p style="color: red; font-size: 12px;">*Upload jika ingin mengedit file surat</p>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" class="form-control" placeholder="File Surat" name="file">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect">
                        	<i class="material-icons">save</i> 
	                        <span>UPDATE</span>
	                    </button>
                    </form>
                </div>
            </div>
    	</div>
    </div>
</div>
@endsection
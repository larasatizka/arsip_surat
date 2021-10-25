@extends('layouts.default')
@section('title', __( 'Tambah Arsip Surat' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2>
                        Arsip Surat >> Unggah<br>
                        <h6>
                            Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
                            Catatan: Gunakan file berformat PDF.
                        </h6>
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form method="POST" enctype="multipart/form-data" action="{{ URL::to('/do-add-surat') }}">
                    	@csrf
                    	<label>Nomor Surat</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Nomor Surat" name="nomor_surat" required="">
                            </div>
                        </div>
                        <label>Kategori</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control" name="kategori" required="">
                                    <option value="Undangan">Undangan</option>
                                    <option value="Pengumuman">Pengumuman</option>
                                    <option value="Nota Dinas">Nota Dinas</option>
                                    <option value="Pemberitahuan">Pemberitahuan</option>
                                </select>
                            </div>
                        </div>
                        <label>Judul</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Judul" name="judul" required="">
                            </div>
                        </div>
                        <label>File Surat</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="file" class="form-control" placeholder="File Surat" name="file" required="">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary waves-effect">
                        	<i class="material-icons">save</i> 
	                        <span>SIMPAN</span>
	                    </button>
                    </form>
                </div>
            </div>
    	</div>
    </div>
</div>
@endsection
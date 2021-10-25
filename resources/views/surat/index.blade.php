@extends('layouts.default')
@section('title', __( 'Arsip Surat' ))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Arsip Surat<br>
                    <h6>
                        Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br> Klik "Lihat" pada kolom aksi untuk menampilkan surat.
                    </h6>
                </h2>
                <ul class="header-dropdown m-r--5">
                	<a href="{{ URL::to('/tambah-surat') }}" class="btn btn-success">Arsipkan Surat</a>
                </ul>
            </div>
            <div class="body">
            	@include('layouts.partials.notification')
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-exportable dataTable">
                        <thead>
                            <tr>
                            	<th style="width: 10px;">Nomor Surat</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Waktu Pengarsipan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data AS $key => $value)
                        		<tr>
                        			<td>{{ $value->nomor_surat }}</td>
                                    <td>{{ $value->kategori }}</td>
                                    <td>{{ $value->judul }}</td>
                                    <td>{{ $value->created_at }}</td>
                        			<td>
                                        <a href="{{ URL::to('delete-surat/'.$value->id) }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?')">Hapus</a>
                        				<a href="{{ URL::to('unduh-surat/'.$value->id) }}" class="btn btn-warning">Unduh</a>
	                        			<a href="{{ URL::to('detail-surat/'.$value->id) }}" class="btn btn-primary">Lihat</a>
                        			</td>
                        		</tr>
                        	@endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
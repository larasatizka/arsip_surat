@extends('layouts.default')
@section('title', __( 'About'))
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
        	<div class="card">
                <div class="header">
                    <h2 style="text-align: center;">
                        Aplikasi ini dibuat oleh:
                    </h2>
                    <ul class="header-dropdown m-r--5">
                    </ul>
                </div>
                <div class="body">
                	@include('layouts.partials.notification')
                    <form>
                    	@csrf
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <img src="public/asset/about.png" style="width: 100%; height: 100%;">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label>Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" type="text" readonly="" value="Larasatizka Ayuningtyas">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label>NIM</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" type="text" readonly="" value="1831710102">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label>Tanggal</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" type="text" readonly="" value="25 Oktober 2021">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                </div>
            </div>
    	</div>
    </div>
</div>
@endsection
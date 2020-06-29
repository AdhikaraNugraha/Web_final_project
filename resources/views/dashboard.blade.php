@extends('layouts.admin')

@section('content')

  	<div class="row">
  	    <div class="col-md-12">
  		    <div class="box box-info">
  	            <div class="box-header with-border">
  	                <h3 class="box-title">SISTEM PENDAFTARAN SKRIPSI ONLINE FTK UNDIKSHA</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
                <div class="box-footer with-border">
                    <p>Selamat datang di Sistem Pendaftaran Skripsi Online Fakultas Teknik dan Kejuruan Undiksha</p>
                    <a href="{{ asset('mhs/viewtambahmahasiswa') }}" class="btn btn-info center">Daftar Ujian?</a>
					<div><img src="{{asset('assets/images/FTK.jpg')}}" style="max-width: 100%;"></div>
                </div>
  	        </div>
  	    </div>
  	</div>

@endsection
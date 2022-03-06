@extends('layouts.app')
@section('title', 'History Ujian - '.Auth::user()->nama)
@section('breadcrumb')
  <h1><i class="fa fa-check-square"></i> History Ujian</h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Hi, {{ Auth::user()->nama }}</li>
  </ol>
@endsection
@section('content')
<?php include(app_path().'/functions/myconf.php'); ?>
  <div class="col-md-12">
	<div class="box box-primary">
	  <div class="box-header with-border">
		<h3 class="box-title">History Ujian {{ Auth::user()->nama }}</h3>
	  </div>
	  <div class="box-body">
		<table class="table table-condensed table-hover" id="table_detail">
		  <thead>
			<tr>
			  <th>Paket</th>
			  {{-- <th>Soal</th> --}}
			  <th>Nilai</th>
			  <th style="text-align: center;">Aksi</th>
			</tr>
		  </thead>
		</table>
	  </div>
	</div>
  </div>
@endsection
@push('css')
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/extensions/FixedHeader/css/fixedHeader.bootstrap.css')}}">
<style>
	.bg-aqua{
		background-color: #117e98 !important;
	}
</style>
@endpush
@push('scripts')
<script src="{{URL::asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js')}}"></script>
<script>
	$(document).ready(function (){
	  table_paket_soal = $('#table_detail').DataTable({
		processing: true,
		serverSide: true,
		responsive: true,
		lengthChange: true,
		ajax: {
		  url: '{!! route('elearning.laporan.data_siswa') !!}',
		  data: {"id_user": '{{ Auth::user()->id }}'},
		},
		columns: [
		  {data: 'soal', name: 'soal', orderable: true, searchable: true },
		//   {data: 'soal', name: 'soal', orderable: true, searchable: true },
		//   {data: 'email', name: 'email', orderable: true, searchable: true },
		  {data: 'jumlah_nilai', name: 'jumlah_nilai', orderable: true, searchable: true },
		  {data: 'action', name: 'action', orderable: false, searchable: false, },
		],
		"drawCallback": function (setting) {}
	  });
	});
</script>
@endpush
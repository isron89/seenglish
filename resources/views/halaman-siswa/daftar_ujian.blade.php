@extends('layouts.app')
@section('title', 'Daftar Ujian - '.Auth::user()->nama)
@section('breadcrumb')
  <h1><i class="fa fa-check-square"></i> Daftar Ujian</h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/home') }}"><i class="fa fa-home"></i> Home</a></li>
    <li class="active">Hi, {{ Auth::user()->nama }}</li>
  </ol>
@endsection
@section('content')
<?php include(app_path().'/functions/myconf.php'); ?>
  <div class="col-md-8">
	<div class="box box-primary">
	  <div class="box-header with-border">
		<h3 class="box-title">Daftar Ujian</h3>
	  </div>
	  <div class="box-body">
		<form class="form-horizontal" id="form-siswa" enctype="multipart/form-data">
			<div class="box-body">
			  <input type="hidden" name="id" value="{{ Auth::user()->id }}">
			  <input type="hidden" name="nama" value="{{ Auth::user()->nama }}">
			  <input type="hidden" name="username" value="{{ Auth::user()->username }}">
			  <input type="hidden" name="pendidikan" value="{{ Auth::user()->pendidikan }}">
			  <input type="hidden" name="jk" value="{{ Auth::user()->jk }}">
			  <input type="hidden" name="no_hp" value="{{ Auth::user()->no_hp }}">
			  <input type="hidden" name="alamat" value="{{ Auth::user()->alamat }}">
			  <input type="hidden" name="password" value="">
			  <div class="form-group">
				<label for="id_kelas" class="col-sm-3 control-label">Sesi</label>
				<div class="col-sm-9">
				  <select name="kelas" id="id_kelas" class="form-control select2Class" style="width: 100%" required>
					<option></option>
					@forelse($kelas as $data_kelas)
					<option value="{{ $data_kelas->id }}">{{ $data_kelas->nama }}</option>
					@empty
					@endforelse
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label for="email" class="col-sm-3 control-label">Email</label>
				<div class="col-sm-9">
				  <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly placeholder="Email">
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label">Bukti Transfer</label>
				<div class="col-sm-9">
				  <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer" required>
				</div>
			  </div>
			  <div class="form-group" style="margin-top: 20px">
				<div class="col-sm-offset-3 col-sm-9">
				  <div id="notif" style="display: none;"></div>
				  <img src="{{ url('/assets/images/facebook.gif') }}" style="display: none;" id="loading">
				  <div id="wrap-btn">
					@if(Auth::user()->status_ujian == 'Tidak Terdaftar')
					<button type="submit" class="btn btn-success" id="simpan-siswa">Daftar</button>
					@else
					<button type="submit" class="btn btn-success" disabled>Daftar</button>
					@endif
					{{-- <button type="button" class="btn btn-danger" id="batal">Batal</button> --}}
				  </div>
				</div>
			  </div>
			</div>
		</form>
	  </div>
	</div>
  </div>
  <div class="col-md-4">
	<div class="box box-success">
	  <div class="box-header with-border">
		<h3 class="box-title">Informasi</h3>
		<div class="box-tools pull-right">
		  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	  </div>
	  <div class="box-body">
		<p class="text-muted"><i class="fa fa-info-circle"></i> Mohon untuk melakukan pembayaran sebesar <b> Rp. 50.000 </b> ke rekening <b> BCA 705695546 a/n SE English </b>. Setelah melakukan pembayaran upload bukti pembayaran ke form yang telah disediakan, admin akan melakukan validasi jika pembayaran sudah sesuai maka <b> token </b> untuk ujian akan dikirim ke email anda <b>({{ Auth::user()->email }})</b>.</p>
	  </div>
	</div>
  </div>
  @if(Auth::user()->status_ujian == 'Belum Mulai')
  <div class="col-md-12">
  	<div class="alert alert-danger">
		<i class="fa fa-info"></i> Anda telah terdaftar ujian pada <b>{{ Auth::user()->getKelas->nama }}</b>, dengan token <b>{{ Auth::user()->token_ujian }}</b><br>
	</div>
  </div>
  @endif
@endsection
@push('css')
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/media/css/dataTables.bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables/extensions/FixedHeader/css/fixedHeader.bootstrap.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/select2/select2.min.css')}}">
<style>
	.bg-aqua{
		background-color: #117e98 !important;
	}

	.select2-container--default .select2-selection--single {
		height: 33px;
	}
</style>
@endpush
@push('scripts')
<script src="{{ url('assets/dist/js/sweetalert2.all.min.js') }}"></script>
<script src="{{URL::asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables/extensions/FixedHeader/js/dataTables.fixedHeader.js')}}"></script>
<script>
	$(document).ready(function (){
		$('.select2Class').select2({
			placeholder: "Pilih Sesi",
    		allowClear: true
		});

		$("#form-siswa").submit(function(e) {
			e.preventDefault();
			$("#wrap-btn").hide();
			$("#loading").show();
			let formData = new FormData(this);
			$.ajax({
				type: "POST",
				url: "{{ url('/crud/update-siswa') }}",
				data: formData,
				cache: false,
				contentType: false,
				processData: false,
				success: function(data) {
					$("#loading").hide();
					$("#wrap-btn").show();
					if (data == 'ok') {
						$("#notif").removeClass('alert alert-danger').addClass('alert alert-info').html("Data berhasil disimpan. Tunggu validasi dari admin untuk mendapatkan token ujian.").show();
						// swal(
						// 	'Berhasil!',
						// 	'Data berhasil disimpan. Tunggu validasi dari admin untuk mendapatkan token ujian.',
						// 	'success'
						// )
						window.location.href = "{{ url('siswa/daftar-ujian') }}";
						// history.back();
					} else {
						$("#notif").removeClass('alert alert-info').addClass('alert alert-danger').html(data).show();
					}
				}
			})
		});
	});
</script>
@endpush
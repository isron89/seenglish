<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<title>Sertifikat Ujian {{ $siswa->nama }}</title>
<?php require app_path().'/functions/myconf.php'; ?>
<div style="width:100%; height:70%; padding:20px; text-align:center; border: 10px solid #787878">
	<div style="width:92%; height:70%; padding:20px; text-align:center; border: 5px solid #787878">
		   <span style="font-size:50px; font-weight:bold">Certificate of Achievement</span>
		   <br><br>
		   <span style="font-size:25px"><i>This is to certify that</i></span>
		   <br><br>
		   <span style="font-size:30px"><b>{{ $siswa->nama }}</b></span><br/><br/>
		   <span style="font-size:20px"><i>achieved the following scores on the</i></span> <br/><br/>
		   <span style="font-size:35px; font-weight:bold">TOEFL</span> <br/><br/>
		   <span style="font-size:20px"><b>{{ $jumlah_jawaban_benar->jumlahNilai }}</b></span> <br/><br/><br/>
		   <span style="font-size:20px"><i>dated</i></span><br>
		   {{ date('D', strtotime($jawab_first->created_at)) }},
		   {{ date("M j Y", strtotime($jawab_first->created_at)) }}
		   {{-- {{ timeStampIndoOnly($jawab_first->created_at) }} --}}
		  {{-- <span style="font-size:30px"></span> --}}
	</div>
</div>
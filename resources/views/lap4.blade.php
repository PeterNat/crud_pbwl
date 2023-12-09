@extends('master') 
@section('title', 'Rekaptulasi Peminjaman Per-Anggota') 

@section('content')

<div class="container mt-3">
  <h2>Rekaptulasi Peminjaman Per-Anggota</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>NPM</th>
		<th>Nama Anggota</th>
		<th>Alamat</th>
		<th>Jumlah Meminjam</th>		
	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_lap4 as $lap4)
      <tr>
		<td>{{$lap4->npm}}</td>
		<td>{{$lap4->nama}}</td>
		<td>{{$lap4->alamat}}</td>
		<td style="text-align:center">{{$lap4->JumlahMinjam}}x</td>
      </tr>
	@endforeach  
	</tbody>
  </table>	 
</div>
@endsection


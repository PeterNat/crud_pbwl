@extends('master') 
@section('title', 'Rekaptulasi Peminjaman Per-Judul') 

@section('content')

<div class="container mt-3">
  <h2>Rekaptulasi Peminjaman Per-Judul</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>Judul Buku</th>
		<th>Penulis</th>
		<th>Penerbit</th>
		<th>Jumlah Dipinjam</th>		
	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_lap3 as $lap3)
      <tr>
		<td>{{$lap3->JudulBuku}}</td>
		<td>{{$lap3->Penulis}}</td>
		<td>{{$lap3->Penerbit}}</td>
		<td style="text-align:center">{{$lap3->JumlahPinjam}}x</td>
      </tr>
	@endforeach  
	</tbody>
  </table>	 
</div>
@endsection


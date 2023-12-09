@extends('master') 
@section('title', 'Laporan Pembayaran Denda') 

@section('content')

<div class="container mt-3">
  <h2>Laporan Pembayaran Denda</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>Id Peminjaman</th>
	    <th>Nama Anggota</th>
		<th>Alamat</th>
		<th>Judul Buku</th>		
		<th>Penulis</th>		
		<th>Lama Pinjam</th>		
		<th>keterlambatan</th>		
		<th>Denda</th>		
	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_lap2 as $lap2)
	<?php
	$lamaPinjam = $lap2->LamaPinjam;
	$keterlambatan = max($lamaPinjam - 3, 0);
	$denda = $keterlambatan * 1000;

	$lap2->Keterlambatan = $keterlambatan;
	$lap2->Denda = $denda;
	?>
      <tr>
	    <td style="text-align:center">{{$lap2->IdPinjam}}</td>
        <td>{{$lap2->NamaAgt}}</td>
        <td>{{$lap2->AlamatAgt}}</td>
		<td>{{$lap2->JudulBuku}}</td>
		<td>{{$lap2->PenulisAgt}}</td>
		<td style="text-align:center">{{$lap2->LamaPinjam}}</td>	
		<td>{{$lap2->Keterlambatan}}</td>
		<td>{{$lap2->Denda}}</td>
      </tr>
	@endforeach  
	</tbody>
  </table>	 
</div>
@endsection


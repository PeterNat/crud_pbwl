@extends('master') 
@section('title', 'Data Peminjaman') 

@section('content')
<div class="container mt-3">
	<div class="container mt-3">
		@if(Session::has('pesan'))
		   <div class="alert alert-danger">{{Session::get('pesan')}}</div>
		@endif	
  <h2>Data Peminjaman</h2>
  <p><a href="/createpeminjaman">
	<button class="btn btn-success mb-2">Tambah Peminjaman</button></a></p>  
 
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr>
        <th style="text-align:center">Id</th>
		<th style="text-align:center">Tgl Pinjam</th>
        <th style="text-align:center">Id Anggota</th>
	    <th style="text-align:center">Id Buku</th>
		<th style="text-align:center">Lama Pinjam</th>
		<th style="text-align:center">Edit</th>
		<th style="text-align:center">Hapus</th>
 	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_peminjaman as $peminjaman)
      <tr>
	    <td style="text-align:center">{{$peminjaman->id}}</td>
		<td style="text-align:center">{{$peminjaman->tgl_pinjam}}</td>
        <td style="text-align:center">{{$peminjaman->id_anggota}}</td>		
		<td style="text-align:center">{{$peminjaman->id_buku}}</td>
		<td style="text-align:center">{{$peminjaman->lama_pinjam}}</td>
		<td style="text-align:center"><a href="{{route('ubahpeminjaman', $peminjaman->id)}}">
			<button class="btn btn-primary btn-sm">Edit</button></a></td>
		<td style="text-align:center">
		    <form action="{{route('hapuspeminjaman', $peminjaman->id)}}" method="post">
		       @csrf
			   <button class="btn btn-primary btn-sm" 
			           onClick="return confirm('Yakin mau dihapus?')">Hapus</button>
			</form></td>
      </tr>
	@endforeach  
	</tbody>
  </table>	 
</div>
@endsection


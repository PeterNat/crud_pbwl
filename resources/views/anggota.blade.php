@extends('master') 
@section('title', 'Data Anggota') 

@section('content')
<div class="container mt-3">
  @if(Session::has('pesan'))
     <div class="alert alert-danger">{{Session::get('pesan')}}</div>
  @endif	

<div class="container mt-3">
  <h2>Data Anggota</h2>
  <p><a href="/createanggota">
    <button class="btn btn-success mb-2">Tambah Anggota</button></a></p>  
  
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <td>Id</td>
        <td>NPM</td>
	    <td>Nama</td>
		<td>Kode Gender</td>
		<td>Alamat</td>
    <td>Edit</td>
    <td>Hapus</td>
		</tr>
	</thead> 

    <tbody>
	@foreach ($data_anggota as $anggota)
      <tr>
	    <td style="text-align:center">{{$anggota->id}}</td>
        <td>{{$anggota->npm}}</td>		
        <td>{{$anggota->nama}}</td>   			  
		<td style="text-align:center">{{$anggota->kodegender}}</td>	
		<td>{{$anggota->alamat}}</td>
    {{-- edit anggota --}}
    <td style="text-align:center"><a href="{{route('ubahanggota', $anggota->id)}}">
			<button class="btn btn-primary btn-sm">Edit</button></a></td>
      {{-- delete anggota --}}
		<td style="text-align:center">
		    <form action="{{route('hapusanggota', $anggota->id)}}" method="post">
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


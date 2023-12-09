@extends('master')
@section('title', 'Edit Peminjaman')

@section('content')
<div class="container mb-3 mt-3">
  <h2>Edit Data Peminjaman</h2>
  {{-- @if(count($errors) > 0) 
     <div class="alert alert-danger">
     <ul class="mb-0">
  	    @foreach($errors->all() as $err)
          <li>{{$err}}</li>
        @endforeach
	 </ul>
	 </div>
  @endif      --}}
  <form method="post" action="{{route('modifpeminjaman', $peminjaman->id)}}">
     @csrf
	  <div class="mb-3 mt-3">
		<label for="tgl_pinjam" class="form-label">Tanggal Pinjam :</label>
		<input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" 
		id="tgl_pinjam" name="tgl_pinjam" value="{{$peminjaman->tgl_pinjam}}">
		@error('tgl_pinjam')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
	  <div class="mb-3 mt-3">
		<label for="id_anggota" class="form-label">Id Anggota :</label>
		<input type="text" class="form-control @error('id_anggota') is-invalid @enderror" 
		id="id_anggota" name="id_anggota" value="{{$peminjaman->id_anggota}}">
		@error('id_anggota')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
	  <div class="mb-3 mt-3">
		<label for="id_buku" class="form-label">Id Buku :</label>
		<input type="text" class="form-control @error('id_buku') is-invalid @enderror" 
		id="id_buku" name="id_buku" value="{{$peminjaman->id_buku}}">
		@error('id_buku')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
 	  <div class="mb-3 mt-3">
		<label for="lama_pinjam" class="form-label">Lama Pinjam :</label>
		<input type="text" class="form-control" @error('lama_pinjam') is-invalid @enderror" 
		id="lama_pinjam" name="lama_pinjam" value="{{$peminjaman->lama_pinjam}}">
		@error('lama_pinjam')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>  	  
      <div class="mb-3 mt-3">
	    <button class="btn btn-success mb-2" type="submit">Simpan</button>
        <button class="btn btn-success mb-2" type="reset">Batal</button>
      </div>
  </form>
</div>
@endsection

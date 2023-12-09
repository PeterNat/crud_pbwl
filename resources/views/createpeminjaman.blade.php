@extends('master')
@section('title', 'Tambah peminjaman')

@section('content')
<div class="container mb-3 mt-3">
  <h2>{{__('form3.title')}}</h2>
  {{-- @if(count($errors) > 0) 
  <div class="alert alert-danger">
  <ul class="mb-0">
	   @foreach($errors->all() as $err)
	   <li>{{$err}}</li>
	 @endforeach
  </ul>
  </div>
@endif  --}}

  <form method="post" action="/savepeminjaman">
     @csrf
	  <div class="mb-3 mt-3">
		<label for="tgl_pinjam" class="form-label">{{__('form3.input.tgl_pinjam')}}</label>
		<input type="date" class="form-control @error('tgl_pinjam') is-invalid @enderror" id="tgl_pinjam" name="tgl_pinjam" value="{{old('tgl_pinjam')}}">
		@error('tgl_pinjam')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
	  <div class="mb-3 mt-3">
		<label for="id_anggota" class="form-label">{{__('form3.input.id_anggota')}}</label>
		<input type="text" class="form-control @error('id_anggota') is-invalid @enderror" id="id_anggota" name="id_anggota" value="{{old('id_anggota')}}">
		@error('id_anggota')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
 	  <div class="mb-3 mt-3">
		<label for="id_buku" class="form-label">{{__('form3.input.id_buku')}}</label>
		<input type="text" class="form-control @error('id_buku') is-invalid @enderror" id="id_buku" name="id_buku" value="{{old('id_buku')}}">
		@error('id_buku')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
	  <div class="mb-3 mt-3">
		<label for="lama_pinjam" class="form-label">{{__('form3.input.lama_pinjam')}}</label>
		<input type="text" class="form-control @error('lama_pinjam') is-invalid @enderror" id="lama_pinjam" name="lama_pinjam" value="{{old('lama_pinjam')}}">
		@error('lama_pinjam')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
      <div class="mb-3 mt-3">
	    <button class="btn btn-success mb-2" type="submit">{{__('form3.input.tombol1')}}</button>
        <button class="btn btn-success mb-2" type="reset">{{__('form3.input.tombol2')}}</button>
      </div>
  </form>
  <a href="/createpeminjaman/en">English</a> |
  <a href="/createpeminjaman">Indonesia</a> 
</div>
@endsection


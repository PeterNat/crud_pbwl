@extends('master') 
@section('title', 'Edit Anggota') 

@section('content')
<div class="container mb-3 mt-3">
  <h2>Edit Data Anggota</h2>
  {{-- @if(count($errors) > 0) 
  <div class="alert alert-danger">
  <ul class="mb-0">
	   @foreach($errors->all() as $err)
	   <li>{{$err}}</li>
	 @endforeach
  </ul>
  </div>
@endif --}}

  <form method="post" action="{{route('modifanggota', $anggota->id)}}">
     @csrf
	  <div class="mb-3 mt-3">
		<label for="npm" class="form-label">NPM :</label>
		<input type="text" class="form-control @error('npm') is-invalid @enderror" 
		id="npm" name="npm" value="{{$anggota->npm}}">
		@error('npm')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="nama" class="form-label">Nama Anggota :</label>
		<input type="text" class="form-control @error('nama') is-invalid @enderror" 
		id="nama" name="nama" value="{{$anggota->nama}}">
		@error('nama')
			<div class="text-danger">{{$message}}</div>
        @enderror
	  </div>
	  <div class="mb-3 mt-3">
		<label for="gender" class="form-label">Gender :</label>
        <div class="form-check">
			<input type="radio" class="form-check-input" id="laki" name="kodegender" value="L"
			 @php if($anggota->kodegender == 'L'){print('checked');} @endphp>
			<label class="form-check-label" for="laki">Laki-laki</label>
		</div>
		<div class="form-check">
			<input type="radio" class="form-check-input" id="perempuan" name="kodegender" value="P"
			 @php if($anggota->kodegender == 'P'){print('checked');} @endphp>			
			<label class="form-check-label" for="radio2">perempuan</label>
		</div>
	  </div>
 	  <div class="mb-3 mt-3">
		<label for="alamat" class="form-label">Alamat :</label>
		<input type="text" class="form-control @error('alamat') is-invalid @enderror" 
		id="alamat" name="alamat" value="{{$anggota->alamat}}">
		@error('alamat')
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

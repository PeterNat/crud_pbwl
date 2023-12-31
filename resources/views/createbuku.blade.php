@extends('master') 
@section('title', 'Tambah Buku') 

@section('content')
<div class="container mb-3 mt-3">
  <h2>{{ __('form.title') }}</h2> 
  <form method="post" action="/savebuku">
     @csrf
	 <input type="hidden" name="locale" value="{{$locale}}">
	  <div class="mb-3 mt-3">
		<label for="judul" class="form-label">{{__('form.input.judul')}}</label>
		<input type="text" class="form-control @error('judul') is-invalid @enderror" 
		       id="judul" name="judul" value="{{old('judul')}}">
		@error('judul')
			<div class="text-danger">{{$message}}</div>
        @enderror		
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="penulis" class="form-label">{{__('form.input.penulis')}}</label>
		<input type="text" class="form-control @error('penulis') is-invalid @enderror" 
		       id="penulis" name="penulis" value="{{old('penulis')}}">
	  	@error('penulis')
			<div class="text-danger">{{$message}}</div>
        @enderror		
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="penerbit" class="form-label">{{__('form.input.penerbit')}}</label>
		<input type="text" class="form-control @error('penerbit') is-invalid @enderror" 
		       id="penerbit" name="penerbit" value="{{old('penerbit')}}">		
		@error('penerbit')
			<div class="text-danger">{{$message}}</div>
        @enderror			      
	  </div>  
	  <div class="mb-3 mt-3">
		<label for="radio1" class="form-label">{{__('form.input.kategori')}}</label>
        <div class="form-check">
			<input type="radio" class="form-check-input" id="radio1" name="kodekat" value="S"
			 @php if(old('kodekat') != 'F'){print('checked');} @endphp>			
			<label class="form-check-label" for="radio1">{{__('form.input.pilihan_kategori.sains')}}</label>
		</div>
		<div class="form-check">
			<input type="radio" class="form-check-input" id="radio2" name="kodekat" value="F"
			 @php if(old('kodekat') == 'F'){print('checked');} @endphp>						
			<label class="form-check-label" for="radio2">{{__('form.input.pilihan_kategori.fiksi')}}</label>
		</div>
	  </div>
 	  <div class="mb-3 mt-3">
		<label for="harga" class="form-label">{{__('form.input.harga')}}</label>
		<input type="text" class="form-control @error('harga') is-invalid @enderror" 
		       id="harga" name="harga" value="{{old('hargabuku')}}">		
	  	@error('harga')
			<div class="text-danger">{{$message}}</div>
        @enderror	
     </div>		
	 <div class="mb-3 mt-3">
	    <button class="btn btn-success mb-2" type="submit">{{__('form.input.tombol1')}}</button>
        <button class="btn btn-success mb-2" type="reset">{{__('form.input.tombol2')}}</button>
      </div>
  </form>
  <a href="/createbuku/en">English</a> |
  <a href="/createbuku">Indonesia</a> 
</div>
@endsection

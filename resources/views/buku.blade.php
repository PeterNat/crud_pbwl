@extends('master') 
@section('title', 'Data Buku') 

@section('content')
<div class="container mt-3">
  @if(Session::has('pesan'))
     <div class="alert alert-danger">{{Session::get('pesan')}}</div>
  @endif	
  
  <h2>{{ __('table.title') }}</h2>  
  <p><a href="/createbuku">
  <button class="btn btn-success mb-2">{{__('table.column.tombol3')}}</button></a></p>  

  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>Id</th>
        <th>{{__('table.column.judul')}}</th>
	    <th>{{__('table.column.penulis')}}</th>
		<th>{{__('table.column.penerbit')}}</th>
		<th>{{__('table.column.kategori')}}</th>		
		<th>{{__('table.column.harga')}}</th>
		<th>{{__('table.column.edit')}}</th>
		<th>{{__('table.column.hapus')}}</th>		
		</tr>
	</thead> 

    <tbody>
	@foreach ($data_buku as $buku)
      <tr>
	    <td style="text-align:center">{{$buku->id}}</td>
        <td>{{$buku->judul}}</td>
		<td>{{$buku->penulis}}</td>	
		<td>{{$buku->penerbit}}</td>   			  
		<td style="text-align:center">{{$buku->kodekategori}}</td>	
		<td style="text-align:right">{{number_format($buku->hargabuku)}}</td>		
        <td style="text-align:center"><a href="{{route('ubahbuku', $buku->id)}}">
			<button class="btn btn-primary btn-sm">{{__('table.column.edit')}}</button></a></td>
		<td style="text-align:center">
		    <form action="{{route('hapusbuku', $buku->id)}}" method="post">
		       @csrf
			   <button class="btn btn-primary btn-sm" 
        onClick="return confirm('{{__('table.column.alert_hapus')}}')">
    {{__('table.column.hapus')}}
</button>

			</form>
		</td>  				
      </tr>
	@endforeach  
	</tbody>
  </table>
  <a href="/buku/en">English</a> |
  <a href="/buku">Indonesia</a> 
</div>  
@endsection


@extends('master') 
@section('title', 'Rekaptulasi Rata-rata Harga Buku Tiap Penerbit') 

@section('content')

<div class="container mt-3">
  <h2>Rekaptulasi Rata-rata Harga Buku Tiap Penerbit</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>Penerbit</th>
		<th>Harga Rata-rata</th>
	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_lap5 as $lap5)
      <tr>
		<td>{{$lap5->penerbit}}</td>
		<td style="text-align:center">{{ number_format($lap5->hargaRata, 0, ',', '.') }}</td>
      </tr>
	@endforeach  
	</tbody>
  </table>	 
</div>
@endsection


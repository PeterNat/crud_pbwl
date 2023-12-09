@extends('master') 
@section('title', 'Rekaptulasi Jumlah Buku Tiap Penulis') 

@section('content')

<div class="container mt-3">
  <h2>Rekaptulasi Jumlah Buku Tiap Penulis</h2>       
  <table class="table table-bordered table-striped">
    <thead class="table-success">
      <tr style="text-align:center">
        <th>Penulis</th>
		<th>Jumlah Karya Buku</th>
	  </tr>
	</thead> 

    <tbody>
	@foreach ($data_lap6 as $lap6)
      <tr>
		<td>{{$lap6->penulis}}</td>
		<td style="text-align:center">{{ $lap6->JumlahKaryaBuku }}</td>
      </tr>
	@endforeach  
	</tbody>
  </table>	 
</div>
@endsection


@extends('layouts.admin')
@section('content')
<div class="container">
		@if(Session::has('alert-success'))
			<div class="alert alert-success">
				<strong>{{\Illuminate\Support\Facades\Session::get('alert-success')}}</strong>
			</div>
		@endif
  <!-- <div class="col-lg-12"> -->
  <div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i>Daftar Produk Toko
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          	<a class="btn btn-md btn-info pull-right" href="{{ route('laporan.create',compact('id')) }}">
          	Tambah Produk
      		</a>
      	</div>
      </div>
      <table id="table" class="table table-responsive-sm table-hover">
        <thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Target</th>
				<th>Hasil</th>
				<th>Aksi</th>
			</tr>
		</thead>
        <tbody>
			@php $n=1; @endphp
			@foreach($data as $d)
				<tr>
					<td>{{ $n++ }}</td>
					<td>{{ $d->produk_nama }}</td>
					<td>{{ $d->target }}</td>
					<td>{{ $d->hasil }}</td>
					<td>
							<form action="{{route('laporan.destroy',$d->laporan_id)}}" method="post">
									{{ csrf_field()}}
									{{ method_field('DELETE')}}
							<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">D</i></button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
      </table>
    </div>
  </div>
  <!-- </div> -->
</div>
@endsection
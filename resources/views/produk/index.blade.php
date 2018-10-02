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
      <i class="fa fa-align-justify"></i>Daftar Produk
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          	<a class="btn btn-md btn-info pull-right" href="{{ route('produk.create') }}">
          	Tambah Data
      		</a>
      	</div>
      </div>
      <table id="table" class="table table-responsive-sm table-hover">
        <thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
        <tbody>
			@php $n=1; @endphp
			@foreach($data as $d)
				<tr>
					<td>{{ $n++ }}</td>
					<td>{{ $d->produk_nama }}</td>
					<td>{{ $d->produk_desc }}</td>
					<td>{{ $d->produk_harga }}</td>
					<td>
							<form action="{{route('produk.destroy',$d->produk_id)}}" method="post">
									{{ csrf_field()}}
									{{ method_field('DELETE')}}
							<a href="{{ route('produk.edit',$d->produk_id) }}" class="btn btn-info btn-sm">E</a>
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
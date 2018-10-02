@extends('layouts.admin')
@section('content')
<div class="container">
  <!-- <div class="col-lg-12"> -->
  <div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i>Tambah Data Produk
    </div>
    <div class="card-body">
      <form action="{{ route('laporan.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="row">
                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Produk</label>
                        <select name="produk_id" class="form-control">
                            @foreach($data as $d)    
                                <option value="{{ $d->produk_id }}">{{ $d->produk_nama }}</option>    
                            @endforeach
                        </select>
                        
                    </div>
                </div>
                <div  class="col-md-3">
                    <div class="form-group">
                        <label for="nama">Target</label>
                        <input type="number" class="form-control" name="target">
                        <input type="hidden" class="form-control" name="toko_id" value="{{$id}}">
                    </div>
                </div>
                <div  class="col-md-3">
                    <div class="form-group">
                        <label for="nama">Hasil</label>
                        <input type="number" class="form-control" name="hasil">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-md btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </div>
  </div>
  <!-- </div> -->
</div>

@endsection

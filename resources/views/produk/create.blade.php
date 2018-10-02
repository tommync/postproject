@extends('layouts.admin')
@section('content')
<div class="container">
  <!-- <div class="col-lg-12"> -->
  <div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i>Tambah Data Produk
    </div>
    <div class="card-body">
      <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="row">
                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Produk</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="7"></textarea>
                    </div>                
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-md btn-danger">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
  </div>
  <!-- </div> -->
</div>

@endsection

@extends('layouts.admin')
@section('content')
<div class="container">
  <!-- <div class="col-lg-12"> -->
  <div class="card">
    <div class="card-header">
      <i class="fa fa-align-justify"></i>Tambah Data Toko
    </div>
    <div class="card-body">
      <form action="{{ route('toko.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="row">
                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Toko</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div  class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Telp</label>
                        <input type="text" class="form-control" id="telp" name="telp">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="deskripsi">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="7"></textarea>
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

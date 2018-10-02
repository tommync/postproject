@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Grafik Penjualan
                </div>
                <div class="card-body">
                    @php $n=0; @endphp
                    @foreach($hasil as $h)
                    <?= Lava::render('ColumnChart', 'Finances'.$n.'-', 'view'.$n) ; ?>
                    <div id='view{{$n}}'></div>
                    @php $n++; @endphp
                    @endforeach
                    
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

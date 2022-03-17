@extends('mainTemplate')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" whidth="100%">
            <div class="container">
                <div class="col">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->name}}</h5>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{number_format( $data->price/100, 2, ",", " ")}} €</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
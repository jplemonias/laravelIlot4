@extends('mainTemplate')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" whidth="100%">
            <div class="container">
                <div class="col">
                        <img width="100%" src="/{{$data->image}}" class="card-img-top" alt="Cover :{{$data->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->name}}</h5>
                            <p class="card-text">{{$data->description}}</p>
                            @if( $data->discount != null)
                                <small class="badge rounded-pill bg-success">discount : {{$data->discount}}%</small>
                            @endif
                        </div>
                        <div class="card-footer">
                            @if( $data->discount != null )
                                <small class="text-muted"><del>{{$data->price}}</del> € => {{$data->priceDiscounted}} €</small>
                            @else
                                <small class="text-muted">{{number_format( $data->price/100, 2, ",", " ")}} €</small>
                            @endif

                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
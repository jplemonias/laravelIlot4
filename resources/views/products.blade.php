@extends('mainTemplate')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" whidth="100%">
            @foreach ($data as $key => $game)
                <div class="col">
                    <a href="product/{{ $key+1 }}" class="card w-100 h-100">
                        <img width="100%" src="{{$game->image}}" class="card-img-top" alt="Cover :{{$game->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$game->name}}</h5>
                            <p class="card-text">{{$game->description}}</p>
                            @if( $game->discount != null)
                                <small class="badge rounded-pill bg-success">discount : {{$game->discount}}%</small>
                            @endif
                        </div>
                        <div class="card-footer">
                            @if( $game->discount != null )
                                <small class="text-muted"><del>{{number_format($game->price/100, 2, ",", " ")}}</del> € => {{$game->priceDiscounted}} €</small>
                            @else
                                <small class="text-muted">{{number_format( $game->price/100, 2, ",", " ")}} €</small>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('cssSpe')
    <link rel="stylesheet" href="products.css">
@endsection
@extends('mainTemplate')

@section('content')
<div class="container mt-5">
    <h1>DashBoard Products :</h1>
    <a href="/addNewProduct">
        <button type="button" class="btn btn-success">Add new product</button>
    </a>
    <div class="row mb-3">
        <div class="col-md-12 themed-grid-col">
            @foreach ($data as $key => $game)
                <div class="col">
                    <div class="card w-100 h-100">
                        <div class="card-body">
                            <div class="pb-3">
                                <h5 class="card-title">{{$game->name}}</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-2 themed-grid-col">Price : {{number_format( $game->price/100, 2, ",", " ")}}</div>
                                <div class="col-md-2 themed-grid-col">Quant : {{$game->quantity}}</div>
                                <div class="col-md-12 themed-grid-col">{{$game->description}}</div>
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; justify-content: flex-end;">
                            <div class="col-md-2 themed-grid-col" >
                                <a href="product/{{$game->id}}"><button type="button" class="btn btn-info">To see</button></a>
                                <a href="edit/{{$game->id}}"><button type="button" class="btn btn-primary">Edit</button></a>

                                <form action="{{route('deleteProduct', $game->id)}}" method="POST" style="display: contents">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" class="btn btn-danger"value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <a href="/addNewProduct">
        <button type="button" class="btn btn-success">Add new product</button>
    </a>
</div>
@endsection
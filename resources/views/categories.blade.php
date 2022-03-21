@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="/products.css">
@endsection

@section('content')
    @foreach($categories as $category)
    <a href="category/{{$category->id}}/products" class="btn btn-primary">{{$category->name}}</a><br>
        @foreach ($products as $product)
            @if($product->category->name === $category->name)
            <div class="card">
                <p>{{$product->name}}</p>
                <p>{{$product->category->name}}</p>
{{--                <img src="/{{$product->image}}">--}}
                <p>{{$product->price}}</p>
                <a href="/product/{{$product->id}}"><button>Fiche produit</button></a>
                <button>Ajouter au panier</button>
            </div>
            @endif
        @endforeach
        <br>
    @endforeach
@endsection

@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="/products.css">
@endsection

@section('content')
    @foreach($categories as $category)
    <a href="category/{{$category->id}}/products" class="btn btn-primary">{{$category->name}}</a><br>
        @foreach ($category->products as $product)
            <div class="card">
                <p>{{$product->name}}</p>
                <p>{{$category->name}}</p>
                <img src="/{{$product->image}}">
                <p>{{$product->price}}</p>
                <a href="/product/{{$product->id}}"><button>Fiche produit</button></a>
                <button>Ajouter au panier</button>
            </div>
        @endforeach
        <br>
    @endforeach
@endsection

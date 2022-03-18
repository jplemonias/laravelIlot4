
@extends('mainTemplate')

@section('content')

<div class="wrapper">
<div class="catalogue">
    <h2>PARCOURIR LE CATALOGUE</h2>
</div>

<div class="results">
    <h2>Resultats</h2>
    @foreach ($products as $product)
    <div class="card">
        <p>{{$product->name}}</p>
        <p>{{$product->category->name}}</p>
        <img src="{{$product->image}}">
        <p>{{$product->price}}</p>
        <a href="/product/{{$product->id}}"><button>Fiche produit</button></a>
        <button>Ajouter au panier</button>
    </div>
    @endforeach
</div>
</div>
@endsection

@section('cssSpe')
    <link rel="stylesheet" href="products.css">
@endsection

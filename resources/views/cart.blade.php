@extends('mainTemplate')

@section('title', 'Mon Panier')

@section('cssSpe')
    <link rel="stylesheet" href="cart.css">
@endsection

@section('content')
    <div class="container">
        <h2>Mon Panier</h2>
        <br>
        <div class="cartTitles">
            <div class="quantityPrices">
                <p>PRIX UNITAIRE</p>
                <p>QUANTITÉ</p>
                <p>PRIX TOTAL</p>
            </div>
        </div>
        @foreach($order->products as $product)
            <div class="products">
                <div class="product">
                    <form method="post" class="delete_form" action="/cart/{{$product->id}}/delete">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="X" class="btn btn-danger">
                    </form>
                    <img src="{{$product->image}}">
                    <p>{{$product->name}}</p>
                </div>
                <p>{{$product->price}}</p>
                <input type="number" value="{{$product->pivot->quantity}}" min="0">
                <p>{{$product->pivot->quantity * $product->price}}</p>
            </div>
        @endforeach
        <div class="reduction">
            <input type="text" placeholder="Bon de réduction">
            <input type="submit" value="Appliquer" class="submit">
        </div>
        <div class="prices">
            <div class="price">
                <p>SOUS-TOTAL</p>
                <p>Price</p>
            </div>
            <div class="price">
                <p>FRAIS DE PORT</p>
                <p>Price</p>
            </div>
            <div class="price">
                <p>Reduction</p>
                <p>Price</p>
            </div>
            <div class="totalPrice">
                <div class="price">
                    <p>Total</p>
                    <p>Price</p>
                </div>
                <input type="submit" value="Valider le panier">
            </div>
        </div>
    </div>
@endsection



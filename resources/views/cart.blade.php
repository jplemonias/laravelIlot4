@extends('mainTemplate')

@section('title', 'Mon Panier')

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
        @foreach($orders as $order)
            @dump($order->product)
        <div class="products">
            <div class="product">
                <button>x</button>
{{--                <img src="{{}}">--}}
                <p>{{$order->products}}</p>
            </div>
            <p>{{$order->product}}</p>
            <input type="number" value="1" min="0">
            <p>{{}}</p>
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

@section('cssSpe')
    <link rel="stylesheet" href="cart.css">
@endsection

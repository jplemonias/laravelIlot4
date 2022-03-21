@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="/css/style_margo.css">
@endsection

@section('content')

<div class="main">
    <div class="prod-container">
        <table>
        <tr>
            <tr><h1>{{'PRODUIT'}}</h1></tr>
            </br>
            <tr><h3>Name : {{ $product->name }}</h3></tr>
            </br>
            <tr><h3>Description : {{ $product->description }}</h3></tr>
            </br>
            <tr><h3>Price : {{ $product->price }}</h3></tr>
            </br>
            <tr><img src="/{{$product->image}}"></tr>
            </br>
            </br>
            <tr><h3>Availability : {{ $product -> available }}</h3></tr>
    </table>
    </div>
    @endsection
</div>




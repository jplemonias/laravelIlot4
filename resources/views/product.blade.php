@extends('mainTemplate')

@section('content')
    <p>Jeu {{ $product->name }}</p>
    <p>Description {{ $product->description }}</p>
    <p>Prix {{ $product->price }}</p>
    <p>Taille {{ $product->weight }}</p>
    <p>Disponible {{ $product->available }}</p>
    <p>Réduction {{ $product->discount }}</p>
    <img src="/{{$product->image}}">
@endsection

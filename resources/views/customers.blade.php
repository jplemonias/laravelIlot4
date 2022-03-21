@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="/products.css">
@endsection

@section('content')
    @foreach($customers as $customer)
        <p>{{$customer->first_name}} {{$customer->last_name}}</p>
        <p>{{$customer->adress}} {{$customer->postal_code}} {{$customer->city}}</p><br><br>
    @endforeach
@endsection

@extends('mainTemplate')
@inject('cart', 'cart')

@section('content')
    @php
        $data = $data[0]
    @endphp
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" whidth="100%">
            <div class="container">
                <div class="col">
                    <div class="card w-100 h-100">
                        {{ $cart->printImg($data) }}
                        <div class="card-body">
                            {{ $cart->printInfosBooks($data) }}
                        </div>
                        <div class="card-footer">
                            {{ $cart->printPrice($data) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('mainTemplate')

@section('content')


    <link rel="stylesheet" href="/app.css">

@section('content')
    <p>contenu de Marguerite</p>
    <div class="wrapper">
        <div class="catalogue">
            <h2>PARCOURIR NOTRE CATALOGUE</h2>
            <h6>Type</h6>
            <div class="type">
                <div class="type1">Grey</div>
                <div class="type2">Yellow</div>
                <div class="type3">Blue</div>
                <div class="type4">Orange</div>
            </div>

            <div class="results">
                <h2>Resultats</h2>
                <div class="cards">
                    <div class="card">
                        <img src="" alt="">
                        <h6>Déco image</h6>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <h6>Déco image</h6>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <h6>Déco image</h6>
                    </div>
                    <div class="card">
                        <img src="" alt="">
                        <h6>Déco image</h6>
                    </div>
                </div>
            </div>

            {{--  @foreach ($products as $value)
           @dump($value)
           @endforeach
           {{--    @dd($products)--}}


@endsection

@section('cssSpe')
    <link rel="stylesheet" href="products.css">
@endsection


@extends('mainTemplate')

@section('content')
<div class="catalogue">
    <h2>PARCOURIR LE CATALOGUE</h2>
    <div>
        <h6>Budget</h6>
        <div class="input">
            <div>
                <input type="number" name="number-min">
                <input type="number" name="number-max">
            </div>
            <div class="range">
                <input type="range" name="number-range">
            </div>
        </div>
        <div>
            <h6>Coloris</h6>
            <div class="color">
                <div class="color1">Grey</div>
                <div class="color2">Yellow</div>
                <div class="color3">Blue</div>
                <div class="color4">Orange</div>
                <div class="color5">Black</div>
            </div>
        </div>
    </div>
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
@endsection

@section('cssSpe')
    <link rel="stylesheet" href="products.css">
@endsection
@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="/css/style_margo.css">
@endsection

@section('content')
{{--    @foreach ($products as $product where $product[$id]->'1')--}}
{{--        --}}{{--        <div class="prod-container">--}}

<div class="main">
    <div class="prod-container">
        <table>
{{--        <tr>--}}
{{--            <th scope="row">PRODUIT</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">Id</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">Name</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">Description</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">Price</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">Availability</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">Film</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <th scope="row">button</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
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

    {{--            <th scope="row">Name</th>--}}
    {{--        </tr>--}}

{{--    <thead>--}}
{{--        <tr>--}}
{{--            <th>Col 1</th>--}}
{{--            <th>Col 2</th>--}}
{{--        </tr>--}}
{{--        <thead>--}}
{{--        <tbody>--}}
{{--        <tr>--}}
{{--            <td>Contenu 1</td>--}}
{{--            <td>Contenu 2</td>--}}
{{--        </tr>--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--            <p></p>--}}

    </div>
    @endsection
</div>




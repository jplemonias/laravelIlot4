@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="css/style_margo.css">
@endsection

@section('content')

<div>
    <div class="prod-container">
    <table>
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col"> Id</th>
        <th scope="col"> Name</th>
        <th scope="col"> Description</th>
        <th scope="col"> Price</th>
        <th scope="col"> Cover</th>
        <th scope="col"> Availability</th>
        <th scope="col"> Fiche </th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
{{--        <div class="prod-container">--}}
            <tr>
                <th scope="row"><a href="/products/{{ $product->id }}"></th>
                <td><H3>{{ $product->id }}</H3></td>
                <td><p>{{ $product->name }}</p></td>
                <td>{{ $product->description }}</p></td>
                <td><p>{{ $product->price }}</p></td>
                <td><p>{{ $product->image  }}</p></td>
                <td><p>{{ $product -> available }}</p></td>
                <td><p><a href="/product/{{$product->id}}"> Voir </a></p></td>
            </tr>
    @endforeach
    </tbody>
    </table>
    <p></p>
    <p></p>
</div>
    @endsection





{{--    <script src="js/jquery-3.3.1.min.js"></script>--}}
{{--    <script src="js/popper.min.js"></script>--}}
{{--    <script src="js/bootstrap.min.js"></script>--}}
{{--    <script src="js/main.js"></script>--}}







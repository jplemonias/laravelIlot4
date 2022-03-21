@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="css/style_margo.css">
@endsection

@section('content')


    <div>

        <div class="prod-container">
            <h4>Classement des produits par prix</h4>
        </br>
            <table>
                <thead>
                <tr>
                    <th scope="col"> Price</th>
                    <th scope="col"> Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($product as $product)
                    <tr>
{{--                        <th scope="row"><a href="/OrderNameproducts/{{ $product->id }}"></a></th>--}}
                        <td><p>{{ $product->price }}</p></td>
                        <td><p>{{ $product->name }}</p></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            <p></p>
            <p></p>
        </div>
    </div>
@endsection

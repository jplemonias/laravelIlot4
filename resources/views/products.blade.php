
@extends('mainTemplate')

    <link rel="stylesheet" href="/app.css">

@section('content')
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
            @foreach ($products as $product)
            @endforeach
            @dd($products)

            <div class="table">
                <h2>Resultats</h2>
                <table>
                    <thead>
                    <tr>
                        <th colspan="2">The table header</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>The table body</td>
                        <td>with two columns</td>
                    </tr>
                    </tbody>
                </table>

            </div>

      @foreach ($products as $product)
           @endforeach
           @dd($products)


@endsection

@section('cssSpe')
    <link rel="stylesheet" href="products.css">
@endsection

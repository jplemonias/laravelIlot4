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

                </tr>
                </thead>
                <tbody>
{{--                @foreach ($products as $product)--}}
{{--                    --}}{{--        <div class="prod-container">--}}
                    <tr>
                        <th scope="row"><a href="/OrderNameproducts/{{ $product->id }}"></th>
                        <td><p>{{ $product->name }}</p></td>
                    </tr>
                </tbody>
            </table>
            <p></p>
            <p></p>
        </div>
@endsection


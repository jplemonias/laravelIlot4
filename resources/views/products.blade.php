@extends('mainTemplate')

@section('cssSpe')
    <link rel="stylesheet" href="css/style_margo.css">
@endsection

@section('content')




    <table>
    <thead>
    <tr>
        <th scope="col">
            <label class="control control--checkbox">
                <input type="checkbox" class="js-check-all"/>
                <div class="control__indicator"></div>
            </label>
        </th>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Availability</th>
        <th scope="col">Cover</th>
        <th scope="col">button</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
{{--        <div class="prod-container">--}}
            <tr>
                <th scope="row"><a href="/products/{{ $product->id = 1 }}"></th>
                <td><H3>{{ $product->id }}</H3></td>
                <td><p>{{ $product->name }}</p></td>
                <td>{{ $product->description }}</p></td>
                <td><p>{{ $product->price }}</p></td>
                <td><p>{{ $product->image  }}</p></td>
                <td><p>{{ $product -> available }}</p></td>
                <td><p>{{ $product -> available }}</p></td>


        </div>
    @endforeach

{{--    <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">Id</th>--}}
{{--            <th scope="col">Name</th>--}}
{{--            <th scope="col">Description</th>--}}
{{--            <th scope="col">Price</th>--}}
{{--            <th scope="col">Availability</th>--}}
{{--            <th scope="col">Film Poster</th>--}}

{{--        </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach ($products as $product)--}}
{{--                    <div>--}}
{{--                <H1>--}}
{{--                    <a href="/products/{{ $product->id }}">--}}
{{--                        {{ $product->name }}--}}
{{--                        {--}}

{{--                    </a>--}}
{{--                </H1>--}}
{{--                <tr>--}}
{{--                    <th scope="row"><a href="/products/{{ $product->id = 1 }}"></th>--}}
{{--                    <td>Mark</td>--}}
{{--                    <td>Otto</td>--}}
{{--                    <td>@mdo</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">2</th>--}}
{{--                    <td>Jacob</td>--}}
{{--                    <td>Thornton</td>--}}
{{--                    <td>@fat</td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <th scope="row">3</th>--}}
{{--                    <td>Larry</td>--}}
{{--                    <td>the Bird</td>--}}
{{--                    <td>@twitter</td>--}}
{{--                </tr>--}}


{{--    </div>--}}
{{--    @endforeach--}}
                </tbody>
    </table>


{{--    ----------------------------}}

{{--    <div class="container">--}}

{{--    <h2 class="mb-5">Produits</h2>--}}

{{--        <div class="table-responsive">--}}

{{--            <table class="table custom-table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">--}}
{{--                        <label class="control control--checkbox">--}}
{{--                            <input type="checkbox" class="js-check-all"/>--}}
{{--                            <div class="control__indicator"></div>--}}
{{--                        </label>--}}
{{--                    </th>--}}
{{--                    <th scope="col">Id</th>--}}
{{--                    <th scope="col">Name</th>--}}
{{--                    <th scope="col">Description</th>--}}
{{--                    <th scope="col">Price</th>--}}
{{--                    <th scope="col">Availability</th>--}}
{{--                    <th scope="col">Cover</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <th scope="row">--}}
{{--                        <label class="control control--checkbox">--}}
{{--                            <input type="checkbox"/>--}}
{{--                            <div class="control__indicator"></div>--}}
{{--                        </label>--}}
{{--                    </th>--}}
{{--                    <td>--}}
{{--                        <a href="/products/{{ $product->id }}">--}}
{{--                            {!! $product -> id !!}--}}
{{--                        </a>--}}
{{--                    </td>--}}
{{--                    <td><a href="/products/{{ $product->id }}">--}}
{{--                            {!! $product -> name !!}--}}
{{--                        </a></td>--}}
{{--                    <td>--}}
{{--                        <a href="/products/{{ $product->id }}">--}}
{{--                            {!! $product -> description !!}--}}
{{--                        </a>--}}
{{--                        <small class="d-block">Far far away, behind the word mountains</small>--}}
{{--                    </td>--}}
{{--                    <td><a href="/products/{{ $product->id }}">--}}
{{--                            {!! $product -> price !!}--}}
{{--                        </a></td>--}}




    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>




@endsection


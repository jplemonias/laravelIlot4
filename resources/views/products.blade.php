
@extends('mainTemplate')

    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">



@section('content')

    @foreach ($products as $product)
        <produit>
            <H1>
                <a href="/products/{{ $product->id }}">
                    {!! $product -> name !!}
                </a>
            </H1>

        </produit>
    @endforeach

    <div class="container">
        <h2 class="mb-5">Produits</h2>

        <div class="table-responsive">

            <table class="table custom-table">
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
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                        </label>
                    </th>
                    <td>
                        <a href="/products/{{ $product->id }}">
                            {!! $product -> id !!}
                        </a>
                    </td>
                    <td><a href="/products/{{ $product->id }}">
                            {!! $product -> name !!}
                        </a></td>
                    <td>
                        <a href="/products/{{ $product->id }}">
                            {!! $product -> description !!}
                        </a>
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td><a href="/products/{{ $product->id }}">
                            {!! $product -> price !!}
                        </a></td>
                    <td>
                        <ul class="Person">
                            <li>
                                <a href="#">
                                    <img src="Images/Age_of_Empires_IV.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_2.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_3.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_4.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_5.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                        </label>
                    </th>
                    <td>4616</td>
                    <td>Social Media Planner</td>
                    <td>
                        Far far away, behind the word mountains
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+02 020 3994 929</td>
                    <td>
                        <ul class="persons">
                            <li>
                                <a href="#">
                                    <img src="images/person_5.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_4.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_2.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                        </label>
                    </th>
                    <td>9841</td>
                    <td>Website Agreement</td>
                    <td>
                        Far far away, behind the word mountains
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+01 352 1125 0192</td>
                    <td>
                        <ul class="persons">
                            <li>
                                <a href="#">
                                    <img src="images/person_3.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_2.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                        </label>
                    </th>
                    <td>
                        1392
                    </td>
                    <td>Sales Pitch - 2019</td>
                    <td>
                        Far far away, behind the word mountains
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+63 983 0962 971</td>
                    <td>
                        <ul class="persons">
                            <li>
                                <a href="#">
                                    <img src="images/person_1.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_2.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_3.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_4.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_5.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                        </label>
                    </th>
                    <td>4616</td>
                    <td>Social Media Planner</td>
                    <td>
                        Far far away, behind the word mountains
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+02 020 3994 929</td>
                    <td>
                        <ul class="persons">
                            <li>
                                <a href="#">
                                    <img src="images/person_5.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_4.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_2.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>

                        </ul>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label class="control control--checkbox">
                            <input type="checkbox"/>
                            <div class="control__indicator"></div>
                        </label>
                    </th>
                    <td>9841</td>
                    <td>Website Agreement</td>
                    <td>
                        Far far away, behind the word mountains
                        <small class="d-block">Far far away, behind the word mountains</small>
                    </td>
                    <td>+01 352 1125 0192</td>
                    <td>
                        <ul class="persons">
                            <li>
                                <a href="#">
                                    <img src="images/person_3.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="images/person_2.jpg" alt="Person" class="img-fluid">
                                </a>
                            </li>
                        </ul>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>


    </div>

    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>





{{--            <div class="table">--}}
{{--                <h2>Resultats</h2>--}}
{{--                <table>--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th colspan="2">The table header</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td>The table body</td>--}}
{{--                        <td>with two columns</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}

{{--            </div>--}}
                @dd($products)





@endsection

@section('cssSpe')
    <link rel="stylesheet" href="products.css">
@endsection

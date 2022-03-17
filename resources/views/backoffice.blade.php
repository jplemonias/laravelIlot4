@extends('mainTemplate')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
    <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td><a href="/product/{{$product->id}}" class="btn btn-success">Voir</a></td>
        <td><a href="/backoffice/product/{{$product->id}}/edit" class="btn btn-primary">Modifier</a></td>

        <form method="post" class="delete_form" action="{{route('delete',$product->id)}}">
            @csrf

            @method('DELETE')
            <td><input type="submit" value="Delete" class="btn btn-danger"></input></td>
        </form>
    </tr>
    @endforeach
    </tbody>
</table>
<a href="/backoffice/create" class="btn btn-info">Ajouter un produit</a>
    <br>
    <br>
@endsection

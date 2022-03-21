@extends('mainTemplate')

@section('title', 'Backoffice')

@section('cssSpe')
    <link rel="stylesheet" href="/cart.css">
@endsection



@section('content')
    <form method="POST" action="/backoffice/{{$product->id}}/update">
        @csrf
        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <input type="hidden" name="id" value="{{$product->id}}">
        <p>Jeu </p> <input type='text' name="name" value="{{ $product->name }}" size="100"><br><br>
        <p>Description </p> <input type='text' name="description" value="{{ $product->description }}" size="100"><br><br>
        <p>Prix </p> <input type='text' name="price" value="{{ $product->price }}"><br><br>
        <p>Taille </p> <input type='text' name="weight" value="{{ $product->weight }}"><br><br>
        <p>Disponible </p> <input type='number' name="available" value="{{ $product->available }}" max="1" min="0"><br><br>
        <p>Réduction </p> <input type='number' name="discount" value="{{ $product->discount }}" min="0" max="100"><br><br>
        <p>Stock </p> <input type='number' name="stock" value="{{ $product->stock }}" min="0"><br>
        <p>image</p> <input type='text' name="image" value="{{$product->image}}" size="100"><br><br>
        <p>Catégorie </p> <input type='number' name="category_id" value="{{ $product->category_id }}" max="2" min="1">
    <input type="submit" class="btn btn-primary"><br><br>
        @method('PUT')
    </form>
@endsection


@extends('mainTemplate')

@section('title', 'Backoffice')

@section('cssSpe')
    <link rel="stylesheet" href="/cart.css">
@endsection



@section('content')
    <form method="POST" action="/backoffice/create/new">
        @csrf
        <input type="hidden" name="id">
        <p>Jeu </p> <input type='text' name="name"  size="100"><br><br>
        <p>Description </p> <input type='text' name="description"  size="100"><br><br>
        <p>Prix </p> <input type='text' name="price" ><br><br>
        <p>Taille </p> <input type='text' name="weight" ><br><br>
        <p>Disponible </p> <input type='number' name="available"  max="1" min="0"><br><br>
        <p>Réduction </p> <input type='number' name="discount"  min="0" max="100"><br><br>
        <p>image</p> <input type='text' name="image" size="100"><br><br>
        <p>category</p> <input type='text' name="category_id" size="100"><br><br>
        <input type="submit" class="btn btn-primary"><br><br>
    </form>
@endsection


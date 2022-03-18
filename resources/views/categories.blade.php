@extends('mainTemplate')

@section('content')
    @foreach($categories as $category)
    <a href="category/{{$category->id}}/products" class="btn btn-primary">{{$category->name}}</a><br><br>
    @endforeach
@endsection

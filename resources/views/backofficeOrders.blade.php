@extends('mainTemplate')

@section('content')
<div class="container mt-5">
    <h1>Orders :</h1>
    <a href="/addNewProduct">
        <button type="button" class="btn btn-success" style="margin-bottom: 1rem!important; margin-top: 1rem!important;">Add new product</button>
    </a>
    <div class="row mb-3">
        <div class="col-md-12 themed-grid-col">
            @foreach ($data as $key => $order)
                <div class="col">
                    <div class="card" style="margin-bottom: 1rem!important; margin-top: 1rem!important;">
                        <div class="card-body">
                            <div class="pb-3">
                                <h5 class="card-title">Order number: {{$order->number}}</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-2 themed-grid-col">Customer : {{$order->customer->first_name}} {{$order->customer->last_name}}</div>
                                <div class="col-md-2 themed-grid-col">Date : {{$order->date}}</div>
                            </div>
                        </div>
                        <div class="card-footer" style="display: flex; justify-content: flex-end;">
                            <div class="col-md-2 themed-grid-col" >
                                <a href="order/{{$order->id}}"><button type="button" class="btn btn-info">To see</button></a>
                                <a href="edit/{{$order->id}}"><button type="button" class="btn btn-primary">Edit</button></a> 

                                <form action="{{route('deleteProduct', $order->id)}}" method="POST" style="display: contents">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" class="btn btn-danger"value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <a href="/addNewProduct">
        <button type="button" class="btn btn-success" style="margin-bottom: 1rem!important; margin-top: 1rem!important;">Add new product</button>
    </a>
</div>
@endsection
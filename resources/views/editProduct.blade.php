@extends('mainTemplate')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" whidth="100%" style="justify-content: space-around;">
            <div class="col">
                <div class="card w-100 h-100">
                    <form action="{{route('putProduct', $data->id)}}" method="POST" style="display: contents">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title">{{$data->name}}</h5>
                            <!-- Name -->
                            <div class="row g-3">
                                <div class="col">
                                    Name : 
                                    <input type="text" class="form-control" placeholder="{{$data->name}}" name="name" aria-label="name">
                                </div>
                            </div>
                            <!-- Category_id -->
                            <div class="col-12">
                                Category : 
                                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                <select class="form-select" id="inlineFormSelectPref" name="category">
                                <option>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                </select>
                            </div>
                            <!-- Description -->
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            </div>
                            <!-- ... -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Quantiy : </label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="{{$data->quantity}}" name="quantity">
                                <label for="exampleFormControlInput1" class="form-label">Weight</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="{{$data->weight}}" name="weight">
                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="{{number_format($data->price/100, 2, ",", " ")}} soit : {{$data->price}}" name="price">
                                <label for="exampleFormControlInput1" class="form-label">Discount</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="{{$data->discount}}" name="discount">
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Availabe</legend>
                                <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Availabe" id="gridRadios1" value="1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Availabe" id="gridRadios2" value="0">
                                    <label class="form-check-label" for="gridRadios2">
                                    No
                                    </label>
                                </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="card-footer" style="display: flex; justify-content: space-around;">
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
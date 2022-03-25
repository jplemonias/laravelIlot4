
@extends('mainTemplate')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4" whidth="100%" style="justify-content: space-around;">
            <div class="col">
                <div class="card w-100 h-100">
                    <form action="{{route('postProduct')}}" method="POST" style="display: contents">
                        @method('post')
                        @csrf
                        <div class="card-body">
                            
                            <h5 class="card-title">{{$data['name']}}</h5>
                            <!-- Name -->
                            <div class="row g-3">
                                <div class="col ">
                                    Name : 
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="{{$data['name']}}" name="name" aria-label="name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>
                            <!-- Category_id -->
                            <div class="col-12">
                                Category : 
                                <label class="visually-hidden" for="inlineFormSelectPref">Preference</label>
                                <select class="form-select @error('category_id') is-invalid @enderror" id="inlineFormSelectPref" name="category_id">
                                <option>Choose...</option>
                                @foreach ($data['categories'] as $key => $category )
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                </select>
                            @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <!-- Description -->
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            </div>
                            <!-- ... -->
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Quantiy : </label>
                                <input type="number" class="form-control @error('quantity') is-invalid @enderror" id="exampleFormControlInput1" placeholder="{{$data['quantity']}}" name="quantity">
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="exampleFormControlInput1" class="form-label">Weight</label>
                                <input type="number" class="form-control @error('weight') is-invalid @enderror" id="exampleFormControlInput1" placeholder="{{$data['weight']}}" name="weight">
                                @error('weight')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="exampleFormControlInput1" class="form-label">Price</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" id="exampleFormControlInput1" placeholder="{{number_format($data['price']/100, 2, ",", " ")}} soit : {{$data['price']}}" name="price">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <label for="exampleFormControlInput1" class="form-label">Discount</label>
                                <input type="number" class="form-control @error('discount') is-invalid @enderror" id="exampleFormControlInput1" placeholder="{{$data['discount']}}" name="discount">
                                @error('discount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Available</legend>
                                <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input @error('available') is-invalid @enderror" type="radio" name="available" id="gridRadios1" value="1" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                    Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('available') is-invalid @enderror" type="radio" name="available" id="gridRadios2" value="0">
                                    <label class="form-check-label" for="gridRadios2">
                                    No
                                    </label>
                                </div>
                                </div>
                            </fieldset>
                            @error('available')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer" style="display: flex; justify-content: space-around;">
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
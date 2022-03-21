@extends('mainTemplate')
@section('content')
    <div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Modifier un enregistrement</h2>
        </div>
        <div class="panel-body">
            <form class="" action="" method="">

                <div class="form-group">
                    <label for="title">Nom</label>
                    <input type="text" class="form-control" name="title" placeholder="name">
                    <label for="content">Description</label>
                    <textarea name="content" id="content" class="form-control" rows="8" cols="80"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <textarea name="content" id="content" class="form-control" rows="8" cols="80"></textarea>

                    <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
    <p></p>
    <p></p>
@endsection

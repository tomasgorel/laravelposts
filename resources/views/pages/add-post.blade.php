@extends('main')
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @include('_partials/errors')
            <form action="/store" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Pavadinimas">
                </div>
                <div class="form-group">
                    <label for="content">Example textarea</label>
                    <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Pasirinkti faila</label>
                    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

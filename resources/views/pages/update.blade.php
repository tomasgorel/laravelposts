@extends('main')
@section('content')
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @include('_partials/errors')
            <form action="/storeupdate/{{$post->id}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control" id="exampleInputPassword1" placeholder="Pavadinimas">
                </div>
                <div class="form-group">
                    <label for="content">Example textarea</label>
                    <textarea name="content" class="form-control" id="body" rows="3">{{$post->content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="img">Pasirinkti failą</label>
                    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

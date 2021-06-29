@extends('main')
@section('content')
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            <!-- Post preview-->
                <div class="post-preview">
                     <img class="img-thumbnail" src="/{{$post->img}}">
                        <h2 class="post-title">{{$post->title}}</h2>
                        <h3 class="post-subtitle">{{($post->content)}}</h3>

                </div>
                <!-- Divider-->
                <hr class="my-4" />



            <div class="card">
                <div class="card-block">
                    <form action="/post/{{$post->id}}/comment" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="content">Jusu komentaras</label>
                            <textarea name="content" class="form-control" id="body" rows="3">{{$post->content}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Komentuoti</button>
                    </form>
                </div>
            </div>
            <div class="comment">
                @foreach($post->comments as $comment)
                    <li>{{$comment->comment}}</li>
                @endforeach
            </div>


            <!-- Pager-->
            <li><a href="/delete/{{$post->id}}">Trinti</a></li>
            <li><a href="/update/{{$post->id}}">Naujinti</a></li>

                </div>
    </div>
@endsection

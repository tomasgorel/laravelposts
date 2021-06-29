@extends('main')
@section('content')
<div class="row gx-4 gx-lg-5 justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-7">

       @foreach($posts as $post)
        <!-- Post preview-->
        <div class="post-preview">
            <a href="post/{{$post->id}}">
            </a>
            <h2 class="post-title">{{$post->title}}</h2>
            <img class="img-thumbnail" src="{{$post->img}}">
                <h3 class="post-subtitle">{{Str::limit($post->content,20)}}</h3>
                <a href="/post/{{$post->id}}">Skaityti daugiau...</a>

            <p class="post-meta">
                Posted by
                <a href="#!">Start Bootstrap</a>
                on September 24, 2022
            </p>
        </div>
        <!-- Divider-->
        <hr class="my-4" />
       @endforeach
           <div>

               {{$posts->links()}}
           </div>



    </div>
</div>
@endsection

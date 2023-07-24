@extends('layouts.main')

@section('container') 
    
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-5">{{$post->title}}</h1>

                <p>by, <a href="/posts?author={{ $post->author->username }} "class="text-decoration-none"> {{ $post->author->name }} </a> in <a href="/posts?category={{ $post->category->slug}}"class="text-decoration-none">  {{ $post->category->name }} </a></p>


                @if ($post->image)
                <div style="max-height:1000px; overflow:hidden;">
                <img src=" {{ asset('storage/' . $post->image)}} " alt="{{$post->category->name}}" class="img-fluid ">
                </div>
                @else
                <div style="max-height:1000px; overflow:hidden;">
                <img src="/gambar/064deb53fc6f6c7465efa444e582078e.jpg" alt="" class="img-fluid">
                </div>
                @endif



                <article>
                {!! $post->body !!}
                </article>
     
                <a href="/posts" class="d-block mt-3">Kembali Ke Posts</a>

            </div>


        </div>

    </div>

@endsection  
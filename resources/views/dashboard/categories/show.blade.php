@extends('dashboard.layouts.main')

@section('container')
<div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-5">{{$categories->title}}</h1>

        <a href="/dashboard/categories" class="btn btn-success"> <span data-feather="arrow-left"></span> Back to all My Posts</a>
        <a href="/dashboard/categories/{{$post->slug}}/edit" class="btn btn-warning"> <span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/categories/{{$post->slug}} " method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger " onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span>Delete</button>
                      </form>

            @if ($post->image)
            <div style="max-height:1000px; overflow:hidden; margin-left:200px;">
            <img src=" {{ asset('storage/' . $post->image)}} " alt="{{$post->category->name}}" class="img-fluid mt-3">
            </div>
            @else
            <div style="max-height:1000px; overflow:hidden;">
                <img src="/gambar/064deb53fc6f6c7465efa444e582078e.jpg" alt="" class="img-fluid">
                </div>
            @endif




                <article>
                {!! $post->body !!}
                </article>
     

            </div>


        </div>

    </div>
@endsection


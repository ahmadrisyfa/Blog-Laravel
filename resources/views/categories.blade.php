    @extends('layouts/main')

    @section('container')
    <h1 class="mb-5">Post Categories</h1>
    <div class="container">
        <h1 style="font-family:Times New Roman; text-align:center;"><marquee behavior="slide" loop="3">Ga Tau Caranya Ganti Satu Satu Jadi Foto Ini Aja Ya,wkwk</marquee> </h1>  
        <div class="row">
        @foreach  ($categories as $category)
            <div class="col-md-4">
                <a href="/posts?category={{ $category->slug}}">
                <div class="card  text-white"style="margin-top:25px;background-color:#9E8568;" >
                <img src="/gambar/064deb53fc6f6c7465efa444e582078e.jpg" class="card-img" alt="{{$category->name}}">
                
                    <div class="card-img-overlayvd d-flex align-items-center p-0 mb-5">
                    <h5 class="card-title text:center flex-fill p-4 fs-3" style="background-color:0,0,0,0,7"> {{ $category->name }} </h5>
                     </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>




      
    @endsection 
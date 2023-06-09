@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>



    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/500x500?{{ $category->nama }}" class="card-img" alt="{{ $category->nama }}">
                            
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3" >{{ $category->nama }}</h5>
                                </div>
                            
                         </div>
                    </a>
                </div>
             @endforeach
         </div>
    </div>    

@endsection



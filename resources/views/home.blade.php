@extends('layouts.main')

@section('container')
    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
        </div>
    </form>
    <div class="row">   
        <div class="col-lg">
            <div id="marquee">
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    Website Blog - Warning hindari SARA pada penulisan Blog anda.
                </marquee>
            </div>
        </div>
    </div>

    <div class="row mt-2">
        
        <div class="row">
            <div class="col-lg">
                <h4>Latest update</h4>
            </div>
        </div>

        <div class="col-lg-10">
            <div class="row">
                @if ($posts->count() > 0)
                    @foreach ($posts as $post)   
                        <div class="col-sm-4 mt-3">
                            <div class="card">
                                <a href="/posts?category={{ $post->category->slug }}">
                                    <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.5)">
                                        {{ $post->category->nama }}
                                    </div>
                                </a>
                                <img src="https://source.unsplash.com/400x400?{{ $post->category->nama }}" class="img-fluid" alt="{{ $post->category->nama }}">
                                <div class="card-body">
                                    <h4><marquee class="card-title">{{ $post->title }}</marquee></h4>
                                    <p>
                                        <small class="text-muted">
                                            By. <a href="/posts?author={{ $post->author->username }}" style="text-decoration: none;">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach 
                @else
                    <p class="text-center fs-4">No post found.</p>
                @endif
            </div>
        </div>
        <div class="col-lg-2 mt-2">
            <div class="card mt-2">
                <div class="card-header">
                    <h4 class="text-muted">Categories</h4>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-danger">{{ $category->nama }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    <h4 class="text-muted">Author</h4>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($authors as $author)
                        <li class="list-group-item">
                            <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none text-danger">{{ $author->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4 mb-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection


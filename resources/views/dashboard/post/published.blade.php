@extends('layout.app-2')

@section('title', 'Dashboard Published Posts')

@section('breadcrumb', '/Published Posts')

@section('content')
<section>
    <h4>Published Post ( {{ $publishedPosts->count() }} )</h4>

    @foreach ( $publishedPosts as $post)
        
    
    <div class="card mb-3 author-post">
        <div class="row g-0">
            <div class="col-12 col-md-4">
                <img src="{{ asset('uploads/'. $post->post_thumbnail) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-12 col-md-8">
                <div class="card-body">
                    <h3 class="card-title text-black"> {{ $post->post_title}} </h3>
                    <div class="d-flex align-items-center gap-4 mt-3">
                        <a href="#" class="d-flex align-items-center gap-3">
                            <div class="author-img ">
                                <img src="{{asset('img/post/author/author-2.jpg')}}" alt="Author">
                            </div>
                            <div class="info">
                                <p>Jason Francisco</p>
                            </div>
                        </a>
                        <p>August 20, 2022</p>
                    </div>
                    <ul class="post-action post-action--admin">
                        <li>
                            <a href="posts/">
                                View<i class="fa-regular fa-eye"></i>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="/delete/{{ $post->id }}">
                                Delete<i class="fa-solid fa-trash-can"></i>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection
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
                                @if ($post->user->profile && $post->user->profile->photo)
                                    <img src="{{ asset('uploads/' . $post->user->profile->photo) }}" alt="Author Profile Photo">
                                @else
                                    <img src="{{ asset('img/post/author/author.png') }}" alt="Author">
                                @endif
                            </div>
                            <div class="info">
                                <p>{{ $post->user->name }}</p>
                            </div>
                        </a>
                        <p>{{ $post->created_at->format('F j, Y') }}</p>
                    </div>
                    <ul class="post-action post-action--admin">
                        <li>
                            <a href="/posts/{{ $post->id }}">
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
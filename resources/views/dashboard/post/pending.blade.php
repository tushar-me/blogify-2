@extends('layout.app-2')

@section('title', 'Dashboard Pending Posts')

@section('breadcrumb', '/Pending Posts')

@section('content')
    <section>
        <h4>Pending Post ( {{ $pendingPosts->count() }} )</h4>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @foreach ( $pendingPosts as $post)
            
        
            <div class="card mb-3 author-post">
                <div class="row g-0">
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('uploads/' . $post->post_thumbnail) }}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="card-body">
                            <h3 class="card-title text-black"> {{ $post->post_title }} </h3>
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
                                    <a href="{{ route('dashboard.single.post') }}">
                                        Read<i class="fa-regular fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="/dashboard/post-approve/{{ $post->id }}">
                                        Approve<i class="fa-regular fa-circle-check"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="posts/">
                                        Reject<i class="fa-solid fa-ban"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
@extends('layout.app')

@section('title', 'All Post')



@section('content')

    {{-- All Post --}}
    <section class="latest-post">
        <div class="container">
            <h3 class="mb-3  mb-md-5">Latest Post</h3>
            <div class="row">
                @foreach ( $posts as $post)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="post wow fadeInUpBig" data-wow-duration="1.2s">
                            <a  href="#" class="d-inline-block w-100">
                                <div class="post_thumbnail">
                                    <img src="{{ asset('uploads/'. $post->post_thumbnail) }}" alt="Thumbnail">
                                </div>
                            </a>
                            <div class="post_content">
                                <a class="tag d-inline-block" href="#">Technology</a>
                                <a href="#">
                                    <h3>{{ $post->post_title }}</h3>
                                </a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="{{route('user.profile')}}" class="d-flex align-items-center gap-2">
                                        <div class="author-img ">
                                            <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Author">
                                        </div>
                                        <div class="info">
                                            <p>Jason Francisco</p>
                                        </div>
                                    </a>
                                    <p>{{ $post->created_at->format('F j, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    
    {{-- Footer --}}
    <x-footer/>

@endsection
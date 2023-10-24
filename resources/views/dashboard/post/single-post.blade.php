@extends('layout.app-2')

@section('title', 'Dashboard Post')

@section('breadcrumb', '/single Post')

@section('content')
<section class="single_post">
    
    <div class="container">
        <div class="single_post_content">
            <a href="#" class="single_post_tag">Technology</a>
            <h3 class="single_post_title text-black">There are many variations of passages of Lorem Ipsum available</h3>
            <div class="d-flex align-items-center gap-4">
                <a href="#" class="d-flex align-items-center gap-3">
                    <div class="author-img">
                        <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Author">
                    </div>
                    <div class="info">
                        <p class="text-black">Jason Francisco</p>
                    </div>
                </a>
                <p class="text-black">August 20, 2022</p>
            </div>
            <div class="single_post_thumbnail">
                <img src="{{ asset('img/post/thumbnail/thumbnail-10.png') }}" alt="Post Thumbnail">
            </div>
            
            <p class="single_post_desc mb-3  text-black">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            <ul class="post_tags">
                <li>
                    <a href="#">Web Design</a>
                </li>
                <li>
                    <a href="#">Web Development</a>
                </li>
                <li>
                    <a href="#">PHP</a>
                </li>
            </ul> 
            {{-- <ul class="post_tags">
                @php
                    $tags = explode(",", $post->post_tags);
                @endphp
                @foreach ($tags as $tag)
                    <li>
                        <a href="#">{{ $tag }}</a>
                    </li>
                @endforeach
            </ul> --}}
        </div>
    </div>
    <div class="container pb-5">
        <ul class="d-flex  gap-3">
            <li>
                <a href="posts/" class="d-flex align-items-center gap-2 bg-success text-white px-3 py-2">
                    Aprove<i class="fa-regular fa-circle-check"></i>
                </a>
            </li>
            <li>
                <a href="posts/" class="d-flex align-items-center gap-2 bg-danger text-white px-3 py-2">
                    Reject<i class="fa-solid fa-ban"></i>
                </a>
            </li>
        </ul>
    </div>
</section>
@endsection
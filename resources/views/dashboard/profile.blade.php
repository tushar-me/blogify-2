@extends('layout.app-2')

@section('title', 'Dashboard Profile')

@section('breadcrumb', '/Profile')

@section('content')
    {{-- Profile --}}
    <section class="profile">
        <div class="container">
            <div class="profile_header mb-5">
                <div class="cover_photo">
                    <img src="{{asset('img/post/author/cover-photo.png')}}" alt="Cover Photo">
                </div>
                <div class="profile_pic">
                    <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Profile Picture">
                </div>
                <div class="profile_info">
                    <h3 class="text-black">jason Francisco</h3>
                    <p class="text-black">Web Developer</p>
                    <h4 class="mt-5 text-black">About Me</h4>
                    <p class="text-center w-75 mx-auto text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, mollitia nostrum iste debitis eum assumenda, temporibus, quis sapiente beatae ad similique. A asperiores ab iusto quas, rem recusandae atque  nostrum iste debitis eum assumenda, et.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
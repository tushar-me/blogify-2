@extends('layout.app')

@section('title', 'profile')

@section('content')

    {{-- Header --}}
    {{-- <x-header.author-header/> --}}

    {{-- Profile --}}
    <section class="profile">
        <div class="container">
            <div class="profile_header mb-5">
                <form action="{{ route('update.profile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="cover_photo">
                        <img src="{{ asset('img/post/author/cover-photo.png') }}" alt="Cover Photo">
                    </div>
                    <div class="profile-pic">
                        <label class="-label" for="file">
                            <span>Change Image</span>
                        </label>
                        <input id="file" type="file" name="photo" onchange="loadFile(event"/>
                        <img src="{{ $profile && $profile->photo ? asset('uploads/' . $profile->photo) : asset('img/post/author/author.png') }}" id="output" width="200" />
                    </div>
                    <div class="profile_info">
                        <h3>
                            <input type="text" name="name" value="{{ auth()->user()->name }}">
                        </h3>
                        <p class="bio">
                            <input type="text" name="bio" id="bio" value="{{ $profile ? $profile->bio : 'Add Bio...' }}">
                        </p>
                        <h4 class="mt-5 text-white">About Me</h4>
                        <p class="text-center w-75 mx-auto text-white about">
                            <textarea name="about" id="about">{{ $profile ? $profile->about : 'Add Description Here...' }}</textarea>
                        </p>
                    </div>
                    <div class="mt-4">
                        <button>Save</button>
                    </div>
                </form>
                
            </div>
        </div>
    </section>




    {{-- Posts --}}
    <section class="author-post-tab">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    {{-- <button class="nav-link active" id="nav-all-post-tab" data-bs-toggle="tab" data-bs-target="#nav-all-post" type="button" role="tab" aria-controls="nav-all-post" aria-selected="true">All Post (0)</button> --}}
                    <button class="nav-link active" id="nav-published-tab" data-bs-toggle="tab" data-bs-target="#nav-published" type="button" role="tab" aria-controls="nav-published" aria-selected="false">Published ( {{ $publishedPosts->count() }} )</button>
                    <button class="nav-link" id="nav-pending-tab" data-bs-toggle="tab" data-bs-target="#nav-pending" type="button" role="tab" aria-controls="nav-pending" aria-selected="false">Pending ( {{ $pendingPosts->count() }} )</button>
                    <a href="{{route('create.post')}}" class="nav-link add-post-btn">Add Post <i class="fa-solid fa-circle-plus"></i></a>
                </div>
    
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade" id="nav-all-post" role="tabpanel" aria-labelledby="nav-all-post-tab" tabindex="0">

                    {{-- Author All Post --}}

                </div>
                <div class="tab-pane fade  show active" id="nav-published" role="tabpanel" aria-labelledby="nav-published-tab" tabindex="0">

                    {{-- Author Published Post --}}
                    @foreach ($publishedPosts as $post)
                    <div class="card mb-3 author-post">
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                            <img src="{{ asset('uploads/' . $post->post_thumbnail) }}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $post->post_title }}</h3>
                                <div class="d-flex align-items-center gap-4 mt-3">
                                    <a href="#" class="d-flex align-items-center gap-3">
                                        <div class="author-img ">
                                            <img src="{{asset('img/post/author/author-2.jpg')}}" alt="Author">
                                        </div>
                                        <div class="info">
                                            <p>Jason Francisco</p>
                                        </div>
                                    </a>
                                    <p>{{ $post->created_at->format('F j, Y  g:i a') }}</p>
                                </div>
                                <ul class="post-action">
                                    <li>
                                        <a href="posts/{{ $post->id }}">
                                            View Post<i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/edit/{{ $post->id }}">
                                            Edit<i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/delete/{{ $post->id }}">
                                            Delete<i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="tab-pane fade" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab" tabindex="0">

                    {{-- Author Pending Post --}}
                    @foreach ($pendingPosts as $post)
                    <div class="card mb-3 author-post">
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                            <img src="{{ asset('uploads/' . $post->post_thumbnail) }}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h3 class="card-title">{{ $post->post_title }}</h3>
                                <div class="d-flex align-items-center gap-4 mt-3">
                                    <a href="#" class="d-flex align-items-center gap-3">
                                        <div class="author-img ">
                                            <img src="{{asset('img/post/author/author-2.jpg')}}" alt="Author">
                                        </div>
                                        <div class="info">
                                            <p>Jason Francisco</p>
                                        </div>
                                    </a>
                                    <p>{{ $post->created_at->format('F j, Y  g:i a') }}</p>
                                </div>
                                <ul class="post-action">
                                    <li>
                                        <a href="posts/{{ $post->id }}">
                                            View Post<i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/edit/{{ $post->id }}">
                                            Edit<i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/delete/{{ $post->id }}">
                                            Delete<i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    
    {{-- Footer --}}
    <x-footer/>
@endsection
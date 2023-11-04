@extends('layout.app-2')

@section('title', 'Dashboard Profile')

@section('breadcrumb', '/Profile')

@section('content')
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
                            <input  class="text-black" type="text" name="name" value="{{ auth()->user()->name }}">
                        </h3>
                        <p class="bio">
                            <input  class="text-black" type="text" name="bio" id="bio" value="{{ $profile ? $profile->bio : 'Add Bio...' }}">
                        </p>
                        <h4 class="mt-5 text-black">About Me</h4>
                        <p class="text-center w-75 mx-auto text-white about">
                            <textarea class="text-black" name="about" id="about">{{ $profile ? $profile->about : 'Add Description Here...' }}</textarea>
                        </p>
                    </div>
                    <div class="mt-4">
                        <button>Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="author-post-tab">
        <div class="container">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    
                    <button class="nav-link active" id="nav-published-tab" data-bs-toggle="tab" data-bs-target="#nav-published" type="button" role="tab" aria-controls="nav-published" aria-selected="false">All Post ( 1 )</button>
                    
                    <a href="{{route('dashboard.create.post')}}" class="nav-link add-post-btn">Add Post <i class="fa-solid fa-circle-plus"></i></a>
                </div>
    
            </nav>
            <div class="tab-content" id="nav-tabContent">
                
                <div class="tab-pane fade  show active" id="nav-published" role="tabpanel" aria-labelledby="nav-published-tab" tabindex="0">

                    {{-- Author Published Post --}}
                    <div class="card mb-3 author-post">
                        <div class="row g-0">
                            <div class="col-12 col-md-4">
                            <img src="{{ asset('img/post/thumbnail/thumbnail-1.png') }}" class="img-fluid rounded-start">
                            </div>
                            <div class="col-12 col-md-8">
                            <div class="card-body">
                                <h3 class="card-title text-black">There are many variations of passages of Lorem Ipsum available,</h3>
                                <div class="d-flex align-items-center gap-4 mt-3">
                                    <a href="#" class="d-flex align-items-center gap-3">
                                        <div class="author-img ">
                                            <img src="{{asset('img/post/author/author-2.jpg')}}" alt="Author">
                                        </div>
                                        <div class="info">
                                            <p>Jason Francisco</p>
                                        </div>
                                    </a>
                                    <p></p>
                                </div>
                                <ul class="post-action">
                                    <li>
                                        <a href="posts/">
                                            View Post<i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/edit/">
                                            Edit<i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/delete/">
                                            Delete<i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
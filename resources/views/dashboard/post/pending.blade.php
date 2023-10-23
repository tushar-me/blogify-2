@extends('layout.app-2')

@section('title', 'Dashboard Pending Posts')

@section('breadcrumb', '/Pending Posts')

@section('content')
    <section>
        <h4>Pending Post (10)</h4>
        <div class="card mb-3 author-post">
            <div class="row g-0">
                <div class="col-12 col-md-4">
                <img src="{{ asset('img/post/thumbnail/thumbnail-11.png') }}" class="img-fluid rounded-start">
                </div>
                <div class="col-12 col-md-8">
                <div class="card-body">
                    <h3 class="card-title text-black">আমরা বাংলায় ওয়েব ডেডলপমেন্ট নিয়ে কাজ করতে গিয়ে প্রথম যে সমস্যাটার মুখোমুখি হই, সেটা হলো, বাংলা ডেমো টেক্সট। ইংরেজির জন্য lorem ipsum তো আছে । বাংলার জন্য কি আছে?...</h3>
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
                                View Post<i class="fa-regular fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="posts/">
                                Reject Post<i class="fa-solid fa-ban"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 author-post">
            <div class="row g-0">
                <div class="col-12 col-md-4">
                <img src="{{ asset('img/post/thumbnail/thumbnail-4.png') }}" class="img-fluid rounded-start">
                </div>
                <div class="col-12 col-md-8">
                <div class="card-body">
                    <h3 class="card-title text-black">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,...</h3>
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
                                View Post<i class="fa-regular fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="posts/">
                                Reject Post<i class="fa-solid fa-ban"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 author-post">
            <div class="row g-0">
                <div class="col-12 col-md-4">
                <img src="{{ asset('img/post/thumbnail/thumbnail-3.png') }}" class="img-fluid rounded-start">
                </div>
                <div class="col-12 col-md-8">
                <div class="card-body">
                    <h3 class="card-title text-black">The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words...</h3>
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
                                View Post<i class="fa-regular fa-eye"></i>
                            </a>
                        </li>
                        <li>
                            <a href="posts/">
                                Reject Post<i class="fa-solid fa-ban"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
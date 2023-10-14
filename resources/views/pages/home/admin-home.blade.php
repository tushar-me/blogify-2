@extends('layout.app')

@section('title')
    Create a unique and beautiful blog easily
@endsection



@section('content')

    {{-- Header --}}
    <x-header.admin-header/>

    {{-- Hero --}}
    <x-post.main-post/>

    {{-- Latest Post --}}
    <x-post.latest-post/>

    <section>
        <div class="container">
            <div class="mt-4 text-center">
                <a class="all-post-btn" href="{{route('all.post')}}">View All Post</a>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <x-footer/>

@endsection


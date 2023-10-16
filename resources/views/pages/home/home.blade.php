@extends('layout.app')

@section('title')
    Create a unique and beautiful blog easily
@endsection



@section('content')

    {{-- Header
    @auth
    <x-header.author-header/>
    @else
    <x-header.default-header/>
    @endauth --}}

    {{-- Hero --}}
    <x-post.hero-post/>

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


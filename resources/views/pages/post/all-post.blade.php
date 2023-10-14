@extends('layout.app')

@section('title', 'All Post')



@section('content')

    {{-- Header --}}
    <x-header.default-header/> 

    {{-- All Post --}}
    <x-post.latest-post/>
    
    {{-- Footer --}}
    <x-footer/>

@endsection
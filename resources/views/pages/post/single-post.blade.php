@extends('layout.app')


@section('title', 'Single Post')
    


@section('content')

    {{-- Header --}}
    <x-header.author-header/> 

    {{--  Post --}}
    <section class="single_post">
        <div class="container">
            <div class="single_post_content">
                <a href="#" class="single_post_tag">Technology</a>
                <h3 class="single_post_title">{{ $post->post_title }}</h3>
                <div class="d-flex align-items-center gap-4">
                    <a href="#" class="d-flex align-items-center gap-3">
                        <div class="author-img">
                            <img src="{{asset('img/post/author/author-1.jpg')}}" alt="Author">
                        </div>
                        <div class="info">
                            <p>Jason Francisco</p>
                        </div>
                    </a>
                    <p>August 20, 2022</p>
                </div>
                <div class="single_post_thumbnail">
                    <img src="{{ asset('uploads/' . $post->post_thumbnail) }}" alt="Post Thumbnail">
                </div>
                <ul class="single_post_react">
                    <li>
                        <a href="#"><i class="fa-regular fa-heart"></i>Like</a>
                    </li>
                    <li>
                        <a href="#comment"><i class="fa-regular fa-comment"></i>Comment</a>
                    </li>
                </ul>
                <p class="single_post_desc mb-3">{{ $post->post_desc }}</p>
                <ul class="post_tags">
                    @php
                        $tags = explode(",", $post->post_tags);
                    @endphp
                    @foreach ($tags as $tag)
                        <li>
                            <a href="#">{{ $tag }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="py-5 d-flex flex-column gap-4" id="comment">
                    <h4>Comments ({{ $comments->count() }})</h4>

                    @foreach ($comments as $comment)
                    <div class="post_comment">
                        <div class="comment_author">
                            <img src="{{asset('img/post/author/author.png')}}" alt="Author">
                        </div>
                        <div class="comment_text">
                            <p>{{$comment->comment_text}}</p>
                            <div class="d-flex align-items-center gap-4 mt-3">
                                <a href="#">{{ $post->created_at->format('F j, Y  g:i a') }}</a>
                                <a class="reply" href="#">Reply</a>
                            </div>
                            <button class="comment_popup_menu">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                            <ul class="comment_popup d-none">
                                <li>
                                    <a href="#">Delete <i class="fa-regular fa-trash-can"></i></a>
                                </li>
                                <li>
                                    <a href="#">Report <i class="fa-solid fa-circle-info"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>
                <form class="comment_form" id="comment_form" method="POST" accept="{{route('comment.store')}}">
                    @csrf
                    <textarea name="comment_text" id="comment_text" placeholder="Write a comment"></textarea>
                    <button class="mt-4" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $("#comment_form").submit(function (event) {
                event.preventDefault();
        
                var formData = $(this).serialize();
        
                $.ajax({
                    type: "POST", 
                    url: "{{route('comment.store')}}", 
                    data: formData,
                    success: function (response) {
                        
                        $('#comment_form')[0].reset();
                        location.reload();
                    }
                });
            });
        });
    </script>
        
    
    {{-- Footer --}}
    <x-footer/>

@endsection
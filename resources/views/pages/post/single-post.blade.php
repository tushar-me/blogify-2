@extends('layout.app')


@section('title', 'Single Post')
    


@section('content')

    {{-- Header --}}
    {{-- <x-header.author-header/>  --}}

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
                    <p>{{ $post->created_at->format('F j, Y  g:i a') }}</p>
                </div>
                <div class="single_post_thumbnail">
                    <img src="{{ asset('uploads/' . $post->post_thumbnail) }}" alt="Post Thumbnail">
                </div>
                <ul class="single_post_react">
                    <li class="d-flex align-items-center gap-2" style="color: var(--secondary);">
                        <label>
                        <input type="checkbox" id="like-checkbox" data-post-id="{{ $post->id }}">
                        <div class="checkmark">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        </label>
                        {{ 0 }}
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
            // Like 
            $('#like-checkbox').on('change', function() {
                const postId = $(this).data('post-id');
                const isChecked = $(this).prop('checked');
                
                $.ajax({
                    url: '/like', 
                    method: 'POST',
                    data: {
                        post_id: postId,
                        is_liked: isChecked,
                    },
                    success: function(response) {

                        console.log(response);
                    },
                    error: function(error) {

                        console.error(error);
                    }
                });
            });

            // Comment 
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
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
                            <img src="{{asset('img/post/author/author.png')}}" alt="Author">
                        </div>
                        <div class="info">
                            <p> {{ $post->user->name }} </p>
                        </div>
                    </a>
                    <p>{{ $post->created_at->format('F j, Y  g:i a') }}</p>
                </div>
                <div class="single_post_thumbnail">
                    <img src="{{ asset('uploads/' . $post->post_thumbnail) }}" alt="Post Thumbnail">
                </div>
                <ul class="single_post_react">
                    @php
                        $likes = DB::table('likes')
                                ->where('post_id', $post->id)
                                ->get();

                        $user = DB::table('likes')
                                ->where('post_id', $post->id)
                                ->where('user_id', auth()->user()->id)
                                ->first();        
                    @endphp 
                    <li class="d-flex align-items-center gap-2" style="color: var(--secondary);">

                        @if ($user)
                        <a href=" {{ route('post.unlike', $post->id) }} ">
                            <i style="color:var(--primary);" class="fa-solid fa-heart"></i>
                        </a>
                        @else
                            <a href=" {{ route('post.like', $post->id) }} ">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        @endif
                        
                        {{ $likes->count() }}
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
                    <h4>Comments ({{ $post->comments->count() }})</h4>

                    @foreach ($post->comments as $comment)
                    <div class="post_comment">
                        <div class="comment_author">
                            <img src="{{asset('img/post/author/author.png')}}" alt="Author">
                        </div>
                        <div class="comment_text">
                            <h4 class="mb-3 text-white">{{ $comment->user->name }}</h4>
                            <p>{{$comment->comment}}</p>
                            <div class="d-flex align-items-center gap-4 mt-3">
                                <a href="#">{{ $comment->created_at->format('F j, Y  g:i a') }}</a>
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
                <form class="comment_form" id="comment_form" method="POST" action="{{route('comment.store')}}">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea name="comment" id="comment" placeholder="Write a comment"></textarea>
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
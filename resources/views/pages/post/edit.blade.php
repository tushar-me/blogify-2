@extends('layout.app')


@section('title', 'Edit Post')



@section('content')

    {{-- Header --}}
    <x-header.Author-header/> 

    {{-- Edit Post Form --}}
    <section class="py-5">
        <div class="container">

            <form id="edit_post" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="add_form">
                            <div class="mb-4">
                                <label for="post_title">Post Title</label>
                                <input type="text" name="post_title" id="post_title" value="{{ $post->post_title }}">
                                @if ($errors->first('post_title'))
                                    <span style="color:var(--primary);">Post title is required</span>
                                @endif
                            </div>
                            <div>
                                <label for="post_desc">Post Description</label>
                                <textarea name="post_desc" id="post_desc" >
                                    {{ $post->post_desc }}
                                </textarea>
                                @if ($errors->first('post_desc'))
                                    <span style="color:var(--primary);">Post Description is required</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="add-tags">
                            <h4>Tags</h4>
                            <div class="_box">
                                <label for="tagList">Add tag (Press ENTER to Add new Tag)</label>
                                <input type="hidden" id="Tags" name="post_tags" />
                                <input type="text" id="newTag" />
                                <ul id="tagList">
                                    <!-- All TagList Here! -->
                                </ul>  
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4>Post Thumbnail</h4>
                            <label class="picture" for="picture__input" tabIndex="0">
                                <span class="picture__image"></span>
                            </label>
                            
                            <input type="file" name="post_thumbnail" id="picture__input" required>
                            @if ($errors->first('post_thumbnail'))
                                <span style="color:var(--primary);">Post thumbnail is required</span>
                            @endif
                        </div>
                    </div>
                    <div>
                        <button class="post_publish_btn" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    
    <script>
        $(document).ready(function () {
            $('#edit_post').submit(function (event) {
                event.preventDefault();
    
                var formData = new FormData(this);
    
                $.ajax({
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        $('#edit_post')[0].reset();
                    }
                });
            });
        });
    </script>
    
    {{-- Footer --}}
    <x-footer/>

@endsection
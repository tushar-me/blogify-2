@extends('layout.app')


@section('title', 'Edit Post')



@section('content')

    {{-- Header --}}
    {{-- <x-header.Author-header/>  --}}

    {{-- Edit Post Form --}}
    <section class="py-5">
        <div class="container">

            <form id="edit_post" action="/update/{{$post->id}}" method="POST" enctype="multipart/form-data">

                <div class=" success-message toast align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                        
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>

                @csrf
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="add_form">
                            <div class="mb-4">
                                <label for="post_title">Post Title</label>
                                <input type="text" name="post_title" id="post_title" value="{{ $post->post_title }}">
                            </div>
                            <div>
                                <label for="post_desc">Post Description</label>
                                <textarea name="post_desc" id="post_desc" >
                                    {{ $post->post_desc }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="add-tags">
                            <h4>Tags</h4>
                            <div class="_box">
                                <label for="tagList">Add tag (Press ENTER to Add new Tag)</label>
                                <input type="hidden" id="editTags" name="post_tags" />
                                <input type="text" id="editNewTag" class="newTag" />
                                <ul id="editTagList" class="tagList">
                                    <!-- All TagList Here! -->
                                </ul>  
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4>Post Thumbnail</h4>
                            <div class="control-group file-upload" id="file-upload1">
                                <div class="image-box image-box--edit text-center">
                                    <div class="upload_text">
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                        <p>Upload Image</p>
                                    </div>
                                    <img src="{{ asset('uploads/' . $post->post_thumbnail) }}" alt="">
                                </div>
                                <div class="controls" style="display: none;">
                                    <input type="file" name="post_thumbnail"/>
                                </div>
                            </div>
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


        (function () {
            var tagList = {!! json_encode(explode(',', $post->post_tags)) !!};

            
            var $tagList = $("#editTagList");
            var $newTag = $("#editNewTag");

            tagList_render();

            
            function tagList_render () {
                $tagList.empty();
                tagList.map (function (_tag) {
                var temp = '<li>'+ _tag +'<span class="rmTag">&times;</span></li>';
                $tagList.append(temp);
                });
                $('#editTags').val(tagList.join(","));
            };

            $newTag.on('keyup', function (e) {
                if (e.keyCode == 13) {
                var newTag = $("#editNewTag").val();
                if( newTag.replace(/\s/g, '') !== '' ){
                    tagList.push(newTag);
                    $newTag.val('');
                    tagList_render();
                }
                }
            });

            $tagList.on("click", "li>span.rmTag", function(){
                var index = $(this).parent().index();
                tagList.splice(index, 1);
                tagList_render();
            });
        })();


        // Form Submission

        $(document).ready(function () {
            $('#edit_post').submit(function (event) {
                event.preventDefault();
    

                var formData = new FormData(this);

    
                $.ajax({
                    type: "POST",
                    url: "/update/{{ $post->id }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        // $('#edit_post')[0].reset();
                        $('#post_title').val('');
                        $('#post_desc').val('');
                        $('.success-message').show();
                        $('.toast-body').html(result.message);  
                    }
                });
            });
        });
    </script>
    
    {{-- Footer --}}
    <x-footer/>

@endsection
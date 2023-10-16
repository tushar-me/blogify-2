@extends('layout.app')


@section('title', 'Add Post')



@section('content')

    {{-- Header --}}
    {{-- <x-header.author-header/>  --}}

    {{-- Add Post Form --}}
    <section class="py-5">
        <div class="container">

            <form id="create_post" action="{{route('store.post')}}" method="POST" enctype="multipart/form-data">

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
                                <input type="text" name="post_title" id="post_title" value="{{old('post_title')}}">
                                <span class="error-message d-block text-white"></span>
                            </div>
                            <div>
                                <label for="post_desc">Post Description</label>
                                <textarea name="post_desc" id="post_desc" value="{{old('post_desc')}}"></textarea>
                                <span class="error-message d-block text-white"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="add-tags">
                            <h4>Tags</h4>
                            <div class="_box">
                                <label for="tagList">Add tag (Press ENTER to Add new Tag)</label>
                                <input type="hidden" id="Tags" name="post_tags" />
                                <input type="text" id="newTag" class="newTag" />
                                <ul id="tagList" class="tagList">
                                    <!-- All TagList Here! -->
                                </ul>  
                            </div>
                        </div>
                        <div class="mb-4">
                            <h4>Post Thumbnail</h4>
                            <div class="control-group file-upload" id="file-upload1">
                                <div class="image-box text-center">
                                    <div class="upload_text">
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                        <p>Upload Image</p>
                                    </div>
                                    <img src="" alt="Thumbnail">
                                </div>
                                <div class="controls" style="display: none;">
                                    <input type="file" name="post_thumbnail" id="post_thumbnail"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="post_publish_btn" type="submit">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $('#create_post').submit(function (event) {
                event.preventDefault();
    
                // Client-side validation
                var postTitle = $('#post_title').val();
                var postDescription = $('#post_desc').val();
                var postThumbnail = $('#post_thumbnail')[0].files[0]; // Get the selected file
                var isValid = true;
    
                if (postTitle.trim() === '') {
                    $('#post_title').addClass('is-invalid');
                    $('#post_title').next('span.error-message').text('Post title is required');
                    isValid = false;
                } else {
                    $('#post_title').removeClass('is-invalid');
                    $('#post_title').next('span.error-message').text('');
                }
    
                if (postDescription.trim() === '') {
                    $('#post_desc').addClass('is-invalid');
                    $('#post_desc').next('span.error-message').text('Post description is required');
                    isValid = false;
                } else {
                    $('#post_desc').removeClass('is-invalid');
                    $('#post_desc').next('span.error-message').text('');
                }
    
                if (!postThumbnail) {
                    $('#post_thumbnail').addClass('is-invalid');
                    $('#post_thumbnail').next('span.error-message').text('Post thumbnail is required');
                    isValid = false;
                } else {
                    $('#post_thumbnail').removeClass('is-invalid');
                    $('#post_thumbnailt').next('span.error-message').text('');
                }
    
                if (!isValid) {
                    return;
                }
    
                var formData = new FormData(this);
    
                $.ajax({
                    type: "POST",
                    url: "{{ route('store.post') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (result) {
                        $('#create_post')[0].reset();
                        $('.success-message').show();
                        $('.toast-body').html(result.message);
                    }
                });
            });
    
            
            $('#post_title, #post_desc, #post_thumbnail').on('input', function () {
                $(this).removeClass('is-invalid');
                $(this).next('span.error-message').text('');
            });
        });
    </script>
    

    
    {{-- Footer --}}
    <x-footer/>

    

@endsection
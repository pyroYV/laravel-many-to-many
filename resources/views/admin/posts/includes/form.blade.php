
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" value="{{old('title', $post->post_title )}}" name="post_title">
    </div>
    @error('title')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <div class="mb-3">
        <label for="content" class="form-label">Post Content</label>
        <textarea type="text"  cols="30" rows="10" class="form-control" id="content" value=""
            name="post_content"> {{old('content', $post->post_content )}}</textarea>
    </div>
    @error('content')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" value="{{old('image', $post->post_image)}}" name="post_image">
    </div>
    @error('image')
    <div class="alert alert-danger">
        {{$message}}
    </div>
    @enderror



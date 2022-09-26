@extends('layouts.app')

@section('content')

<div class="container-lg">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.posts.update',$post->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.posts.includes.form')

                <a href="{{route('admin.posts.show', $post->id )}}"><input type="submit" class="btn btn-success mt-2" value="Submit"></a>
            </form>
        </div>
    </div>
</div>

@endsection

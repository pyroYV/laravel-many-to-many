@extends('layouts.app')

@section('content')
<div class="container-lg">
    <div class="row">
        <div class="col-12">
        <h2>{{$post->post_title}}</h2><h4>Author: {{$post->post_author}}</h4>
        </div>
        <div class="col-12">
            <img src="{{$post->post_image}}" alt="image of {{ $post->post_title}}" class="w-100">
        </div>
        <div class="col-12">

        <div class="card p-2">
            {{$post->post_content}}
        </div>
        </div>
        <span>{{$post->post_creation_date}}</span>
    </div>
</div>
@endsection

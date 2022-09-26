@extends('layouts.app')

@section('content')
<div class="container-lg">
    <div class="row">
        <div class="col-11">
        <h2>{{$post->post_title}}</h2><h4>Author: {{$post->post_author}}</h4>
        </div>
        <div class="col-1 my-2">
            @foreach ($post->tags as $tag)
            <button class="btn btn-warning my-1">{{$tag->name}}</button>
            @endforeach
        </div>
        <div class="col-12">
            {{-- <img src="{{$post->post_image}}" alt="image of {{ $post->post_title}}" class="w-100"> --}}
            <img src="{{asset('/uploads/user/'.Auth::user()->id.'/posts/'.$post->post_image)}}" alt="" class="w-100">
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

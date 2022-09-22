@extends('layouts.app')

@section('content')


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Autore</th>
        <th scope="col">Data</th>
        <th scope="col">Tags</th>
        <th scope="col">Extra</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td><a href="{{route('admin.posts.show', $post->id)}}">{{$post->post_title}}</a></td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->post_creation_date}}</td>
            <td>
                @foreach ($post->tags as $tag)
                {{$tag->name . ' ' }}
                @endforeach
            </td>
            <td><a href="{{ route('admin.posts.edit', $post->id)}}"> <button class="btn btn-warning">Edit</button></td>
            <td>
            <form action =" {{route ('admin.posts.destroy', $post->id) }}"
                method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type = "submit"  class="btn btn-danger d-inline"> 🗑️</button>
            </form></td>
          </tr>
        @empty
          <tr>
            <th scope="row">ID</th>
            <td>Titolo mancante</td>
            <td>Autore mancante</td>
            <td>Data mancante</td>
            <td><button class="btn btn-warn">Edit</button></td>
            <td> <a href="">🗑️</a> </td>
          </tr>
        @endforelse


    </tbody>
  </table>


@endsection

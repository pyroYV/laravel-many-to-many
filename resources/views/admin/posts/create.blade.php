@extends('layouts.app')

@section('content')

<div class="container-lg">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.posts.includes.form')


                <input type="submit" class="btn btn-success mt-2" value="Create & publish">
            </form>
        </div>
    </div>
</div>

@endsection

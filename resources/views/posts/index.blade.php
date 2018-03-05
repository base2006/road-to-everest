@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1>Posts index page</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="{{ route('posts.create') }}" class="btn btn-primary float-right"><span class="oi oi-plus"></span> Create New Post</a>
            </div>
        </div>
    </div>
@endsection
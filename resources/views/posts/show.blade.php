@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    </div>

    @include('posts.comments.comment')
@endsection
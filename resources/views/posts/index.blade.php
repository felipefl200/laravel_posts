@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Lista de Posts</h1>

    @forelse($posts as $post)
        <a href="{{route('posts.show', $post->id)}}">{{$post->title}}
        ({{$post->comments->count()}})</a>
        <hr>
        @empty
        <p>Nenhum post encontrado</p>

    @endforelse
</div>


@endsection
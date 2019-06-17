@extends('layouts.app')

@section('content')
    <div class="header-content">
        {{--            <img src="http://placehold.it/900x200">--}}
        <h1 class="title is-4">
            {{$post->title}}
        </h1>
        <small><i>Posted in
                <a href="{{route('category', $post->category->id)}}">{{$post->category->title}}</a>
                on <a href="{{route('posts.show', $post->id)}}">
                    {{$post->created_at->format('Y-m-d')}}
                </a> by
                <a href="#">{{$post->author->name}}</a>
            </i>
        </small>
    </div>
    <div class="content">
        <p>{{$post->content}}</p>
        <div class="content-footer">
            <hr/>
            <p><a class="button menu-label" href="{{route('home')}}">Back to Home</a></p>
        </div>
    </div>
@endsection


@extends('layouts.app')

@section('content')
    <div class="header-content">
        {{--            <img src="http://placehold.it/900x200">--}}
        <h1 class="title is-4">
            {{$post->title}}
        </h1>
        <small><i>Posted in <a href="category.html">Web Design</a> on <a href="category.html">January 20, 2015</a> by <a
                    href="category.html">Author</a></i></small>
    </div>
    <div class="content">
        <p>{{$post->content}}</p>
        <div class="content-footer">
            <hr/>
            <p><a class="button menu-label" href="{{route('home')}}">Back to Home</a></p>
        </div>
    </div>
@endsection


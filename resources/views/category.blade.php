@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        @include('layouts.partials._post', $post)
    @endforeach


    @include('layouts.partials._pagination')
@endsection

@extends('layouts.app')

@section('content')
    @forelse($posts as $post)
        @include('layouts.partials._post', $post)
        @include('layouts.partials._pagination')
        @empty
        <div class="content">
            <p >No posts with this category</p>
        </div>
    @endforelse

@endsection

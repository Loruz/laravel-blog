@extends('layouts.app')

@section('content')
	<div class="container">
		@foreach($posts as $post)
			<div>
				{{$post->title}}

				{{$post->description}}
			</div>
		@endforeach
	</div>
@endsection

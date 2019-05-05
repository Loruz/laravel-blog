<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials._head')
<body>
<div id="app">
	<div class="container">
		@include('layouts.partials._navbar')
		@yield('content')
	</div>

</div>
@include('layouts.partials._scripts')
</body>
</html>

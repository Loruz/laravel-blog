<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.partials._head')
<body>
<div id="app">
    <div class="main-content">
        <div class="container ">
            <div class="columns is-multiline is-mobile is-centered">
                @include('layouts.partials._sidebar')
                <div class="column is-8 is-offset-1 is-centered">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('layouts.partials._footer')
</div>
@include('layouts.partials._scripts')
</body>
</html>

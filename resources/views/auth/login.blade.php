@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <h1 class="title">Sign in</h1>
                    <form action="" method="post" class="form">
                        {{csrf_field()}}
                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <p class="control">
                                <input type="email" name="email" id="email" placeholder="e.g. mabel@codecource.com"
                                       value="{{old('email')}}"
                                       class="input {{$errors->has('email') ? 'is-danger': ''}}">
                            </p>
                            @if($errors->has('email'))
                                <p class="help is-danger">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <label for="password" class="label">Password</label>
                            <p class="control">
                                <input type="password" name="password" id="password"
                                       class="input {{$errors->has('password') ? 'is-danger': ''}}">

                            </p>
                            @if($errors->has('password'))
                                <p class="help is-danger">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="field">
                            <p class="control">
                                <label for="remember" class="checkout">
                                    <input type="checkbox" id="remember" name="remember">
                                    Remember me
                                </label>
                            </p>
                        </div>
                        <div class="field is-grouped">
                            <p class="control">
                                <button class="button is-primary">Sign in</button>
                            </p>
                            <p class="control">
                                <a href="{{route('password.request')}}"> Forgotten you password ?</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

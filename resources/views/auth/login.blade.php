@extends('layouts.app')


@section('content-top')
    <div class="content-top section-flex form-fixed">

    </div>
@endsection

@section('form')

<div class="form-container">
    <div class="login-title">Please login to use the app</div>

    <div class="loginpage">
        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email" class="form-label">E-mail</label>

            <div class="form-input">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        
                <label for="password" class="form-label">Password</label>

            <div class="form-input">
                <input id="password" type="password"
                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
   
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="login-bottom">
                <button type="submit" class="general-button">
                    {{ __('Login') }}
                </button>
            </div>
        </form> 
    </div>
    <div class="signup-link-container">
        <a href="/signup">Don't have an account? Register here!</a>
    </div>
</div>


@endsection

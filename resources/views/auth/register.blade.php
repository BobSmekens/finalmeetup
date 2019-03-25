@extends('layouts.app')

@section('content-top')
<div class="content-top section-flex form-fixed">

</div>
@endsection

@section('form')

<div class="form-container">
    <div class="register-title"></div>
    <div class="loginpage">
        <form class="login-form" method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name" class="form-label">Name:</label>

            <div class="form-input">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} "
                    name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>


            <label for="email" class="form-label">E-mail:</label>

            <div class="form-input">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                    name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <label for="password" class="form-label">Password</label>

            <div class="form-input">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                    name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>

            <label for="password-confirm" class="form-label">Confirm:</label>

            <div class="form-input">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <div class="login-bottom">
                <button type="submit" class="general-button signup-button">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

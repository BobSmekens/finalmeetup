@extends('layouts.app')

@section('content')

<div class="register-container">
    <div class="">
        <div class="col-md-8">
            <div class="card">


                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="section-title">Register here</div>
                        <div class="">
                            <label for="name" class="form-label">Name:</label>

                            <div class="form-input">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} " name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="form-label">E-mail:</label>

                            <div class="form-input">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="form-label">Password</label>

                            <div class="form-input">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="">
                            <label for="password-confirm" class="form-label">Confirm:</label>

                            <div class="form-input">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                            <div class="button-centered-container">
                                <button type="submit" class="general-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="login-section">
        <div class="login-title"><h2>{{ __('Login') }}</h2></div>
        <div class="login-form">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-row">
                    <div class="form-label">
                        <label for="email">*{{ __('E-Mail Address') }}</label>
                    </div>     
                    <div class="form-input">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-label">
                        <label for="password">*{{ __('Password') }}</label>
                    </div>
                    <div class="form-input">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-checkbox">
                        <label for="remember">{{ __('Remember Me') }}
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <div class="form-row login-btn-row">
                    <div class="form-input">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

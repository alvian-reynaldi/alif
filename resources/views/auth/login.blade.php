@extends('layouts.app')

@section('content')

  <div class="login-container  d-flex align-items-center">
    <div class="login-content bg-info">
      <div class="login-inner-container">
        <div class="left-content text-center">
          <img src="{{ asset('images/logo.png') }}" alt="let start">
        </div>
        <div class="right-content">
          <div class="form-content">
            <h3>Login to app</h3>
            <form method="POST" action="{{ route('login') }}">@csrf
              <div class="form-group">
                <fieldset>
                  <div class="icon">
                    <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                  </div>
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Username or Email" name="email" id="email" type="email" value="{{ old('email') }}" required autofocus />
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </fieldset>
              </div>
              <div class="form-group">
                <fieldset>
                  <div class="icon">
                    <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                  </div>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required />
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </fieldset>
              </div>
              <div class="forgot-password">
                <div class="remember">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                  <label for="remember">Ingat login</label>
                </div>
                <a href="{{ route('password.request') }}" class="forgot-link">Forgot Password</a>
              </div>
              <div class="form-group text-center">
                    <button class="btn btn-block btn-info" type="submit" >Log In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

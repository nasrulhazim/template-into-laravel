@extends('layouts.app')

@section('content')
<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                {{-- <img src="{{ asset('tabler/assets/brand/tabler.svg') }}" class="h-6" alt=""> --}}
                <p class="h-6">{{ config('app.name') }}</p>
              </div>
              <form class="card"  method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body p-6">
                  <div class="card-title">Login to your account</div>
                  <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Password
                      <a href="{{ route('password.request') }}" class="float-right small">I forgot password</a>
                    </label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }} />
                      <span class="custom-control-label">Remember me</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

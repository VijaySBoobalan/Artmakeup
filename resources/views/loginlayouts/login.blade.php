@extends('loginlayouts.layouts.master')
<section class="login-content">
  
  <div class="login-box">
    <form class="login-form" method="POST" action="{{ route('login') }}">
      @csrf
      <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN IN</h3>
      <div class="form-group">
        <label class="control-label">E-Mail</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group">
        <label class="control-label">PASSWORD</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group row">
        <div class="col-md-6">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
            </label>
          </div>
        </div>
      </div>
      @if (Route::has('password.request'))
      <div class="form-group">
        <div class="utility">
          
          <p class="semibold-text mb-2"><a href="" data-toggle="flip">Forgot Password ?</a></p>
        </div>
      </div>
      @endif
      <div class="form-group btn-container">
        <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN IN</button><br>
      </div><br>
      
    </form>
  <br></div>
</section>
<div class="login-box">
  <form class="login-form" action="dashboard.html">
    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN IN</h3>
    <div class="form-group">
      <label class="control-label">E-Mail</label>
      <input id="email" type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
    </div>
    <div class="form-group">
      <label class="control-label">PASSWORD</label>
      <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
      @if ($errors->has('password'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('password') }}</strong>
      </span>
      @endif
    </div>
    <div class="form-group">
      <div class="utility">
        
        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
      </div>
    </div>
    <div class="form-group btn-container">
      <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN IN</button>
    </div>
  </form>
  <form class="forget-form" action="dashboard.html">
    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
    <div class="form-group">
      <label class="control-label">EMAIL</label>
      <input class="form-control" type="text" placeholder="Email">
    </div>
    <div class="form-group btn-container">
      <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
    </div>
    <div class="form-group mt-3">
      <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
    </div>
  </form>
</div>
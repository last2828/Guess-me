@extends('author.auth.layout')
@section('content')

<!-- Register -->
<div class="nk-block toggled" id="l-register">
  <form action="{{route('register')}}" method="POST">
    @csrf
  <div class="nk-form">
    <div class="input-group">
      <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
      <div class="nk-int-st">
        <input type="text" class="form-control" placeholder="Username" name="name">
      </div>
    </div>

    <div class="input-group mg-t-15">
      <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
      <div class="nk-int-st">
        <input type="text" class="form-control" placeholder="Email Address" name="email">
      </div>
    </div>

    <div class="input-group mg-t-15">
      <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
      <div class="nk-int-st">
        <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
      </div>
    </div>

    <div class="input-group mg-t-15">
      <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-next"></i></span>
      <div class="nk-int-st">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
      </div>
    </div>
    <button type="submit" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-success"></i></button>
  </div>
  </form>

  <div class="nk-navigation rg-ic-stl">
    <a href="{{route('login')}}" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
    <a href="{{route('password.request')}}" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
  </div>
</div>

@endsection
@extends('author.auth.layout')
@section('content')
    <!-- Login -->
    <div class="nk-block toggled" id="l-login">
      <form action="{{route('login')}}" method="POST">
        @csrf
      <div class="nk-form">
        <div class="input-group">
          <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
          <div class="nk-int-st">
            <input type="text" class="form-control" placeholder="Email" name="email">
          </div>
        </div>
        <div class="input-group mg-t-15">
          <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
          <div class="nk-int-st">
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
        </div>
        <div class="fm-checkbox">
          <label><input type="checkbox" class="i-checks"> <i></i> Keep me signed in</label>
        </div>
        <button type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-success"></i></button>
      </div>
      </form>

      <div class="nk-navigation nk-lg-ic">
        <a href="{{route('register')}}" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
        <a href="{{route('password.request')}}" data-ma-block="#l-forget-password"><i>?</i> <span>Forgot Password</span></a>
      </div>
    </div>
  <!-- Login-->

@endsection
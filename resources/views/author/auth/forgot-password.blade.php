@extends('author.auth.layout')
@section('content')
  <!-- Forgot Password -->
  <div class="nk-block toggled" id="l-forget-password">
    <form action="{{route('password.email')}}" method="POST">
      @csrf
    <div class="nk-form">
      <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu risus. Curabitur commodo lorem fringilla enim feugiat commodo sed ac lacus.</p>

      <div class="input-group">
        <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
        <div class="nk-int-st">
          <input type="text" class="form-control" placeholder="Email Address" name="email" >
        </div>
      </div>
      <button type="submit" data-ma-block="#l-login" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></button>
    </div>
    </form>
    <div class="nk-navigation nk-lg-ic rg-ic-stl">
      <a href="{{route('login')}}" data-ma-block="#l-login"><i class="notika-icon notika-right-arrow"></i> <span>Sign in</span></a>
      <a href="{{route('register')}}" data-ma-block="#l-register"><i class="notika-icon notika-plus-symbol"></i> <span>Register</span></a>
    </div>
  </div>
@endsection
@extends('user.layouts.user_layout')
@section('content')
<section class="login__hero">
  <div class="login__logo">
    <img src="img/footer-logo.png" alt="">
  </div>
  <div class="login__box">
    <div class="login__box__title">
      <h4>Sign in</h4>
    </div>
    <div class="login__box__form">
      <form action="">
        <div><input type="text" placeholder="Email/NumberPhone/Username"></div>
        <div><input type="password" placeholder="Password"></div>
        <div><button class="form__login__btn">Sign in</button></div>
      </form>
      <div class="forgot__password"><a href="">Forgot password</a></div>
      <div class="login__hr__space">
        <div class="hr"></div>
        <div class="or__text">Or</div>
        <div class="hr"></div>
      </div>
      <div class="form__via">
        <a href="#" class="form__via--facebook"><img src="" alt="">Facebook</a>
        <a href="#" class="form__via--google"><img src="" alt="">Google</a>
      </div>
      <div class="register__link">First time visit here? <a href="">Register</a></div>
    </div>
  </div>
</section>
@endsection
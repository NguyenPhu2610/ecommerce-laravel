@extends('user.layouts.user_layout')
@section('content')
<section class="login__hero">
  <div class="login__logo">
    <img src="img/footer-logo.png" alt="">
  </div>
  <div class="login__box">
    <div class="login__box__title">
      <h4>Register</h4>
    </div>
    <div class="login__box__form">
      <form action="">
        <div class="input__double__box">
          <input class="input__double" type="text" placeholder="First Name">
          &ensp;
          <input class="input__double" type="text" placeholder="Last Name">
        </div>
        <div><input type="phone" placeholder="Phone number"></div>
        <div><input type="email" placeholder="Email"></div>
        <div><input type="password" placeholder="Password"></div>
        <div><button class="form__login__btn">Register</button></div>
      </form>
      <div class="register__link">Already have account? <a href="">Sign in</a></div>
    </div>
  </div>
</section>
@endsection
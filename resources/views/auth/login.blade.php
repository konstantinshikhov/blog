@extends('layouts.default')

@section('title','Авторизация')

@section('content')
    <!--login page start-->
    <div class="authentication-main">
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="auth-innerleft">
                    <div class="text-center">
                        <img src="../assets/images/logo-login.png" class="logo-login" alt="">
                        <hr>
                        <div class="social-media">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-facebook txt-fb" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-google-plus txt-google-plus" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-twitter txt-twitter" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-linkedin txt-linkedin" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 p-0">
                <div class="auth-innerright">
                    <div class="authentication-box">
                        <h4>LOGIN</h4>
                        <h6>Enter your Username and Password For Login or Signup</h6>
                        <div class="card mt-4 p-4 mb-0">
                            <form class="theme-form" method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-form-label pt-0">Your Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" required>
                                </div>
                                <div class="checkbox p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Remember me</label>
                                </div>
                                <div class="form-group form-row mt-3 mb-0">
                                    <div class="col-md-6 text-center">
                                        <button type="submit" class="btn btn-secondary">LOGIN</button>
                                    </div>

                                    <div class="col-md-6 text-center"> <a class="btn btn-secondary" href="{{route('register')}}">Register</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login page end-->
@stop


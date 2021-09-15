@extends('layouts.default')

@section('title','Авторизация')

@section('content')
    <!--sign up page start-->
    <div class="authentication-main">
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="auth-innerleft">
                    <div class="text-center">
                        <img src="../assets/images/logo-auth.gif" class="logo-login" alt="">
                        <hr>
                        <div class="social-media">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-google-plus" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-instagram" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-rss" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 p-0">
                <div class="auth-innerright">
                    <div class="authentication-box">
                        <h3 class="text-center"> Registration NEW USER</h3>
                        <h6 class="text-center">Enter your Username and Password For Login or Signup</h6>
                        <div class="card mt-4 p-4">
                            <form class="theme-form" method="POST" action="{{route('register')}}">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Phone</label>
                                            <input type="text" name="phone" class="form-control" placeholder="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="**********">
                                </div>
                                <div class="form-group">
                                    <label for="inputDate">Введите дату:</label>
                                    <input type="date" class="form-control" name="date_birthday">
                                </div>
                                <div class="form-row">
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-secondary">Sign Up</button>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-left mt-2 m-l-20">
                                            Are you already user?&nbsp;&nbsp;<a href="{{route('login')}}" class="btn-link text-capitalize">Login</a>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--sign up page Ends-->
@stop

@push('scripts')
    <script src="js/assets/date-picker/datepicker.js"></script>
    <script src="js/assets/date-picker/datepicker.en.js"></script>
    <script src="js/assets/date-picker/datepicker.custom.js"></script>
@endpush

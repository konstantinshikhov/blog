<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="tech">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon" />
    <title>@yield('title', 'Редактирование пользователя')</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/fontawesome.css')}}">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/icofont.css')}}">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/themify.css')}}">

    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/flag-icon.css')}}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/bootstrap.css')}}">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/style.css')}}">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/assets/responsive.css')}}">

</head>

<body>

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">

    @if (isset($errors) && count($errors))
        <div class="alert alert-danger">
            <b>Sorry, but there was an error:</b>
            <ul class='m-0'>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  @yield('content')

</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="{{asset('js/assets/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/assets/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('js/assets/bootstrap/bootstrap.js')}}"></script>

<!-- Sidebar jquery-->
<script src="{{asset('js/assets/sidebar-menu.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('js/assets/script.js')}}"></script>
@stack('scripts')

</body>

</html>

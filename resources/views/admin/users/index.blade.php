@extends('admin.layouts.app')

@section('content')
    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                <a href="#">
                    <img src="../assets/images/logo-light.png" class="image-dark" alt=""/>
                    <img src="../assets/images/logo-light-dark-layout.png" class="image-light" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">

                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <div class="media-body">
                                <h6 class="m-0 txt-dark f-16">
                                    My Account
                                    <i class="fa fa-angle-down pull-right ml-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li>
                                <a href="{{route('users.index',$user)}}">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit">
                                        <i class="icon-power-off"></i>
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">
        <!--Page Sidebar Start-->
        <div class="page-sidebar custom-scrollbar">
            <div class="sidebar-user text-center">
                <div>
                    <img class="img-50 rounded-circle" src="{{asset('/images/11.png')}}" alt="#">
                </div>
                <h6 class="mt-3 f-12">Johan Deo</h6>
            </div>
            <ul class="sidebar-menu">

                <li>
                    <div class="sidebar-title">Apps</div>
                    <a href="#" class="sidebar-header">
                        <i class="icon-user"></i><span>Users</span>
                        <i class="fa fa-angle-right pull-right"></i>
                    </a>
                    <ul class="sidebar-submenu">
                        <li><a href="{{route('users.show',\Illuminate\Support\Facades\Auth::user())}}"><i class="fa fa-angle-right"></i>Users Profile</a></li>
                        <li><a href="{{route('users.edit',\Illuminate\Support\Facades\Auth::user())}}"><i class="fa fa-angle-right"></i>Users Edit</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!--Page Sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <h3>{{$user->name??"Noname"}}
                                <small><a class="btn btn-success" href="{{route('users.show',$user)}}">Просмотр</a></small>
                            </h3>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends -->

            <!-- Container-fluid starts -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit "{{$user->name}}"</h5>
                                <span></span>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{route('users.update',$user)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <fieldset>

                                        <!-- Form Name -->
                                        <!-- Text input-->
                                        <div class="form-group row">
                                            <label class="col-lg-12 control-label text-lg-left" for="name">Your Name</label>
                                            <div class="col-lg-12">
                                                <input id="name" name="name" type="text" placeholder="name user" class="form-control btn-square input-md" value="{{$user->name}}" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-12 control-label text-lg-left" for="phone">Your phone</label>
                                            <div class="col-lg-12">
                                                <input id="phone" name="phone" type="text" placeholder="phone user" class="form-control btn-square input-md" value="{{$user->phone}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-12 control-label text-lg-left" for="date_birthday">Date of Birthday</label>
                                            <div class="col-lg-12">
                                                <input id="date-birthday" name="date_birthday" type="date"  class="form-control btn-square input-md" value="{{$user->date_birthday}}">
                                            </div>
                                        </div>

                                        <!-- Prepended text-->
                                        <div class="form-group row">
                                            <label class="col-lg-12 control-label text-lg-left" for="email">Email</label>
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="btn btn-primary">@mail</span></div>
                                                    <input id="email" name="email" class="form-control btn-square" placeholder="email" type="text" value="{{old("email",$user->email)}}">
                                                </div>

                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group row">
                                            <label class="col-lg-12 control-label text-lg-left" for="address">Full Address</label>
                                            <div class="col-lg-12">
                                                <input id="address" name="address" type="text" placeholder="Address" class="form-control btn-square input-md" value="{{$user->address??""}}">

                                            </div>
                                        </div>

                                        <!-- File Button -->
                                        <div class="form-group row">
                                            <label class="col-lg-12 control-label text-lg-left" for="avatar">Avatar</label>
                                            <div class="col-lg-12">
                                                <input id="avatar" name="avatar" class="input-file" type="file">
                                            </div>
                                            <div class="col-lg-12">
                                                @isset($user->avatar)
                                                    <img src="{{asset('/images/'.$user->avatar)}}" alt="{{$user->avatar}}" width="300px">
                                                @endisset
                                            </div>
                                        </div>
                                        <h3>Дополнительные параметры:</h3>
                                        @if (isset($user->custom_info))
                                            <div class="form-group row ml-3">
                                                <div class="group-list">
                                                    @foreach($user->custom_info as $item)
                                                        <div class="row " style="border:1px solid black" >
                                                            <div class="col-md-8 mt-3">
                                                                <label for="">Label</label>
                                                                <input type="text"  class=" form-control list-item" name="list[{{$loop->iteration}}][label]" value="{{$item['label']}}">
                                                            </div>
                                                            <div class="col-md-4 mt-5">
                                                                <button  class="btn btn-success add-list-item" ><i class="fa fa-plus-circle"></i></button>
                                                                <button  class="btn btn-danger delete-list-item"><i class="fa fa-minus-circle"></i></button>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label for="">Info</label>
                                                                <textarea class="form-control list-item-info" name="list[{{$loop->iteration}}][info]" id="" width="100%">{{isset($item['info'])?$item['info']:""}}</textarea>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                            <div class="form-group row ml-3">
                                                <div class="group-list">
                                                        <div class="row " style="border:1px solid black" >
                                                            <div class="col-md-8 mt-3">
                                                                <label for="">Label</label>
                                                                <input type="text"  class=" form-control list-item" name="list[0][label]" value="">
                                                            </div>
                                                            <div class="col-md-4 mt-5">
                                                                <button  class="btn btn-success add-list-item" ><i class="fa fa-plus-circle"></i></button>
                                                                <button  class="btn btn-danger delete-list-item"><i class="fa fa-minus-circle"></i></button>
                                                            </div>
                                                            <div class="col-md-12 mb-3">
                                                                <label for="">Info</label>
                                                                <textarea class="form-control list-item-info" name="list[0][info]" id="" width="100%"></textarea>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- Button -->
                                        <div class="form-group row">
                                            <label class="col-lg-12 control-label text-lg-left" for="Save"></label>
                                            <div class="col-lg-12">
                                                <button id="Save"  class="btn btn-info">Save</button>
                                            </div>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts -->
        </div>
    </div>
    <!--Page Body Ends-->
@stop

@push('scripts')
    <script>
        $(document).ready(function () {
            $(document).on("click", ".add-list-item",function (e) {
                e.preventDefault();
                let row = $(this).closest(".row").clone();

                row.find(".list-item").val('').attr('name','list['+($('.list-item').length+7)+'][label]');
                row.find(".list-item-info").val('').attr('name','list['+($('.list-item').length+7)+'][info]');
                $('.group-list').append(row);
            })
            $(document).on("click", ".delete-list-item",function (e) {
                e.preventDefault();
                $(this).closest('.row').remove();
            })
        })
    </script>
@endpush

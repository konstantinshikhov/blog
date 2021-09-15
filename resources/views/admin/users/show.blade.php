@extends('admin.layouts.app')

@section('title','Просмотр страницы пользователя')

@section('content')
    <div class="col-sm-12">
        <div class="card hovercard text-center">
            <div class="cardheader"></div>
            <div class="user-image">
                <div class="avatar">
                    @if(isset($user->avatar))
                        <img alt="" src="{{asset('images/'.$user->avatar)}}">
                    @else
                        <img alt="" src="{{asset('images/11.png')}}">
                    @endif
                </div>
                <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ttl-info text-left">
                                    <h6><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;Email</h6>
                                    <span>{{$user->email}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ttl-info text-left">
                                    <h6><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;BOD</h6>
                                    <span>{{\Carbon\Carbon::parse($user->date_birthday)->format("d.m.Y")}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                        <div class="user-designation">
                            <div class="title">
                                <a target="_blank" href="{{route('users.index',$user)}}">{{$user->name}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ttl-info text-left">
                                    <h6><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Contact Us</h6>
                                    <span>{{$user->phone}}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ttl-info text-left">
                                    <h6><i class="fa fa-location-arrow"></i>&nbsp;&nbsp;&nbsp;Location</h6>
                                    <span>{{$user->address}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="follow">
                    @isset($user->custom_info)
                        <h3>Дополнительная информация</h3>
                    @endisset
                    @forelse($user->custom_info as $item)
                    <div class="row">
                        <div class="col-6 text-md-right border-right border-left">
                            <div class="follow-num counter">
                              <b> {{isset($item['label'])?$item['label']:""}}</b>
                            </div>
                            <span><b>{{isset($item['info'])?$item['info']:""}}</b></span>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@stop

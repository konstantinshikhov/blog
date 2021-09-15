@extends('admin.layouts.default')

@section('title','Редактирование сотрдника')

@section('content')
    <div class="card-header">
        Редактирование Сотрудника
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method='post' action='{{route("users.update",$user->id)}}'
              enctype="multipart/form-data">

            @csrf
            @method("patch")
            @include('admin.users.form', ['user' => $user])
            <div class="form-group">
                <label for="category_category_name">Пароль</label>
                <input id="password" type="password" value="{{$user->password}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="category_category_name">Повторите пароль</label>
                <input id="password-confirm" type="password" value="{{$user->password}}" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <input type='submit' class='btn btn-primary' value='Сохранить изменения'>

        </form>
    </div>
@stop

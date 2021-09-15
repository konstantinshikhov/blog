<div class="form-group">
    <label for="category_category_name">ФИО</label>

    <input type="text"
           class="form-control"
           required
           aria-describedby="category_category_name_help"
           name='name'
           value="{{old("name",$user->name)}}"
    >

    <small id="category_category_name_help" class="form-text text-muted">ФИО сотрудника</small>
</div>
<div class="form-group">
    <label for="category_category_name">Должность</label>

    <input type="text"
           class="form-control"
           required
           aria-describedby="category_category_name_help"
           name='role'
           value="{{old("role",$user->role)}}"
    >

    <small id="category_category_name_help" class="form-text text-muted">Должность сотрудника</small>
</div>


<div class="form-group">
    <label for="category_slug">Email</label>
    <input
        maxlength='50'
        type="email"
        required
        class="form-control"
        aria-describedby="category_slug_help"
        name='email'
        value="{{old("email",$user->email)}}"
    >

    <small id="category_slug_help" class="form-text text-muted"> Почта сотрудника
    </small>
</div>

<div class="form-group">
    <label for="category_slug">Аватар</label>
    <input
        type="file"
        required
        class="form-control"
        aria-describedby="category_slug_help"
        name='image'
    >
    <img src="/image/{{ $user->image }}" width="300px">
</div>

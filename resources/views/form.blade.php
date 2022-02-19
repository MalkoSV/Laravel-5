<form action="/form" method="post" enctype="multipart/form-data">
    @csrf
    Name:<input type="text" name="name" placeholder="Имя пользователя" value={{ old('name') }}>
    email:<input type="text" name="email" placeholder="email" value="{{ old('email') }}">
    Password:<input type="password" name="password" placeholder="Пароль" value="{{ old('password') }}">
    <button type="submit">send</button>


    {{--//    <input type="file" name="image">--}}
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="form">Добавить пользователя</a><hr>

<table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        </tr>
    @endforeach
</table>
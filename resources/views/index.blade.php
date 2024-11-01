<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Новая порода</p>
<form action="/newBreed" method="post">
    @csrf
    <label for="name">Порода</label>
    <input type="text" name="name">

    <button>Зарегистрировать</button>
</form>
<table>
    <tr>
        <th>номер</th>
        <th>Кличка</th>
        <th>возраст</th>
        <th>Порода</th>
        <th>Окрас</th>
        <th>Хозяин</th>
    </tr>
@foreach($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->age}}</td>
            <td>{{$member->breed->breed}}</td>
            <td>{{$member->color}}</td>
            <td>{{$member->user->email}}</td>
        </tr>
@endforeach
</table>
</body>
</html>

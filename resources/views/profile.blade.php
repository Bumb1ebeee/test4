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
<h1>{{Auth::user()->name}}</h1>
<p>новый участник</p>

<form action="/newMember">
    @csrf
    <label for="name">Кличка</label>
    <input type="text" name="name">
    @error('name')
    <div>{{ $message }}</div>
    @enderror
    <label for="age">Возраст</label>
    <input type="number" min="0" max="50" name="age">
    @error('age')
    <div>{{ $message }}</div>
    @enderror
    <label for="breed">порода</label>
    <select name="breed">
        @foreach($breeds as $breed)
            <option value="{{$breed->id}}">{{$breed->name}}</option>
        @endforeach
    </select>
    @error('breed')
    <div>{{ $message }}</div>
    @enderror
    <label for="color">окрас</label>
    <input type="text" name="color">
    @error('color')
    <div>{{ $message }}</div>
    @enderror

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

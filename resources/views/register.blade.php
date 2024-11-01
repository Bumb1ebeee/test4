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
<form action="/register" method="post">
    @csrf
    <label for="name">Имя</label>
    <input type="text" name="name">
    @error('name')
    <div>{{ $message }}</div>
    @enderror
    <label for="email">email</label>
    <input type="email" name="email">
    @error('email')
    <div>{{ $message }}</div>
    @enderror
    <label for="password">пароль</label>
    <input type="password" name="password">
    @error('password')
    <div>{{ $message }}</div>
    @enderror
    <label for="password_confirmation">Подтвердите пароль</label>
    <input type="password" name="password_confirmation">
    @error('password_confirmation')
    <div>{{ $message }}</div>
    @enderror

    <button>Зарегистрироваться</button>
</form>
</body>
</html>

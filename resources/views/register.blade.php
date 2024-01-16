<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{url('register') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" ><br>

    <label for="email">Email:</label>
    <input type="email" name="email" ><br>

    <label for="password">Password:</label>
    <input type="password" name="password" ><br>

    <label for="phone">Phone:</label>
    <input type="password" name="phone" ><br>

    <label for="address">Address:</label>
    <input type="password" name="address" ><br>

    <button type="submit">Register</button>
</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User form</title>
</head>
<body>
<h2>Fill form</h2>
<form action="{{url('store_form')}}" method="POST">
    @csrf
    <label for="">Name:<input type="text" name="name" id="name"></label></br>
    <label for="">Surname:<input type="text" name="surname" id="surname"></label></br>
    <label for="">Email:<input type="email" name="email" id="email"></label></br>
<button type="submit">Submit</button>
</form>
</body>
</html>

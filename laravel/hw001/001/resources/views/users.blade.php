<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of users</title>
</head>
<body>
    <table border="2">
@foreach($users as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
</tr>
@endforeach
    </table>
</body>
</html>

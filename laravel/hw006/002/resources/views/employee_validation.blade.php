<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
</head>

<body>
    <form action="{{ Route('post_validation_form') }}" method="POST">
        @csrf
        <label @error('first_name') style='color:red;' @enderror for="first_name">Name: </label>
        <input @error('first_name') style='border:1px solid red;' @enderror type="text" name="first_name">
        @error('first_name') {{$message}} @enderror<br>
        <label for="password">Password: </label>
        <input type="password" name="password"><br>
        <label for="confirm_password">Confirm password: </label>
        <input type="password" name="confirm_password"><br>
        <input type="submit" value="Send">
    </form>
    @foreach ($errors->all() as $error)
        {{ $error }} <br>
    @endforeach
</body>

</html>

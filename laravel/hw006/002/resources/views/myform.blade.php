<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My form</title>
</head>

<body>
    <form action="{{ Route('post_form') }}" method="post" name="myname">
        @csrf
        <label>Name:</label>
        <input type="text" name="my_name"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="hidden" name="age" value="35">
        <label>Male:</label>
        <input type="radio" name="gender" value="male">
        <label>Female:</label>
        <input type="radio" name="gender" value="female"><br>
        <label>Notebook:</label>
        <input type="checkbox" name="category[]" value="notebook"><br>
                <label>Keyboard:</label>
        <input type="checkbox" name="category[]" value="keyboard"><br>
                <label>Laptop:</label>
        <input type="checkbox" name="category[]" value="laptop"><br>
        <input type="submit" value="Submit"></input>
    </form>
</body>

</html>

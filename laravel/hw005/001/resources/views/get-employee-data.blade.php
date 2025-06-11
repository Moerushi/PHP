<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="employee-form" class="employee-form" method="post" action="{{ url('store-form')}}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input type="text" name="last_name" id="last_name" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" required="true">
        </div>
        <div class="form-group">
            <label for="workData">workData</label>
            <textarea name="workData" class="form-control" required="true"></textarea>
        </div>
        <div class="form-group">
            <label for="jsonData">JSON</label>
            <textarea name="jsonData" class="form-control" required="true"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
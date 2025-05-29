<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User registration example</title>
</head>

<body>
    <div class="card">

        <div class="card-body">
            <form name="add-blog-post" id="add-blog-post" method="post" action="{{url('user')}}">
                @csrf
                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" id="username" name="username" class="form-control" required="">
                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control" required="">
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>

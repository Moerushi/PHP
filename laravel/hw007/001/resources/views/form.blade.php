<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
</head>

<body>
    <div class="add-user">
        <form action="{{route('store-user')}}" method="post" name="add-new-user" id="add-new-user">
            @csrf
            <div class="form-section">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="surname">Surname</label>
                <input type="text" id="surname" name="surname" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="surname">E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @foreach ($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>
</body>

</html>
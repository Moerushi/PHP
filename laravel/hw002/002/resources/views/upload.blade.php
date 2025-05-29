<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>File upload</title>
</head>

<body>
    <div class="card">

        <div class="card-body">
            <form name="add-new-book" id="add-new-book" method="post" enctype="multipart/form-data" action="{{route('upload_file')}}">
                @csrf
                <div class="form-group">
                    <label for="file_name">Name</label>
                    <input type="text" id="file_name" name="file_name" class="form-control" required="">
                    <input type="file" name="uploaded_file">
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>

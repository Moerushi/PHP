<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
</head>

<body>
    <form name='file-upload' enctype="multipart/form-data" method="POST" action="{{Route('uploadFile')}}">
        @csrf
        {{-- <input type="file" name="upload-photo"> --}}
        <input type="file" name="upload_photo[]">
        <input type="file" name="upload_photo[]">
        <button type="submit" value="Send">Send</button>
    </form>
</body>

</html>

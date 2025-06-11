<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
</head>

<body>
    <div class="add-books__form-wrapper">
        <form action="{{route('store-form')}}" method="post" name="add-new-book" id="add-new-book">
            @csrf
            <div class="form-section">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="genre">Choose Genre:</label>
                <select name="genre" id="genre">
                    <option value="fantasy">Fantasy</option>
                    <option value="sci-fi">Sci-Fi</option>
                    <option value="mystery">Mystery</option>
                    <option value="drama">Drama</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        @foreach ($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>
</body>

</html>
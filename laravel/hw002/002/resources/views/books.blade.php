<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Books list</title>
</head>

<body>
    <div class="card">

        <div class="card-body">
            <table>
                @foreach($books as $key => $book)
<tr><td>{{$book}}</td><td><a href="{{route('remove_book', $key)}}">REMOVE</a></td></tr>
                @endforeach
            </table>

            <form name="add-new-book" id="add-new-book" method="post" action="{{route('save_book')}}">
                @csrf
                <div class="form-group">
                    <label for="bookname">Name</label>
                    <input type="text" id="bookname" name="bookname" class="form-control" required="">
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

</body>

</html>

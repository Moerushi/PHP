<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>

<body>
@php
    $greenuser = 2;
@endphp

    <table border="2">
        @foreach ($userslist as $key => $item)
            @if ($key == $greenuser)
                <tr>
                    <td>{{ $key }}</td>
                    <td style="background-color: green">{{ $item }}</td>
                </tr>
            @elseif ($key == 4)
                <tr>
                    <td>{{ $key }}</td>
                    <td><b>{{ $item }}</b></td>
                </tr>
            @else
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $item }}</td>
                </tr>
            @endif
        @endforeach
    </table>

</body>

</html>

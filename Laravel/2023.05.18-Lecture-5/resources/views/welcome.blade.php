<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel main</title>

    </head>
    <body>
        <center>
        <p>Currency List</p>

        @if(isset($data))
            <table border="1">
            @foreach( $data as $Currency => $Rate )
            <tr><td>{{ $Currency }}</td><td>{{ $Rate }}</td></tr>
            @endforeach
            </table>
        @else
            <p>No data input</p>
        @endif
        </center>
    </body>
</html>

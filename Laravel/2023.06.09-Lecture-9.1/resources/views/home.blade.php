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

        @if(isset($text))
            <p>{{ $text }}</p>
        @endif

        
        @if(isset($data))
            <table border="1">
            <tr><td>currency</td><td>rate now</td><td>rate cached</td></tr>
            @foreach( $data as $currency )
            <tr><td>{{ $currency['name'] }}</td><td>{{ $currency['rate_now'] }}</td><td>{{ $currency['rate_cached'] }}</td></tr>
            @endforeach
            </table>
        @else
            <p>No data input</p>
        @endif
        </center>
    </body>
</html>

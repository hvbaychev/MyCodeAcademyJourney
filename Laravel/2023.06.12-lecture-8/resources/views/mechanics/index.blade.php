@extends('layouts.base')

@section('content')
    <h1>Mechanics</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Specialty</th>
            <!-- Други колони за данни -->
        </tr>
        @foreach ($mechanics as $mechanic)
            <tr>
                <td>{{ $mechanic->name }}</td>
                <td>{{ $mechanic->specialty }}</td>
                <!-- Други клетки с данни -->
            </tr>
        @endforeach
    </table>
@endsection

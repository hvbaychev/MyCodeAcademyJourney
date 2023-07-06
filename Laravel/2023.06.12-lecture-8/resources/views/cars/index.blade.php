@extends('layouts.base')

@section('content')
    <h1>Cars</h1>
    <table>
        <tr>
            <th>Model</th>
            <th>Manufacturer</th>
            <!-- Други колони за данни -->
        </tr>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->model }}</td>
                <td>{{ $car->manufacturer }}</td>
                <!-- Други клетки с данни -->
            </tr>
        @endforeach
    </table>
@endsection

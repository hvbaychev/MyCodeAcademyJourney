@extends('layouts.base')

@section('content')
    <h2>Редактиране на кола</h2>
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Форма за редактиране на кола с полета за промяна на данните -->
        <!-- Например: -->
        <label for="make">Марка:</label>
        <input type="text" name="make" value="{{ $car->make }}" required>

        <label for="model">Модел:</label>
        <input type="text" name="model" value="{{ $car->model }}" required>

        <button type="submit">Запази</button>
    </form>
@endsection

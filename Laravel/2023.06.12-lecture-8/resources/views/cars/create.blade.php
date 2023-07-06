@extends('layouts.base')

@section('content')
    <h2>Добавяне на нова кола</h2>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <!-- Форма за създаване на нова кола с полета за данните -->
        <!-- Например: -->
        <label for="make">Марка:</label>
        <input type="text" name="car_make" required>

        <label for="model">Модел:</label>
        <input type="text" name="car_model" required>

        <label for="mechanic_id">Mechanic:</label>
        <select name="mechanic_id" id="mechanic_id">
            <option value="owner"></option>
            @foreach ($mechanics as $mechanic)
                <option value="{{ $mechanic->id }}">{{ $mechanic->mechanic_name }}</option>
            @endforeach

        </select>
        <label for="owner_id">Owner:</label>
        <select name="owner_id" id="owner_id">
            <option value="owner"></option>
            @foreach ($owners as $owner)
                <option value="{{ $owner->id }}">{{ $owner->owner_name }}</option>
            @endforeach
        </select>
        <button type="submit">Създай</button>
    </form>
@endsection

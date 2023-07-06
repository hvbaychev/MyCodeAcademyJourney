@extends('layouts.base')

@section('content')
    <h2>Детайли за кола</h2>
    <div>
        <p><strong>Марка:</strong> {{ $car->make }}</p>
        <p><strong>Модел:</strong> {{ $car->model }}</p>
        <!-- Извеждане на останалите данни за колата -->
    </div>
@endsection

@extends('layouts.base')

@section('content')
    <h1>Mechanic Details</h1>
    <p>Name: {{ $mechanic->name }}</p>
    <p>Specialty: {{ $mechanic->specialty }}</p>
    <!-- Други полета с данни за механика -->
@endsection

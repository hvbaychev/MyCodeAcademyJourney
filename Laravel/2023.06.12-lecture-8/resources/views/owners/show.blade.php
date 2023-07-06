@extends('layouts.base')

@section('content')
    <h1>Owner Details</h1>
    <p>Name: {{ $owner->name }}</p>
    <p>Email: {{ $owner->email }}</p>
    <!-- Други полета с данни за собственика -->
@endsection

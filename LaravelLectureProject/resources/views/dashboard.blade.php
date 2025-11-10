@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Üdvözöllek a kezelőpulton, {{ Auth::user()->name }}!</h2>
    <ul class="list-group mt-4">
        <li class="list-group-item">Felhasználói név: {{ Auth::user()->name }}</li>
        <li class="list-group-item">Email cím: {{ Auth::user()->email }}</li>
        <li class="list-group-item">Regisztráció dátuma: {{ Auth::user()->created_at->format('Y-m-d H:i:s') }}</li>
        <li class="list-group-item">Jogosultság: {{ Auth::user()->role }}</li>
    </ul>

</div>
@endsection
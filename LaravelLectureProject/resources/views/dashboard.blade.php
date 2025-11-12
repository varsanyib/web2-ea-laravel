@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Üdvözlő szakasz -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="p-4 text-white rounded shadow text-center" style="background-color: #08192d;">
                <h2 class="mb-2">Üdvözöllek, {{ Auth::user()->name }}!</h2>
                <p class="mb-0">Itt áttekintheted a fiókod adatait.</p>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Felhasználói név</h6>
                    <h5 class="card-title">{{ Auth::user()->name }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Email cím</h6>
                    <h5 class="card-title">{{ Auth::user()->email }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Regisztráció dátuma</h6>
                    <h5 class="card-title">{{ Auth::user()->created_at->format('Y-m-d H:i:s') }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card text-center shadow-sm h-100">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Jogosultság</h6>
                    <h5 class="card-title">{{ Auth::user()->role }}</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-8 mx-auto">
            <a href="{{ route('profile.edit') }}" class="btn p-4 w-100 rounded text-white font-weight-bold" style="background-color: #08192d;">Profil adatainak módosítása</a>
        </div>
    </div>
</div>
@endsection

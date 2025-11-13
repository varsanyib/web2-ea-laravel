@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center text-white" style="background-color: #08192d">
                    <h4>Bejelentkezés</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success mb-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail cím</label>
                            <input id="email" type="email" name="email"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   required autofocus autocomplete="username">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Jelszó</label>
                            <input id="password" type="password" name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                            <label class="form-check-label" for="remember_me">
                                Emlékezzen rám
                            </label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            @if (Route::has('password.request'))
                                <a class="text-decoration-none small text-muted"
                                   href="{{ route('password.request') }}">
                                    Elfelejtett jelszó?
                                </a>
                            @endif
                            <button type="submit" class="btn px-4" style="background-color: #08192d; color: white;">
                                Bejelentkezés
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center text-muted small">
                    Nincs fiókja? <a href="{{ route('register') }}" class="text-decoration-none">Regisztráljon itt</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

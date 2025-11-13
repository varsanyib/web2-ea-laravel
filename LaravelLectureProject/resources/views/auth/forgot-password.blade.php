@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-header text-center text-white" style="background-color: #08192d;">
                    <h4>Elfelejtett jelszó</h4>
                </div>

                <div class="card-body">
                    <p class="text-muted mb-4">
                        Adja meg az e-mail címét, és kap egy hivatkozást e-mailben, ahol új jelszót állíthat be.
                    </p>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail cím</label>
                            <input id="email" type="email" name="email"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('login') }}" class="text-decoration-none small text-muted">
                                Vissza a bejelentkezéshez
                            </a>
                            <button type="submit" class="btn px-4" style="background-color: #08192d; color: white;">
                                Küldés
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center text-muted small">
                    <span>Nem emlékszik az e-mail címére? </span>
                    <a href="{{ route('register') }}" class="text-decoration-none">Regisztráljon új fiókot</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

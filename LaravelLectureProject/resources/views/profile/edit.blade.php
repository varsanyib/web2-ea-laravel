@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-3">Profil információk</h4>
                    <p class="text-muted mb-4">Frissítse a fiókja adatait és email címét.</p>

                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('patch')

                        <div class="mb-3">
                            <label for="name" class="form-label">Név</label>
                            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $user->name) }}" required autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $user->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                <div class="mt-2 text-muted small">
                                    Email címe nincs megerősítve.
                                    <button form="send-verification" class="btn btn-link btn-sm p-0">Kattintson ide az új megerősítő emailhez</button>
                                </div>

                                @if (session('status') === 'verification-link-sent')
                                    <p class="text-success small mt-1">Új megerősítő link elküldve az email címére.</p>
                                @endif
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Mentés</button>

                        @if (session('status') === 'profile-updated')
                            <span class="text-success ms-3">Mentve.</span>
                        @endif
                    </form>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-3">Jelszó módosítás</h4>
                    <p class="text-muted mb-4">Biztonságos, hosszú jelszó használata ajánlott.</p>
                        <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="current_password" class="form-label">Jelenlegi jelszó</label>
                            <input type="password" id="current_password" name="current_password"
                                class="form-control @error('current_password') is-invalid @enderror" required>
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Új jelszó</label>
                            <input type="password" id="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Új jelszó megerősítése</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control @error('password_confirmation') is-invalid @enderror">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Mentés</button>
                        @if (session('status') === 'password-updated')
                            <span class="text-success ms-3">Mentve.</span>
                        @elseif (session('status') === 'password-update-failed')
                            <span class="text-danger ms-3">A jelszó frissítése sikertelen.</span>
                        @endif

                    </form>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="card-title mb-3 text-danger">Fiók törlése</h4>
                    <p class="text-muted mb-4">
                        A fiókja törlése után az összes adat véglegesen törlődik! Ez a művelet visszafordíthatatlan.
                    </p>

                    <form method="POST" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Biztosan törölni szeretné a fiókját?');">
                        @csrf
                        @method('delete')

                        <div class="mb-3">
                            <label for="password_delete" class="form-label">Jelszó megerősítés</label>
                            <input type="password" id="password_delete" name="password"
                                class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Fiók törlése</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

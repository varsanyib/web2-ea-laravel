@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-center">Rádióadó szerkesztése</h3>

                    <form action="{{ route('radios.update', $radio) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Név</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="name" value="{{ old('name', $radio->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="town_name" class="form-label">Település neve</label>
                            <select id="town_name" name="town_name" class="form-select @error('town_name') is-invalid @enderror" required>
                                <option value="">-- Válasszon települést --</option>
                                @foreach ($towns as $town)
                                    <option value="{{ $town->name }}" {{ old('town_name', $radio->town_name) == $town->name ? 'selected' : '' }}>
                                        {{ $town->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('town_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="frequency" class="form-label">Frekvencia (MHz)</label>
                            <input type="number" step="0.01" class="form-control @error('frequency') is-invalid @enderror"
                                   id="frequency" name="frequency" value="{{ old('frequency', $radio->frequency) }}" required>
                            @error('frequency')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="power" class="form-label">Teljesítmény (kW)</label>
                            <input type="number" step="0.01" class="form-control @error('power') is-invalid @enderror"
                                   id="power" name="power" value="{{ old('power', $radio->power) }}">
                            @error('power')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="address" class="form-label">Cím</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror"
                                   id="address" name="address" value="{{ old('address', $radio->address) }}">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('radios.index') }}" class="btn btn-secondary">Vissza</a>
                            <button type="submit" class="btn btn-primary">Frissítés</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.app')

@section('content')
    <h1>Új Rádióadó Létrehozása</h1>

    <form action="{{ route('radios.store') }}" method="POST">
        @csrf
        <div>
            <label>Név:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Település neve:</label>
            <select name="town_name" required>
                <option value="">-- Válasszon települést --</option>
                @foreach ($towns as $town)
                    <option value="{{ $town->name }}" {{ old('town_name') == $town->name ? 'selected' : '' }}>
                        {{ $town->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Frekvencia:</label>
            <input type="number" step="0.01" name="frequency" value="{{ old('frequency') }}" required>
        </div>
        <div>
            <label>Teljesítmény:</label>
            <input type="number" step="0.01" name="power" value="{{ old('power') }}">
        </div>
        <div>
            <label>Cím:</label>
            <input type="text" name="address" value="{{ old('address') }}">
        </div>
        <button type="submit">Mentés</button>
    </form>

    <a href="{{ route('radios.index') }}">Vissza</a>
@endsection

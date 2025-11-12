
@extends('layouts.app')

@section('content')
    <h1>Rádióadó szerkesztése</h1>

    <form action="{{ route('radios.update', $radio) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Név:</label>
            <input type="text" name="name" value="{{ old('name', $radio->name) }}" required>
        </div>
        <div>
            <label>Település neve:</label>
            <input type="text" name="town_name" value="{{ old('town_name', $radio->town_name) }}" required>
        </div>
        <div>
            <label>Frekvencia:</label>
            <input type="number" step="0.01" name="frequency" value="{{ old('frequency', $radio->frequency) }}" required>
        </div>
        <div>
            <label>Teljesítmény:</label>
            <input type="number" step="0.01" name="power" value="{{ old('power', $radio->power) }}">
        </div>
        <div>
            <label>Cím:</label>
            <input type="text" name="address" value="{{ old('address', $radio->address) }}">
        </div>
        <button type="submit">Frissítés</button>
    </form>

    <a href="{{ route('radios.index') }}">Vissza</a>
@endsection

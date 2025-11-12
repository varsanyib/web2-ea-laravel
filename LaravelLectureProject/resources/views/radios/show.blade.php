
@extends('layouts.app')

@section('content')
    <h1>Rádióadó részletei</h1>

    <p><strong>Név:</strong> {{ $radio->name }}</p>
    <p><strong>Település:</strong> {{ $radio->town_name }}</p>
    <p><strong>Frekvencia:</strong> {{ $radio->frequency }} Mhz</p>
    <p><strong>Teljesítmény:</strong> {{ $radio->power ?? '-' }} kW</p>
    <p><strong>Cím:</strong> {{ $radio->address ?? '-' }}</p>

    <a href="{{ route('radios.edit', $radio) }}">Szerkesztés</a> |
    <a href="{{ route('radios.index') }}">Vissza</a>
@endsection

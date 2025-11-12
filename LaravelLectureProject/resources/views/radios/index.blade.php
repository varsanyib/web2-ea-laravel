@extends('layouts.app')

@section('content')
<h1>Rádióadók</h1>
    <a href="{{ route('radios.create') }}">Új rádióadó hozzáadása</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Név</th>
                <th>Település</th>
                <th>Frekvencia</th>
                <th>Teljesítmény</th>
                <th>Cím</th>
                <th>Műveletek</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($radios as $radio)
                <tr>
                    <td>{{ $radio->name }}</td>
                    <td>{{ $radio->town_name }}</td>
                    <td>{{ $radio->frequency }} Mhz</td>
                    <td>{{ $radio->power ?? '-' }} kW</td>
                    <td>{{ $radio->address ?? '-' }}</td>
                    <td>
                        <a href="{{ route('radios.show', $radio) }}">Megjelenítés</a> |
                        <a href="{{ route('radios.edit', $radio) }}">Szerkesztés</a> |
                        <form action="{{ route('radios.destroy', $radio) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Biztos benne, hogy törölni akarja?')">Törlés</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

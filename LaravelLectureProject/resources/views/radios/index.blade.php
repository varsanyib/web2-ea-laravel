@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Rádióadók</h2>
            <a href="{{ route('radios.create') }}" class="btn btn-success">Új rádióadó hozzáadása</a>
        </div>
    </div>

    <table class="table table-striped table-hover align-middle">
                            <thead style="background-color: #08192d; color: white;">
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
                                @forelse ($radios as $radio)
                                    <tr>
                                        <td>{{ $radio->name }}</td>
                                        <td>{{ $radio->town_name }}</td>
                                        <td>{{ $radio->frequency }} MHz</td>
                                        <td>{{ $radio->power ?? '-' }} kW</td>
                                        <td>{{ $radio->address ?? '-' }}</td>
                                        <td>
                                            <div class="d-flex flex-column gap-2">
                                                <a href="{{ route('radios.show', $radio) }}" class="btn btn-sm btn-primary w-100 m-2">Megjelenítés</a>
                                                <a href="{{ route('radios.edit', $radio) }}" class="btn btn-sm btn-warning w-100 m-2">Szerkesztés</a>
                                                @if(auth()->user()->role === 'admin')
                                                    <form action="{{ route('radios.destroy', $radio) }}" method="POST" onsubmit="return confirm('Biztos benne, hogy törölni akarja?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger w-100 m-2">Törlés</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Nincsenek rádióadók.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
</div>
@endsection

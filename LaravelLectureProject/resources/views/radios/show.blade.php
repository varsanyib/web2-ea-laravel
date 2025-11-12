@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-center">Rádióadó részletei</h3>

                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Név</span>
                            <span class="fw-bold">{{ $radio->name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Település</span>
                            <span class="fw-bold">{{ $radio->town_name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Frekvencia</span>
                            <span class="badge bg-primary fs-6 animate__animated animate__pulse">{{ $radio->frequency }} MHz</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Teljesítmény</span>
                            <span class="badge bg-success fs-6 animate__animated animate__pulse">
                                {{ $radio->power ?? '-' }} kW
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span>Cím</span>
                            <span class="fw-bold">{{ $radio->address ?? '-' }}</span>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('radios.edit', $radio) }}" class="btn btn-warning">Szerkesztés</a>
                        <a href="{{ route('radios.index') }}" class="btn btn-secondary">Vissza</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection

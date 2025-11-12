@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center mb-4">
            <h2>Rádióadók száma megyénként</h2>
        </div>
        <div class="col-md-8">
            <canvas id="chart" style="max-width: 100%; height: 400px;"></canvas>
        </div>
        <div class="col-md-8 text-center mt-4">
                <h4>Rendszerben regisztrált rádiók száma: <strong>{{ $totalRadios }}</strong></h4>
        </div>
        <div class="col-md-8 text-center mt-4">
            <h6>Legújabb rádió: <strong>{{ $latestRadio->name }} ({{ $latestRadio->frequency }})</strong></h6>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('chart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: @json($labels),
        datasets: [{
            label: 'Rádióadók száma megyénként',
            data: @json($values),
            backgroundColor: 'rgba(54, 162, 235, 0.6)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: { beginAtZero: true, precision: 0 }
        }
    }
});
</script>
@endsection

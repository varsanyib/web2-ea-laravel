@extends('layouts.app')

@section('content')
<canvas id="chart" width="600" height="300"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('chart').getContext('2d');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: @json($labels),
    datasets: [{ label: 'Radios per region', data: @json($values) }]
  }
});
</script>
@endsection

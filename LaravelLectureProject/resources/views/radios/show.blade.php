@extends('layouts.app')

@section('content')
<h1>{{ $radio->name }}</h1>
<div>Region: {{ $radio->region->name }}</div>
<div>Frequency: {{ $radio->frequency }}</div>
<a href="{{ route('radios.index') }}">Back</a>
@endsection

@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('radios.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
    @error('name')<div>{{ $message }}</div>@enderror

    <input type="text" name="frequency" placeholder="Frequency" value="{{ old('frequency') }}">
    @error('frequency')<div>{{ $message }}</div>@enderror

    <select name="region_id">
        @foreach($regions as $reg)
            <option value="{{ $reg->id }}" @selected(old('region_id') == $reg->id)>{{ $reg->name }}</option>
        @endforeach
    </select>
    @error('region_id')<div>{{ $message }}</div>@enderror

    <button type="submit">Save</button>
</form>
@endsection

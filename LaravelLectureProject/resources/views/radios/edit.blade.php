@extends('layouts.app')

@section('content')
<form method="post" action="{{ route('radios.update',$radio) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ old('name',$radio->name) }}">
    @error('name')<div>{{ $message }}</div>@enderror

    <input type="text" name="frequency" value="{{ old('frequency',$radio->frequency) }}">
    @error('frequency')<div>{{ $message }}</div>@enderror

    <select name="region_id">
        @foreach($regions as $reg)
            <option value="{{ $reg->id }}" @selected(old('region_id',$radio->region_id)==$reg->id)>{{ $reg->name }}</option>
        @endforeach
    </select>
    @error('region_id')<div>{{ $message }}</div>@enderror

    <button type="submit">Update</button>
</form>
@endsection

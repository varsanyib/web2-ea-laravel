@extends('layouts.app')

@section('content')
<a href="{{ route('radios.create') }}">New radio</a>
<table>
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Region</th><th>Frequency</th><th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($radios as $r)
            <tr>
                <td>{{ $r->id }}</td>
                <td><a href="{{ route('radios.show',$r) }}">{{ $r->name }}</a></td>
                <td>{{ $r->region->name }}</td>
                <td>{{ $r->frequency }}</td>
                <td><a href="{{ route('radios.edit',$r) }}">Edit</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $radios->links() }}
@endsection

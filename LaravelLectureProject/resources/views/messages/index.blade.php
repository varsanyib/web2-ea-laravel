@extends('layouts.app')

@section('content')
<table>
    <thead><tr><th>When</th><th>Name</th><th>Email</th><th>Subject</th><th>Message</th></tr></thead>
    <tbody>
    @foreach($messages as $m)
        <tr>
            <td>{{ $m->created_at }}</td>
            <td>{{ $m->name }}</td>
            <td>{{ $m->email }}</td>
            <td>{{ $m->subject }}</td>
            <td>{{ $m->body }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $messages->links() }}
@endsection

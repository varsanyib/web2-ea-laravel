@extends('layouts.app')

@section('content')
<h1>Admin</h1>
<ul>
  <li><a href="{{ route('radios.index') }}">Radios</a></li>
  <li><a href="{{ route('messages.index') }}">Messages</a></li>
  <li><a href="{{ route('diagram') }}">Diagram</a></li>
</ul>
@endsection

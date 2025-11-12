@extends('layouts.app')

@section('content')
@if(session('status'))<div>OK</div>@endif
<form method="post" action="{{ route('contact.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
    @error('name')<div>{{ $message }}</div>@enderror

    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
    @error('email')<div>{{ $message }}</div>@enderror

    <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
    @error('subject')<div>{{ $message }}</div>@enderror

    <textarea name="body" placeholder="Message">{{ old('body') }}</textarea>
    @error('body')<div>{{ $message }}</div>@enderror

    <button type="submit">Send</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">

            <h2 class="mb-4 text-center">Regisztrált felhasználók</h2>

            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Név</th>
                                    <th>Email</th>
                                    <th>Regisztráció dátuma</th>
                                    <th>Módosítás dátuma</th>
                                    <th>Jogosultság</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>{{ $user->updated_at->format('Y-m-d H:i:s') }}</td>
                                        <td>
                                            <span class="badge 
                                                @if($user->role === 'admin') bg-danger
                                                @else bg-secondary
                                                @endif">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">Nincsenek felhasználók.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

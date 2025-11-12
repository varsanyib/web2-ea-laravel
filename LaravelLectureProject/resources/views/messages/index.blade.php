@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title mb-4 text-center">Üzenetek</h3>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover align-middle">
                            <thead style="background-color: #08192d; color: white;">
                                <tr>
                                    <th scope="col">Dátum</th>
                                    <th scope="col">Név</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tárgy</th>
                                    <th scope="col">Üzenet</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($messages as $m)
                                    <tr>
                                        <td>{{ $m->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>{{ $m->name }}</td>
                                        <td>{{ $m->email }}</td>
                                        <td>{{ $m->subject }}</td>
                                        <td>{{ $m->body }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted">Nincsenek üzenetek.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

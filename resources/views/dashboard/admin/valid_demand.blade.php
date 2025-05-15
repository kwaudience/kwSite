@extends('layout.app')

@section('content')
<div class="container py-5">
    <h2 style="text-align: center; text-transform: uppercase; font-size: 2rem; color: orange;
        Gestion des demandes d'adhésion
    </h2>

    {{-- @if(session('message')) --}}
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
    {{-- @endif --}}

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom du Client</th>
                <th>Email</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($demandes as $demande) 
                <tr>
                    <td>{{ $demande->id }}</td>
                    <td>{{ $demande->nom }}</td>
                    <td>{{ $demande->email }}</td>
                    <td>{{ $demande->statut }}</td>
                     <td>
                        <a href="{{ route('gestionclients.action', ['id' => $demande->id, 'action' => 'valider']) }}" class="btn btn-success btn-sm">Valider</a>
                        <a href="{{ route('gestionclients.action', ['id' => $demande->id, 'action' => 'refuser']) }}" class="btn btn-danger btn-sm">Refuser</a>
                        <a href="{{ route('gestionclients.action', ['id' => $demande->id, 'action' => 'supprimer']) }}" class="btn btn-warning btn-sm">Supprimer</a>
                    </td> 
                </tr>
            @endforeach  --}}
        </tbody>
    </table>
</div>
@endsection

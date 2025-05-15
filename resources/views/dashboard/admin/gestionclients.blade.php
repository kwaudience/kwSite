@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4"
        style="color: #f4a422; text-transform:uppercase; font-weight:bold;text-align: center;"
    >
        Demandes d'adhésion en attente
    </h2>

    {{-- @if(count($demandes) > 0) --}}
        <table class="table table-bordered table-striped" style="text-align: center;">
            <thead class="table-dark">
                <tr>
                    <th>Nom du client</th>
                    <th>Service demandé</th>
                    <th>Date de demande</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($demandes as $demande)
                    <tr>
                        <td>{{ $demande->client_nom }}</td>
                        <td>{{ $demande->service }}</td>
                        <td>{{ $demande->date_demande }}</td>
                        <td>
                            <a href="{{ route('demande.action', ['id' => $demande->id, 'action' => 'valider']) }}" class="btn btn-success btn-sm">Valider</a>
                            <a href="{{ route('demande.action', ['id' => $demande->id, 'action' => 'refuser']) }}" class="btn btn-warning btn-sm">Refuser</a>
                            <a href="{{ route('demande.action', ['id' => $demande->id, 'action' => 'supprimer']) }}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    {{-- @else --}}
        <div class="alert alert-info">Aucune demande d'adhésion en attente.</div>
    {{-- @endif --}}
</div>
@endsection

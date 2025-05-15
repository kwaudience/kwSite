@extends('layout.app')

@section('content')
<div class="container mt-5">

    {{-- Messages d’erreur ou de succès --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('erreur'))
        <div class="alert alert-danger">{{ session('erreur') }}</div>
    @endif

    {{-- Confirmation de suppression --}}
    @if(isset($client))
        <div class="card shadow p-4">
            <h4>Voulez-vous vraiment supprimer le client <strong>{{ $client->nom }}</strong> ?</h4>

            <form action="#" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-3">Oui, Supprimer</button>
                <a href="#" class="btn btn-secondary mt-3">Annuler</a>
            </form>
        </div>
    @else
        <div class="alert alert-warning">Le client demandé est introuvable.</div>
    @endif
</div>
@endsection

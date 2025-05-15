@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h3>Annuler un service</h3>

    @if (session('msg'))
        <div class="alert alert-success">
            {{ session('msg') }}
        </div>
    @endif

    <form method="POST" action="#">
        @csrf
        <div class="mb-3">
            <label for="service_name" class="form-label">Nom du service</label>
            <input type="text" name="service_name" id="service_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="raison_annulation" class="form-label">Raison de l'annulation (optionnel)</label>
            <textarea name="raison_annulation" id="raison_annulation" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-danger">Annuler le service</button>
    </form>
</div>
@endsection

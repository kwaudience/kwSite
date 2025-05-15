@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="text-center font-weight-bold text-dark mb-4">Demande d'adhésion - KW Legal & Technologies</h2>

    @if(session('success'))
        <div class="alert alert-success">
            Votre demande a bien été envoyée. Vous serez contacté sous peu.
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            Une erreur est survenue. Veuillez réessayer plus tard.
        </div>
    @elseif(session('error') == 2)
        <div class="alert alert-warning">
            Veuillez sélectionner un service.
        </div>
    @endif

    <form action="#" method="POST">
        @csrf
        <div class="form-group">
            <label for="service">Choisir un service</label>
            <select class="form-control" id="service" name="service">
                <option value="">Sélectionner un service</option>
                <option value="Service 1">Service 1</option>
                <option value="Service 2">Service 2</option>
                <option value="Service 3">Service 3</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Envoyer la demande</button>
    </form>
</div>
@endsection

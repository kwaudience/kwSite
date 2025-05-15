@extends('layout.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Sidebar Menu -->
        <div class="col-md-3">
            <div class="list-group shadow rounded">
                <a href="#" class="list-group-item list-group-item-action">📊 Tableau de bord</a>
                <a href="#" class="list-group-item list-group-item-action">💼 Mes services</a>
                <a href="#" class="list-group-item list-group-item-action">💳 Mes factures</a>
                <a href="#" class="list-group-item list-group-item-action">📝 Demander un service</a>
                <a href="#" class="list-group-item list-group-item-action active bg-warning border-0 text-white">👤 Mon Compte</a>
                <a href="#" class="list-group-item list-group-item-action text-danger">🚪 Se Déconnecter</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="content p-4 rounded-lg shadow-sm">
                <h2 class="mb-4 text-primary">🔐 Espace Client - KW Legal & Technologies</h2>
                <h4 class="mb-3 text-secondary">Souhaitez-vous modifier vos informations ?</h4>

                <!-- Formulaire de modification d'informations -->
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="address" class="form-label">Adresse</label>
                        <input type="text" name="address" id="address" value="{{ old('address', 'Adresse de l\'utilisateur') }}" class="form-control border-primary">
                    </div>

                    <div class="form-group mb-3">
                        <label for="old_password" class="form-label">Ancien mot de passe</label>
                        <input type="password" name="old_password" id="old_password" class="form-control border-primary">
                    </div>

                    <div class="form-group mb-4">
                        <label for="new_password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" name="new_password" id="new_password" class="form-control border-primary">
                    </div>

                    <!-- Button Valider -->
                    <button type="submit" class="btn btn-warning btn-lg w-100" style="font-size: 16px;">
                        Valider
                    </button>

                    <!-- Button Supprimer mon compte -->
                    <a href="#" class="btn btn-outline-danger btn-lg w-100 mt-3" style="font-size: 16px; text-decoration: none;">
                        Supprimer mon compte
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

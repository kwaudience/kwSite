{{-- resources/views/moncompte.blade.php --}}

@extends('layout.app')
@section('content')

<div class="container py-5">
    <div class="row">
        <!-- Sidebar -->

        @include('dashboard.client.content.navbar')

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <h3 class="mb-4 text-primary">🔐 Mon Espace Client</h3>
                    <p class="lead">Souhaitez-vous modifier vos informations ?</p>

                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="address" class="form-label">📍 Adresse</label>
                            <input type="text" name="address" id="address" value="Adresse de l'utilisateur" class="form-control shadow-sm">
                        </div>

                        <div class="mb-3">
                            <label for="old_password" class="form-label">🔑 Ancien mot de passe</label>
                            <input type="password" name="old_password" id="old_password" class="form-control shadow-sm">
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label">🆕 Nouveau mot de passe</label>
                            <input type="password" name="new_password" id="new_password" class="form-control shadow-sm">
                        </div>

                        <div class="d-flex gap-3 mt-4">
                            <button type="submit" class="btn btn-warning text-white px-4">
                                ✅ Valider
                            </button>

                            <a href="#" class="btn btn-outline-danger px-4">
                                🗑️ Supprimer mon compte
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

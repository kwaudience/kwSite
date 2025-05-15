@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="text-center font-weight-bold text-dark mb-4">Espace Client - KW Legal & Technologies</h2>
    <div class="row">
        <!-- Sidebar Menu -->

        @include('dashboard.client.content.navbar')

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="bg-white rounded p-5 shadow-sm">
                <h4 class="mb-3 text-primary font-weight-bold">Résumé de vos services</h4>
                <p class="text-muted mb-4">Voici les services auxquels vous avez actuellement accès :</p>
                <ul class="list-group mb-4">
                    {{-- @foreach($services as $service)
                        <li class="list-group-item">{{ $service }}</li>
                    @endforeach --}}
                </ul>

                <!-- Formulaire d'annulation -->
                <div class="bg-light p-4 rounded mb-4">
                    <h5 class="text-dark font-weight-bold">Demande d'annulation de service</h5>
                    <p class="text-muted">Sélectionnez un service pour l'annulation et expliquez pourquoi vous souhaitez l'annuler.</p>

                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <select name="service_name" class="form-control mb-3 border-primary">
                                <option value="">Choisir un service à annuler</option>
                                {{-- @foreach($services as $service)
                                    <option value="{{ $service }}">{{ $service }}</option>
                                @endforeach --}}

                                {{-- j'ai commenté cette partie parce qu'on a pas encore
                                 codé les autres parties. ça génère une erreur pour le moment  --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="raison_annulation" class="form-control mb-3 border-primary" placeholder="Expliquez pourquoi vous souhaitez annuler ce service (facultatif)" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-warning btn-lg">Soumettre la demande d'annulation</button>
                    </form>
                </div>

                <!-- Bouton "Contacter l’assistance" -->
                <a href="javascript:void(0);" class="btn btn-warning btn-lg" onclick="toggleContactOptions()">Contacter l’assistance</a>

                <!-- Options de contact -->
                <div id="contactOptions" class="mt-4 text-center" style="display: none;">
                    <a href="tel:+2250574724747" class="btn btn-success m-2 btn-lg">📞 Appeler</a>
                    <a href="https://wa.me/2250574724747" target="_blank" class="btn btn-success m-2 btn-lg">💬 WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleContactOptions() {
        var contactOptions = document.getElementById("contactOptions");
        contactOptions.style.display = (contactOptions.style.display === "none" || contactOptions.style.display === "") ? "block" : "none";
    }
</script>
@endsection

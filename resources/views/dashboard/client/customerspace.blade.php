@extends('layout.app')

@section('title', 'Tableau de bord - KW Legal & Technologies')
@section('content')
<div class="container">
    <h2 class="text-center mb-5" style="color: #ff6600; text-transform: uppercase; font-weight:bold;">Tableau de bord - KW Legal & Technologies</h2>
    <div class="row">
        <!-- Sidebar Menu -->
        @include('dashboard.client.content.navbar')
        <!-- Main Content -->
        <div class="col-md-9">
            <h4 class="mb-3" style="color: #333;">🗂️ Résumé de vos services</h4>
            <p>Voici un aperçu de vos services actifs :</p>

            <div class="row mb-4">
                {{-- @foreach($services as $service) --}}
                <div class="col-md-6">
                    <div class="card-service">
                        {{-- <h5>🔹 {{ $service }}</h5> --}}
                        <p>Status : <span class="badge badge-success">Actif</span></p> {{-- {{ $service }}  pour value --}}                                                             {{-- {{ $service }} pour #--}}
                        <button class="btn-annuler" onclick="document.getElementById('service_name').value='#'; document.getElementById('serviceName').innerText='Vous avez sélectionné le service : #';">
                            Demander l’annulation
                        </button>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>

            <!-- Formulaire d'annulation -->
            <div id="annulationForm" class="annulation-form">
                <h5>📩 Demande d'annulation de service</h5>
                <p id="serviceName">Sélectionnez un service à annuler et indiquez votre raison.</p>

                <form action="#" method="POST">
                    @csrf
                    <select name="service_name" id="service_name" class="form-control mb-3">
                        <option value="">-- Choisir un service --</option>
                        {{-- @foreach($services as $service)
                            <option value="{{ $service }}">{{ $service }}</option>
                        @endforeach --}}
                    </select>

                    <textarea name="raison_annulation" class="form-control mb-3" rows="4" placeholder="Expliquez pourquoi vous souhaitez annuler ce service (facultatif)"></textarea>

                    <button type="submit" class="btn-annuler-service">
                        📤 Soumettre la demande
                    </button>
                </form>
            </div>

            <!-- Bouton assistance -->
            <div class="text-center mt-4">
                <a href="javascript:void(0);" class="btn" onclick="toggleContactOptions()">📞 Contacter l’assistance</a>
            </div>

            <!-- Options de contact -->
            <div id="contactOptions" class="contact-options">
                <a href="tel:+2250574724747" class="contact-link">📞 Appeler</a>
                <a href="https://wa.me/2250574724747" target="_blank" class="contact-link">💬 WhatsApp</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function toggleContactOptions() {
    const contactOptions = document.getElementById("contactOptions");
    contactOptions.style.display = contactOptions.style.display === "none" || contactOptions.style.display === "" ? "flex" : "none";
}
</script>
@endsection

@section('styles')
<style>
    body {
        background-color: #f4f6fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container {
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .sidebar {
        flex: 1;
        min-width: 250px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        padding: 20px;
    }
    .sidebar a {
        display: block;
        text-decoration: none;
        color: #333;
        padding: 12px 15px;
        border-radius: 8px;
        margin-bottom: 10px;
        font-weight: 500;
        transition: all 0.3s;
    }
    .sidebar a:hover {
        background-color: #f1f1f1;
    }
    .sidebar a.active {
        background-color: #0061f2;
        color: #fff;
    }
    .logout-btn {
        background-color: #ffecec;
        border: 1px dashed #e74c3c;
        text-align: center;
        font-weight: bold;
        color: #e74c3c;
        padding: 10px;
    }
    .logout-btn:hover {
        background-color: #e74c3c;
        color: white;
    }
    .content {
        flex: 3;
        min-width: 300px;
        background-color: #ffffff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .card-service {
        background-color: #fefefe;
        border: 1px solid #ddd;
        border-left: 6px solid #ff6600;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.03);
        transition: transform 0.2s ease;
    }
    .card-service:hover {
        transform: scale(1.02);
    }
    .card-service h5 {
        margin-bottom: 10px;
        font-weight: 600;
        color: #333;
    }
    .badge-success {
        background-color: #28a745;
        color: white;
        padding: 4px 10px;
        border-radius: 8px;
        font-size: 12px;
    }
    .btn-annuler {
        background-color: transparent;
        color: #dc3545;
        border: 1px solid #dc3545;
        border-radius: 8px;
        padding: 8px 16px;
        font-weight: bold;
        transition: all 0.3s;
        margin-top: 10px;
    }
    .btn-annuler:hover {
        background-color: #dc3545;
        color: white;
    }

    .annulation-form {
        margin-top: 30px;
        padding: 25px;
        background-color: #fefefe;
        border: 1px solid #e1e1e1;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }
    .annulation-form h5 {
        font-size: 18px;
        color: #0061f2;
        margin-bottom: 10px;
    }
    .btn-annuler-service {
        background-color: white;
        color: #df7f12;
        border: 2px solid #df7f12;
        padding: 10px 25px;
        font-size: 16px;
        border-radius: 8px;
        transition: all 0.3s;
    }
    .btn-annuler-service:hover {
        background-color: #df7f12;
        color: white;
    }
    .btn, .contact-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #df7f12;
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        transition: all 0.3s;
    }
    .btn:hover, .contact-link:hover {
        background-color: #fff;
        border: 2px solid #df7f12;
        color: #df7f12;
    }
    .contact-options {
        display: none;
        justify-content: center;
        gap: 20px;
        margin-top: 20px;
    }
</style>
@endsection

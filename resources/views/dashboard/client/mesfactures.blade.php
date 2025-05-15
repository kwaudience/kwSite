@extends('layout.app')

@section('content')
<div class="container">
    <h2 class="text-center font-weight-bold text-dark mb-4">Espace Client - KW Legal & Technologies</h2>
    <div class="row">
        <!-- Sidebar Menu -->

        @include('dashboard.client.content.navbar')

        <!-- Main Content -->
        <div class="content col-md-9">
            <h4 class="content-title">Mes Factures</h4>
            <p>Voici un aperçu de vos factures récentes :</p>
            <ul class="service-list">
                <li><span class="facture-title">Facture 01</span> - 000FCFA - 01/01/1970</li>
                <li><span class="facture-title">Facture 02</span> - 000FCFA - 15/02/1970</li>
                <li><span class="facture-title">Facture 03</span> - 000FCFA - 01/03/1970</li>
            </ul>

            <!-- Bouton "Contacter l’assistance" -->
            <a href="javascript:void(0);" class="btn" onclick="toggleContactOptions()">Contacter l’assistance</a>

            <!-- Options de contact (cachées par défaut) -->
            <div id="contactOptions" class="contact-options" style="display: none; margin-top: 20px; text-align: center;">
                <a href="tel:+2250574724747" class="contact-link">
                    📞 Appeler
                </a>
                <a href="https://wa.me/2250574724747" target="_blank" class="contact-link">
                    💬 WhatsApp
                </a>
            </div>
        </div>
    </div>
</div>

<script>
// Fonction pour afficher/masquer les options de contact
function toggleContactOptions() {
    var contactOptions = document.getElementById("contactOptions");
    if (contactOptions.style.display === "none" || contactOptions.style.display === "") {
        contactOptions.style.display = "block";
    } else {
        contactOptions.style.display = "none";
    }
}
</script>
@endsection

@push('styles')
<style>
/* Style général de la page */
.container {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
    background: linear-gradient(to right, #ffffff, #f4f4f9);
    border-radius: 12px;
}

h2, .content-title {
    font-weight: bold;
    color: #333;
}

.row {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

/* Menu latéral (Sidebar) */
.sidebar {
    flex: 1;
    min-width: 250px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: transform 0.3s ease;
}

.sidebar a {
    display: block;
    text-decoration: none;
    color: #333;
    padding: 12px 15px;
    border-radius: 8px;
    margin-bottom: 10px;
    transition: background-color 0.3s, transform 0.2s;
}

.sidebar a:hover {
    background-color: #f0f0f0;
    transform: scale(1.05);
}

.sidebar a.active {
    background-color: #0061f2;
    color: #fff;
}

.sidebar a.logout-btn {
    color: red;
    text-align: center;
    font-weight: bold;
    border: 2px dashed red;
}

.sidebar a.logout-btn:hover {
    background-color: #c0392b;
    color: white;
}

/* Contenu principal (Content) */
.content {
    flex: 3;
    min-width: 300px;
    background-color: #ffffff;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);
}

.content h4 {
    margin-bottom: 20px;
    font-size: 22px;
    color: #222;
}

.content p {
    color: #666;
    margin-bottom: 20px;
}

.service-list {
    list-style: none;
    padding-left: 0;
    margin-bottom: 30px;
}

.service-list li {
    background-color: #f9f9f9;
    border: 1px solid #e0e0e0;
    padding: 12px 15px;
    margin-bottom: 10px;
    border-radius: 10px;
    font-size: 16px;
    transition: transform 0.2s;
}

.service-list li:hover {
    transform: scale(1.02);
}

.facture-title {
    font-weight: bold;
    color: #0061f2;
}

/* Bouton d’assistance */
.btn {
    display: inline-block;
    padding: 12px 25px;
    background-color: #df7f12;
    color: white;
    text-decoration: none;
    border-radius: 10px;
    transition: background-color 0.3s, transform 0.2s;
}

.btn:hover {
    background-color: #fff;
    color: #df7f12;
    border: solid 1px #df7f12;
    transform: scale(1.05);
}

/* Bouton de déconnexion */
.logout-btn {
    margin-top: auto;
    background-color: #fff;
    font-weight: bold;
}

/* Animation et styles contact */
.contact-options {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.contact-link {
    display: inline-block;
    margin: 10px;
    padding: 12px 25px;
    background-color: #25d366;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-size: 16px;
    transition: background-color 0.3s;
}

.contact-link:hover {
    background-color: #128c7e;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
    .hamburger-menu-mobile {
        display: block;
    }

    .sidebar {
        min-width: 200px;
    }

    .content {
        min-width: 250px;
    }
}
</style>
@endpush

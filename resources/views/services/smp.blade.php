@extends('layout.app')
@section('title', 'Surveillance des menaces')
@section('content')


    <div class="main-imageSC" style=" background-size: cover;">
        <div class="container">
            <h1 class="text-3xl font-semibold text-center" style="color: #ff6600; text-transform: uppercase;" ><span>Surveillance des menaces</span></h1>
        </div>
    </div>
    <br>
    <section class="service-section">
        <div class="service-container">
            <div class="grid-layout">
                <div class="service-card">
                    <i class="fas fa-shield-alt icon"></i> <!-- Icône Font Awesome -->
                    <h3 >Protection avancée</h3>
                    <p >Surveillez les menaces et protégez vos systèmes contre les attaques.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-user-shield icon"></i> <!-- Icône Font Awesome -->
                    <h3 >Gestion des utilisateurs</h3>
                    <p >Identifiez les activités suspectes en temps réel sur votre réseau.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-lock icon"></i> <!-- Icône Font Awesome -->
                    <h3 >Sécurisation des données</h3>
                    <p >Protégez les données sensibles et assurez-vous qu'elles ne sont pas exposées.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-eye icon"></i> <!-- Icône Font Awesome -->
                    <h3 >Surveillance constante</h3>
                    <p >Gardez un œil constant sur les systèmes pour prévenir toute tentative de piratage.</p>
                </div>
            </div>
        </div>
    </section>

@endsection

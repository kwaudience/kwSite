@extends('layout.app')
@section('title', 'GESTION DES ACCES ET SECURITE')
@section('content')

    <div class="main-imageGA" >
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-semibold text-center" style="color: #ff6600"><span>GESTION DES ACCES ET SECURITE</span></h1>
        </div>
    </div>

    <div class="border-t-2 border-dashed border-black my-6"></div>

    <section class="service-section">
        <div class="service-container">
            <div class="grid-layout">
                <div class="service-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Authentification multi-facteurs</h3>
                    <p>Sécurisez les connexions avec une double vérification.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-user-shield"></i>
                    <h3>Gestion des identités et des accès</h3>
                    <p>Assurez-vous que seules les bonnes personnes ont accès aux bonnes ressources.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-lock"></i>
                    <h3>Contrôle des privilèges</h3>
                    <p>Limitez l'accès aux données sensibles en fonction des rôles et des responsabilités.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-key"></i>
                    <h3>Chiffrement des données</h3>
                    <p>Sécurisez vos informations contre tout accès non autorisé.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-file-alt"></i>
                    <h3>Audit et journalisation</h3>
                    <p>Suivez et enregistrez toutes les connexions pour une meilleure traçabilité.</p>
                </div>
            </div>
        </p></div>
    </section>
@endsection

@extends('layout.app')

@section('content')
<div class="main-imageA">
    <div class="container">
        <h1 style="color: #ff6600; text-transform: uppercase;"><span>Architecture réseau</span></h1>
    </div>
</div>

<section class="service-section">
    <div class="service-container">
        <div class="grid-layout">
            <div class="service-card">
                <i class="fas fa-network-wired "></i>
                <h3>Conception et déploiement d’infrastructures réseau</h3>
                <p>La conception et le déploiement d’infrastructures réseau consistent à planifier et installer les équipements et services nécessaires pour assurer une connectivité efficace et sécurisée au sein d’un système informatique.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-shield-alt "></i>
                <h3>Sécurisation des infrastructures réseau</h3>
                <p>La sécurisation des infrastructures réseau consiste à mettre en place des mesures techniques et organisationnelles pour protéger le réseau contre les accès non autorisés, les attaques et les pertes de données.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-cloud-upload-alt "></i>
                <h3>Virtualisation et Cloud Networking</h3>
                <p>La virtualisation et le cloud networking consistent à utiliser des technologies permettant de créer des réseaux virtuels et de gérer des ressources à distance via le cloud, afin d’optimiser la flexibilité, l’évolutivité et la gestion des infrastructures informatiques.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-cogs "></i>
                <h3>Administration et supervision réseau</h3>
                <p>L’administration et la supervision réseau consistent à gérer, surveiller et maintenir les performances, la sécurité et la disponibilité des équipements et services réseau d’une organisation.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-plug fa-2x  mb-3"></i>
                <h3>Solutions de connectivité avancées</h3>
                <p>Les solutions de connectivité avancées désignent l’ensemble des technologies et méthodes permettant d’assurer une communication rapide, fiable et sécurisée entre différents systèmes, sites ou appareils, souvent via des réseaux haut débit, des VPN ou des technologies sans fil innovantes.</p>
            </div>

            <div class="service-card">
                <i class="fas fa-search fa-2x  mb-3"></i>
                <h3>Audit et conseil en architecture réseau</h3>
                <p>L’audit et le conseil en architecture réseau consistent à analyser l’existant, identifier les faiblesses et proposer des solutions adaptées pour optimiser la performance, la sécurité et la scalabilité des infrastructures réseau.</p>
            </div>
        </div>
    </div>
</section>
@endsection

{{-- Cette page est entière responsive --}}

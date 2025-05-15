@extends('layout.app')
@section('title', 'Intégration Web et Mobile Performante')
@section('content')
<style>
    @media (min-width: 768px) {
        .main-imageIW h1 {
            font-size: 3rem;
        }
    }


    .service-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 640px) {
        .service-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .service-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }


</style>

<div class="main-imageIW" style="background: url('{{ asset('images/l.jpg') }}') no-repeat center center / cover;">
    <div class="container" >
        <h1 style="text-transform: uppercase; color: #ff6600;" ><span>Intégration web et mobile performante</span></h1>
    </div>
</div>

<section class="service-section">
    <div class="service-container">
        <div class="grid-layout">
            <div class="service-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Développement responsive et mobile-first</h3>
                <p>Assurez-vous que votre site s’adapte parfaitement à tous les écrans, du smartphone à l’ordinateur, pour une navigation intuitive.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-cogs"></i>
                <h3>Progressive Web Apps (PWA)</h3>
                <p>Alliez le meilleur du web et du mobile avec des applications rapides, accessibles hors ligne et sans installation.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-plug"></i>
                <h3>Intégration d’API et services tiers</h3>
                <p>Connectez vos outils (CRM, ERP, systèmes de paiement) pour une gestion simplifiée et une automatisation optimale.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-tachometer-alt"></i>
                <h3>Optimisation des performances et UX/UI</h3>
                <p>Améliorez la vitesse de chargement et l’expérience utilisateur avec des designs modernes et ergonomiques.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-lock"></i>
                <h3>Sécurité et conformité</h3>
                <p>Protégez vos données et respectez les règlementations en vigueur pour garantir la sécurité de vos utilisateurs.</p>
            </div>
        </div>

    </div>
</section>
@endsection

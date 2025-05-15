@extends('layout.app')
@section('title', 'Conseil et droit numérique')
@section('content')
    <div class="main-imageD">
        <div class="container">
            <h1 style="text-transform: uppercase; color: #ff6600;"><span>Conseil et droit numérique</span></h1>
        </div>
    </div>
    <section class="service-section">
        <div class="service-container">
            <div class="service-grid">
                <div class="service-card">
                    <i class="fas fa-search service-icon"></i> <!-- Icône pour audit de conformité -->
                    <h3>Audit de conformité</h3>
                    <p>Nous évaluons votre conformité aux règlementations sur la protection des données et vous aidons à respecter les lois en vigueur.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-scroll service-icon"></i> <!-- Icône pour rédaction de documents -->
                    <h3>Rédaction et mise à jour de documents</h3>
                    <p>Élaboration et mise à jour des politiques de confidentialité, CGU/CGV et autres documents juridiques essentiels.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-shield-alt service-icon"></i> <!-- Icône pour conseil en cybersécurité -->
                    <h3>Conseil en cybersécurité</h3>
                    <p>Accompagnement dans la gestion des risques juridiques liés à la cybersécurité et aux violations de données.</p>
                </div>
            </div>
            <br>
            <div class="service-grid2">
                <div class="service-card">
                    <i class="fas fa-balance-scale service-icon"></i> <!-- Icône pour gestion des litiges numériques -->
                    <h3>Gestion des litiges numériques</h3>
                    <p>Assistance juridique en cas de contentieux numérique et protection de vos intérêts en ligne.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-graduation-cap service-icon"></i> <!-- Icône pour formation et sensibilisation -->
                    <h3>Formation et sensibilisation</h3>
                    <p>Ateliers et sessions de formation pour sensibiliser vos équipes aux enjeux du droit numérique et des bonnes pratiques.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

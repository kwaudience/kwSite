@extends('layout.app')

@section('title', 'Formation en Cybersécurité')
@section('content')
    <style>
        .main-imageF {
            padding: 100px 0;
            text-align: center;
            color: white;
        }

        .main-imageF h1 span {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px 20px;
            font-size: 36px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 10px;
        }

        .service-section {
            padding: 2px 20px;
            background-color: white;
        }

        .service-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .service-title {
            font-size: 28px;
            text-align: center;
            color: #ff6600;
            text-transform: uppercase;
            font-weight: bold;
            margin-bottom: 30px;
        }




        @media (max-width: 768px) {
            .main-imageF h1 span {
                font-size: 24px;
            }

            .service-title {
                font-size: 24px;
            }
        }
    </style>

    <div class="main-imageF" >
        <div class="container">
            <h1 class="text-3xl font-semibold text-center" style="color: #ff6600"><span>Formation en Cybersécurité</span></h1>
        </div>
    </div>
    <br>
    <section class="service-section">
        <div class="service-container">
            <div class="grid-layout">
                <div class="service-card">
                    <i class="fas fa-shield-alt"></i>
                    <h3>Introduction à la cybersécurité</h3>
                    <p>Apprenez les bases essentielles pour comprendre la cybersécurité.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-lock"></i>
                    <h3>Gestion des risques</h3>
                    <p>Identifiez et gérez les risques de cybersécurité dans votre entreprise.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-users-cog"></i>
                    <h3>Protection des données</h3>
                    <p>Maîtrisez les méthodes de protection des données sensibles.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-network-wired"></i>
                    <h3>Sécurisation des réseaux</h3>
                    <p>Apprenez à protéger vos réseaux contre les menaces externes et internes.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-file-alt"></i>
                    <h3>Audit de sécurité</h3>
                    <p>Réalisez des audits pour identifier les vulnérabilités dans votre système.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

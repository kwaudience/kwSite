@extends('layout.app')
@section('title', 'Développement Web')

@section('content')
    <main>
        <div class="main-imagedW" >
            <div class="container">
                <h1 style=" text-transform:uppercase;  color: #ff6600" ><span>Développement de site web et solutions informatiques sur mesure</span></h1>
            </div>
        </div>
        <br>
        <section class="service-section">
            <div class="service-container ">
                <!-- SECTION EN GRILLE JOLIE -->
                <div class="grid-layout">
                    {{-- div 1 --}}
                    <div class="service-card">
                        <i class="fas fa-shield-alt"></i>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Applications web et mobiles</h3>
                        <p class="text-gray-600 text-sm">Développez des outils puissants pour interagir avec vos clients et automatiser vos opérations.</p>
                    </div>

                    {{-- div 2 --}}
                    <div class="service-card">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Solutions cloud et hébergement</h3>
                        <p class="text-gray-600 text-sm">Stockage sécurisé, déploiement sur AWS, Azure ou Google Cloud.</p>
                    </div>

                    {{-- div 3 --}}
                    <div class="service-card">
                        <img src="{{asset('images/icons/ecommerce2.png')}}" alt="" srcset="" height="50px" width="50px" style="text-decoration: #ff6600">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Plateformes e-commerce</h3>
                        <p class="text-gray-600 text-sm">Sites de vente en ligne performants et sécurisés, avec paiements intégrés.</p>
                    </div>
                    {{-- div 4 --}}
                    <div class="service-card">
                        <img src="{{asset('images/icons/software-development.png')}}" alt="" srcset="" height="50px" width="50px" style="text-decoration: #ff6600">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Logiciels métiers personnalisés</h3>
                        <p class="text-gray-600 text-sm">CRM, ERP, gestion RH… Des solutions adaptées à votre activité.</p>
                    </div>
                    <!-- FIN DE LA SECTION EN GRILLE JOLIE -->
                </div>

            </div>
        </section>
    </main>
@endsection


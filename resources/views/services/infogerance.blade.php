@extends('layout.app')
@section('title', 'Infogérance')
@section('content')

<section class="service-section">
    <div class="main-imageIF" >
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-semibold text-center" style="text-transform: uppercase; color: #ff6600;"><span>Infogérance : Optimisez la gestion de votre système informatique</span></h1>
        </div>
    </div>
    <div class="service-section">
        <div class="service-container">
            <div class="grid-layout">
                <div class="service-card">
                    <i class="fas fa-clock  text-3xl mb-4"></i>
                    <h3 class="font-semibold mb-2">Un gain de temps et d’efficacité</h3>
                    <p>Nous surveillons et optimisons votre système en temps réel pour garantir une continuité optimale.</p>
                </div>
                <div class="service-card">
                    <i class="fas fa-shield-alt text-blue-600 text-3xl mb-4"></i>
                    <h3 class="font-semibold mb-2">Sécurité renforcée</h3>
                    <p>Des solutions avancées pour protéger vos données contre les cyberattaques et garantir leur sécurité.</p>
                </div>

                <div class="service-card">
                    <i class="fas fa-coins text-blue-600 text-3xl mb-4"></i>
                    <h3 class="font-semibold mb-2">Réduction des coûts</h3>
                    <p>Évitez les investissements lourds en infrastructure tout en profitant d'une expertise de pointe.</p>
                </div>

                <div class="service-card">
                    <i class="fas fa-user-cog text-blue-600 text-3xl mb-4"></i>
                    <h3 class="font-semibold mb-2">Informaticiens sur site</h3>
                    <p>Nos experts interviennent directement dans vos locaux pour une assistance personnalisée.</p>
                </div>

                <div class="service-card">
                        <i class="fas fa-arrow-up text-blue-600 text-3xl mb-4"></i>
                    <h3 class="font-semibold mb-2">Évolution technologique</h3>
                    <p>Nous vous conseillons sur les dernières innovations pour faire évoluer votre infrastructure.</p>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>
@endsection
{{--
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('toggle-btn');
        const content = document.getElementById('more-content');

        btn.addEventListener('click', function () {
            content.classList.toggle('hidden');
            btn.textContent = content.classList.contains('hidden') ? 'Voir plus' : 'Voir moins';
        });
    });
</script>
@endpush --}}

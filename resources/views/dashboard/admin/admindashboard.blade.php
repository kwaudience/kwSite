@extends('layout.app')

@section('content')
<section class="admin-dashboard">
    <div class="dashboard-container">
        <h1 style="text-align:center;
            text-transform:uppercase;
            font-size:2.5rem;
            color : rgb(223, 115, 21)
        ">
            Tableau de bord Administrateur
        </h1>

        <div class="dashboard-cards">
            <!-- Bloc 1 : Liste des Clients -->
            <a href="{{route('dashboard.gestionclients')}}" class="dashboard-card">
                <div class="icon-wrapper">
                    <i class="fas fa-users"></i>
                </div>
                <h2>Liste des Clients</h2>
                <p>Consultez tous les clients enregistrés.</p>
            </a>

            <!-- Bloc 2 : Gérer les Clients -->
            <a href="{{route('dashboard.gestionclients2')}}" class="dashboard-card">
                <div class="icon-wrapper">
                    <i class="fas fa-cogs"></i>
                </div>
                <h2>Gérer les Clients</h2>
                <p>Gérez les demandes de services et les services actifs.</p>
            </a>
        </div>
    </div>
</section>

{{-- Style local optionnel --}}
<style>
.admin-dashboard {
    padding: 40px 20px;
    background: #f5f5f5;
    min-height: 100vh;
}

.dashboard-container {
    max-width: 1000px;
    margin: auto;
}

.dashboard-cards {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 40px;
}

.dashboard-card {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    width: 300px;
    padding: 25px;
    text-align: center;
    color: #333;
    text-decoration: none;
    transition: transform 0.3s ease;
}

.dashboard-card:hover {
    transform: translateY(-5px);
}

.icon-wrapper {
    font-size: 40px;
    margin-bottom: 15px;
    color: #007bff;
}
</style>
@endsection

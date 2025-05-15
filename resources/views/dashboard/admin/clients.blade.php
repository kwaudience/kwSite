@extends('layout.app')

@section('content')
<style>
    .container {
        /* max-width: 900px; */
        margin: 10px auto;
        padding: 20px;
        /* background: white; */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: left;
    }

    thead {
        background: #343a40;
        color: white;
    }

    tr:hover {
        background: #f2f2f2;
    }

    .btn {
        padding: 6px 12px;
        border-radius: 4px;
        text-decoration: none;
        font-size: 14px;
    }

    .btn-warning { background: #ffc107; color: #000; }
    .btn-danger { background: #dc3545; color: #fff; }
    .btn-success { background: #28a745; color: #fff; display: inline-block; margin-top: 20px; }

    .alert {
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }

    .alert-info {
        background: #e7f3ff;
        color: #31708f;
    }
</style>

<div class="container">
    <h2>Liste des Clients</h2>

    @if(empty($clients))
        <div class="alert alert-info">Aucun client inscrit pour le moment.</div>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client['id'] }}</td>
                        <td>{{ $client['nom'] }}</td>
                        <td>{{ $client['email'] }}</td>
                        <td>{{ $client['date_inscription'] }}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Modifier</a>
                            <a href="#" class="btn btn-danger" onclick="return confirm('Supprimer ce client ?');">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="#" class="btn btn-success">Ajouter un client</a>
</div>
@endsection

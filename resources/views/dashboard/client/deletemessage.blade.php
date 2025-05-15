@extends('layout.app')

@section('content')
<div class="container">
    <h2>Liste des messages</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Contenu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($messages as $message) --}}
            <tr>
                {{-- <td>{{ $message->contenu }}</td> --}}
                <td>
                    <a href="#" class="btn btn-danger btn-sm"
                       onclick="return confirm('Voulez-vous vraiment supprimer ce message ?');">
                        Supprimer
                    </a>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
@endsection

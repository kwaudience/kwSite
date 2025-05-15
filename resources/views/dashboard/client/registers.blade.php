@extends('layout.app')

@section('content')
<div class="container">
  <div class="login-container">
    <h2 class="text-center mb-4" style="color: #ff6600;">INSCRIPTION</h2>

    {{-- Début du formulaire --}}
    <form action="{{ route('client.register.store') }}" method="POST">
        @csrf

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="mb-3">
            <label for="name" class="form-label ">Nom :</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label ">Adresse Email :</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone" class="form-label ">Téléphone :</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="0102030405" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label ">Adresse :</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Entrez votre adresse" required>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="city" class="form-label ">Ville :</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Entrez votre ville" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="postal_code" class="form-label ">Code Postal :</label>
                <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Entrez votre code postal" required>
            </div>
        </div>

        <div class="mb-3">
            <label for="country" class="form-label ">Pays :</label>
            <input class="form-control" list="countries" id="country" name="country" placeholder="Entrez ou sélectionnez votre pays" required>
            <datalist id="countries">
                <option value="Bénin">
                <option value="Burkina Faso">
                <option value="Côte d'Ivoire">
                <option value="Ghana">
                <option value="Guinée">
                <option value="Cameroun">
                <option value="Mali">
                <option value="Sénégal">
                <option value="Sierra Leone">
                <option value="Togo">
            </datalist>
        </div>


        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label ">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="password_confirmation" class="form-label ">Confirmer le mot de passe :</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
            </div>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label " for="remember">Se souvenir de moi</label>
        </div>

        <button type="submit" class="btn w-100" style="background-color: #ff6600;color: white;">S'INSCRIRE</button>

        <div class="text-center mt-3">
            <a href="#" class="">Mot de passe oublié ?</a>
        </div>
        <div class="text-center mt-3">
            <a href="{{route('auth.login')}}">SE CONNECTER</a>
        </div>
    </form>
    {{-- Fin du formulaire --}}
  </div>
</div>

<style>
  .login-container {
    color: black;
    max-width: 600px;
    margin: 80px auto;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 10px 10px 0px rgba(0, 0, 0, 0.1);
  }

  .form-label {
    font-weight: bold;
  }

  input::placeholder {
    font-style: italic;
  }

  .btn {
    font-weight: bold;
    font-size: 16px;
  }
</style>
@endsection

@extends('layout.app')

@section('content')
<div class="container">
  <div class="login-container">
    <h2 class="text-center mb-4" style="color: #ff6600">CONNEXION</h2>
    <form action="{{route('auth.connexion')}}" method="POST">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->has('email'))
            <div class="alert alert-danger">
                {{ $errors->first('email') }}
            </div>
        @endif
        @if ($errors->has('password'))
            <div class="alert alert-danger">
                {{ $errors->first('password') }}
            </div>
        @endif


        <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
        </div>

        <button type="submit" class="btn w-100" style="background-color: #ff6600;color: white;">
            Se connecter
        </button>
        <div class="text-center mt-3">
            <a href="#">Mot de passe oublié ?</a>
        </div>
        <div class="text-center mt-3">
            <a href="{{route('client.register.index')}}">S'Inscrire</a>
        </div>
    </form>
  </div>
</div>

<style>
    .login-container {
        color: black;
        max-width: 400px;
        margin: 100px auto;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 10px 10px 0px rgba(0.1,0.1,0,0.1);
    }
    .container{
        position: relative;
        top: 40%;
        left: 0%;
        transform: translate(-50% -50%);
        text-align: center;
        font-weight: 700;
        /* text-transform: uppercase; */
    }
</style>
@endsection

<!-- resources/views/contact.blade.php -->
@extends('layout.app')

@section('title', 'Contactez-nous')

@section('content')
<style>
    .card1{
        margin: 15px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.7);
    }

    .form-label{
        color: black;
    }

    .main-imageDW {
        background-image: url(../images/contact.jpg); /* Ajoutez l'image de fond ici */
        background-size: cover;
        background-position: center;
        padding: 60px 0;
        height: 500px;
        color: white; /* Texte en blanc sur fond sombre */
    }
</style>
<section class="contact-section">
    <div class="main-imageDW" >
        <div class="container">
            <h1 style="color: #ff6600" ><span>CONTACTEZ-NOUS</span></h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="card1 col-md-4 p-4 rounded">
                <form action="https://kwlegaltech.com/contact/sendEmail" method="POST">
                    @csrf
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
                    </div>

                    <div class="mb-3">
                        <label for="objet" class="form-label">Objet</label>
                        <input type="text" class="form-control" id="objet" name="objet" placeholder="Objet de votre message">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message"></textarea>
                    </div>

                    <button type="submit" class="btn" style="font-size: 1.1rem; color: white; background-color: #ff6600;">Envoyer</button>
                </form>
            </div>

            <div class=" card1 col-md-6 p-4 rounded" >
                <h2 class="mb-4" style="text-align: center; color: #ff6600;">Notre localisation </h2>
                <!-- Carte Google Maps -->
                <div class="mb-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3972.164709597326!2d-3.959839125016037!3d5.391853794587179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjMnMzAuNyJOIDPCsDU3JzI2LjIiVw!5e0!3m2!1sfr!2sci!4v1744561830777!5m2!1sfr!2sci"
                            width="100%"
                            height="350"
                            style="border:0; overflow: hidden;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                {{-- Les liens vers Facebook, Instagram et LinkedIn --}}
                <div class="mb-3">
                    <a href="https://www.facebook.com/share/1AUB3p5Tko/?mibextid=wwXIfr"  class="text-decoration-none me-3 mb-3 d-inline-block" target="_blank">
                        <i class="bi bi-facebook" style="font-size: 1.5rem; color:#ff6600;"></i>
                    </a>

                    <a href="https://www.linkedin.com/company/kw-legal-technologie/" class="text-decoration-none mb-3 d-inline-block" target="_blank">
                        <i class="bi bi-linkedin" style="font-size: 1.5rem; color:#ff6600;"></i>
                    </a>
                </div>
                {{-- Fin d'insertion des icônes --}}
                <div style="color: black">

                    <p><i class="bi bi-telephone-fill" style="color:#ff6600;"></i> <strong>Téléphone :</strong> <a href="tel:+2250574724747" style="color: black">+225 05 74 72 47 47</a>  </p>
                    <p><i class="bi bi-envelope-fill" style="color:#ff6600;"></i> <strong>Email :</strong> <a href="mailto:contact@kwlegaltech.com" style="color: black">contact@kwlegaltech.com</a></p>
                    <p><i class="bi bi-geo-alt-fill" style="color:#ff6600;"></i> <strong>Adresse :</strong> <a href="https://maps.app.goo.gl/QZxSXPPSYwyKFYNG7" style="color: black" target="_blank">Abidjan, Côte d'Ivoire</a></p>
                </div>
            </div>
        </div>
    </div>

 @endsection

<footer class="bg-dark text-white text-center text-md-start py-4 mt-5" style="background-color: #020000;">
    <div class="container">
      <div class="row g-4">
        <!-- À propos -->
        <div class="col-12 col-md-4">
          <h5 class="text-uppercase fw-bold" style="color:#ff6600; text-align:center;">À propos</h5>
          <p class="text-justify small" style="text-align:justify;">
            Nous sommes une entreprise ivoirienne spécialisée dans les services numériques,
            offrant des solutions sur mesure dans divers domaines pour répondre aux défis
            technologiques actuels.
          </p>
        </div>

        <!-- Liens utiles -->
        <div class="col-12 col-md-4">
          <h5 class="text-uppercase fw-bold" style="color:#ff6600;text-align:center;">Liens utiles</h5>
          <ul class="list-unstyled small">
            <li style="text-align:center;"><a href="{{route('index')}}" class="text-white d-block py-1">Accueil</a></li>
            <li style="text-align:center;"><a href="{{route('actualite')}}" class="text-white d-block py-1">Actualités</a></li>
            <li style="text-align:center;"><a href="{{route('equipe')}}" class="text-white d-block py-1">Notre equipe</a></li>
            <li style="text-align:center;"><a href="{{route('contact')}}" class="text-white d-block py-1">Contact</a></li>
          </ul>
        </div>

        <!-- Contacts -->
        <div class="col-12 col-md-4">
          <h5 class="text-uppercase fw-bold" style="color:#ff6600; "> &nbsp &nbsp &nbsp &nbsp Contacts</h5>
          <p class="text-justify small mb-1">
            <i class="bi bi-telephone-fill me-2" style="color:#ff6600;"></i><strong>Téléphone :</strong> <a href="tel:+2250574724747" style="color: white">+225 05 74 72 47 47</a>
          </p>
          <p class="text-justify small mb-1">
            <i class="bi bi-envelope-fill me-2" style="color:#ff6600;"></i><strong>Email :</strong> <a href="mailto:contact@kwlegaltech.com" style="color: white">contact@kwlegaltech.com</a></p>
          </p>
          <p class="text-justify small">
            <i class="bi bi-geo-alt-fill me-2" style="color:#ff6600;"></i><strong>Adresse :</strong> <a href="https://maps.app.goo.gl/QZxSXPPSYwyKFYNG7" target="_blank" style="color: white">Abidjan, Côte d'Ivoire</a>
          </p>
        </div>
      </div>

      <hr class="my-4" style="border-top: 2px dotted #e0800b;">

      <div class="text-center small">
        &copy; {{ date('Y') }} KW Legal & Technologie | Tous droits réservés &reg;
      </div>
    </div>
  </footer>

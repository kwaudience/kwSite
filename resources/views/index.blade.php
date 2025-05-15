@extends('layout.app')

@section('title', 'KW Legal & Technologie - Droit Numérique & Informatique')

@section('css')
    <!-- CSS spécifique intégré avec media queries -->
    <style>


        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        /* Media Queries pour Responsive */
        @media screen and (max-width: 768px) {

            .paragraphe-mobile p {
                font-size: 14px !important;
            }
            .cta-services h2 {
                font-size: 25px !important;
                text-align: center;
            }
            .icone-localisation p {
                font-size: xx-large !important;
                margin-left: 0;
            }
            .profile-container {
                flex-direction: column !important;
                align-items: center !important;
            }
        }

        @media screen and (max-width: 768px) {
            .typewriter {
                font-size: 24px;
            }
            .carrousel .card {
                margin: 0 5px !important;
            }
            .cta-services h2 {
                font-size: 22px;
            }
        }

        #videoContainer {
            position: relative;
        }



    </style>
@endsection

@section('content')
<!-- Le contenu reste identique -->

<!-- SECTION HERO  -->
    <section>
        <!-- presentation de l'entreprise -->
        <main>
            <section class="accueil container my-5">
                <div class="row">
                    <!-- Section texte -->
                    <div class="col-12 col-md-6  texte">
                        <div class="titre-mobile">
                            <h2 style="color:#ff6600; text-align:center;">BIENVENUE CHEZ KW<br>LEGAL & TECHNOLOGIE</h2>
                        </div>
                        <div class="paragraphe-mobile">
                            <p class="lead" style="font-size: 15px; text-align: justify; color: black;">
                                KW LEGAL & TECHNOLOGIE est une entreprise innovante spécialisée dans les solutions technologiques avancées.
                                Nous proposons des produits et services performants, fiables et accessibles, en mettant l’humain au centre
                                de notre démarche. Grâce à une équipe d’experts en droit numérique, technologies et gestion de projet, nous
                                offrons des solutions adaptées aux enjeux légaux du monde numérique, accompagnant nos clients de l’analyse
                                de leurs besoins à la mise en œuvre de solutions durables.
                            </p>
                        </div>
                    </div>
                    <!-- Section vidéo -->
                    <div class="video shadow-sm position-relative col-12 col-md-6" id="videoContainer">
                        {{-- <div class="video shadow-sm position-relative" style="background-color: black;"> --}}
                          <video id="maVideo" width="100%" height="240" preload="auto" playsinline>
                            <source src="{{ asset('videos/kw.mp4') }}" type="video/mp4">
                            Votre navigateur ne supporte pas les vidéos HTML5.
                          </video>

                          <button id="playButton" aria-label="Lire / Pause">
                            <svg id="playIcon" viewBox="0 0 24 24">
                              <path d="M8 5v14l11-7z" />
                            </svg>
                          </button>
                        {{-- </div> --}}
                    </div>
                </div>
            </section>
        </main>
        <section class="services">
            <div class="cta-services">
                <h2 class="cta">NOS SERVICES</h2>
            </div>
            <div class="icone-localisation">
                <p style="text-align: justify; font-size: xxx-large;">
                    <a target="_blank" href="https://maps.app.goo.gl/o6LLJpEfjpGy3ZYE8"><i class="bi bi-geo-alt-fill" style="color:#ff6600; margin-left:50px;"></i></a>
                </p>
            </div>
            <div class="carrousel">
                <button class="nav left" id="prevBtn">&#10094;</button>
                <div class="cards-container" id="carrousel">
                    <div class="card">
                        <h3>CYBER SÉCURITÉ </h3>
                        <p>Nous mettons en place des solutions de sécurité pour protéger vos données, systèmes et utilisateurs.</p>
                    </div>
                    <div class="card">
                        <h3>DÉVELOPPEMENT DE SITE</h3>
                        <p>Nous concevons des sites web adaptés à vos besoins, avec des fonctionnalités modernes et une sécurité renforcée.</p>
                    </div>
                    <div class="card">
                        <h3>FORMATION NUMÉRIQUE</h3>
                        <p>Nous offrons des formations pour préparer vos équipes aux enjeux numériques actuels.</p>
                    </div>
                </div>
                <button class="nav right" id="nextBtn">&#10095;</button>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <img src="images/actualite.jpg" alt="News Image" class="news-img" />
            </div>
            <div class="texte-section">
                <h2 class="sous-titre">DECOUVREZ ICI TOUT CE QUE NOUS AVONS ACCOMPLI.</h2>
                <p class="description">
                    <a href="{{route('actualite')}}">PLONGÉE DANS LES PROFONDEURS DU DARK WEB…</a><br/>
                    <a href="{{route('actualite')}}">Lire plus</a>
                </p>
            </div>
        </section>
        <br><br>
        <section>
            <div class="cta-services">
                <h2 class="cta">NOTRE EQUIPE</h2>
            </div>
            <div class="profile-container" style="margin-top: 60px;">
                <!-- 3 cartes profils -->
                @foreach ([
                    ['img' => 'images/equipe/person3.jpg', 'nom' => 'Lionel WILSON', 'poste' => 'Associé', 'titre' => 'Expert en transformation numérique', 'email' => 'lwilson@kwlegaltech.com', 'linkedin' => 'https://www.linkedin.com/in/lionel-wilson/'],
                    ['img' => 'images/equipe/person2.jpg', 'nom' => 'Valencia KONAN', 'poste' => 'Associée Gérante', 'titre' => 'Experte en Droit Numérique', 'email' => 'vkonan@kwlegaltech.com', 'linkedin' => 'https://www.linkedin.com/in/marie-ange-valencia-konan-178420153/'],
                    ['img' => 'images/equipe/person1.jpg', 'nom' => 'Alexandre KOFFI', 'poste' => 'Associé', 'titre' => 'Expert en cybersécurité', 'email' => 'akoffi@kwlegaltech.com', 'linkedin' => 'https://www.linkedin.com/company/kw-legal-technologie/']
                ] as $membre)
                    <div class="profile-card">
                        <div class="content">
                            <div class="img"><img src="{{ $membre['img'] }}" alt="{{ $membre['nom'] }}"></div>
                            <div class="cardContent">
                                <h3>{{ $membre['nom'] }}<span><br><b>{{ $membre['poste'] }}</b>,{{ $membre['titre'] }}</span></h3>
                            </div>
                        </div>
                        <ul class="sci">
                            <li style="--i:1"><a href="https://www.facebook.com/share/1AUB3p5Tko/?mibextid=wwXIfr" target="_blank"><i class="bi bi-facebook"></i></a></li>
                            <li style="--i:2"><a href="mailto:{{ $membre['email'] }}" target="_blank"><i class="bi bi-envelope-open "></i></a></li>
                            <li style="--i:3"><a href="{{ $membre['linkedin'] }}" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let items = document.querySelectorAll('.carrousel .card');
        let next = document.getElementById('nextBtn');
        let prev = document.getElementById('prevBtn');
        const carousel = document.getElementById("carrousel");

        let active = 1;

        function loadShow(){
            if (!items[active]) return;
            const offset = items[active].offsetWidth * active;
            carousel.scrollTo({ left: offset, behavior: "smooth" });

            items.forEach((item, index) => {
                item.style.transform = (index === active) ? 'scale(1.1)' : 'scale(1)';
                item.style.zIndex = (index === active) ? '2' : '1';
                item.style.boxShadow = (index === active) ? '0 10px 5px rgba(0, 0, 0, 0.3)' : 'none';
            });
        }

        loadShow();

        next.onclick = () => { active = (active + 1) % items.length; loadShow(); };
        prev.onclick = () => { active = (active - 1 + items.length) % items.length; loadShow(); };
        window.addEventListener("resize", loadShow);
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
      const video = document.getElementById("maVideo");
      const playButton = document.getElementById("playButton");
      const playIcon = document.getElementById("playIcon");
      const container = document.getElementById("videoContainer");

      const svgPlay = `<path d="M8 5v14l11-7z" />`;
      const svgPause = `<path d="M6 5h4v14H6zm8 0h4v14h-4z" />`;

      let hasPlayed = false;

      function toggleLecture() {
        if (video.paused || video.ended) {
          video.muted = false;

          // Auto-play peut être bloqué → interaction utilisateur indispensable
          video.play().then(() => {
            container.classList.add("lecture");
            playIcon.innerHTML = svgPause;
            hasPlayed = true;
          }).catch(err => {
            console.log("Erreur de lecture :", err);
          });
        } else {
          video.pause();
          playIcon.innerHTML = svgPlay;
        }
      }

      playButton.addEventListener("click", (e) => {
        e.stopPropagation();
        toggleLecture();
      });

      video.addEventListener("click", () => {
        toggleLecture();
      });

      video.addEventListener("play", () => {
        container.classList.add("lecture");
        playIcon.innerHTML = svgPause;
      });

      video.addEventListener("pause", () => {
        container.classList.remove("lecture");
        playIcon.innerHTML = svgPlay;
      });

      video.addEventListener("ended", () => {
        container.classList.remove("lecture");
        playIcon.innerHTML = svgPlay;
      });

      // Empêche le mode "loop" qui redémarre brutalement
      video.removeAttribute("loop");
    });
</script>

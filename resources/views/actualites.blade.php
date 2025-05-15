{{-- resources/views/actualites.blade.php --}}
@php
    $id = uniqid('texte_');
@endphp
@extends('layout.app')

@section('title', 'Actualités')

@section('content')
    <main>
        <div class="main-imageDW" >
            <div class="container">
                <h1 style="color: #ff6600" ><span>NOS ACTUALITES</span></h1>
            </div>
        </div>
        <section class="blog-section">
            <div class="container">
                <div class="blog-posts">
                    {{-- Article 1 --}}
                    {{-- <article class="blog-post">
                        <div class="post-image">
                            <img src="{{asset('images/actualite/actu1/actu1.jpeg')}}" style="object-fit: contain" alt="Titre de l'actualité 1">
                        </div>
                        <div class="post-content">
                            <h2 class="post-title" style="color: #ff6600">PLONGÉE DANS LES PROFONDEURS DU DARK WEB…</h2>
                            <p class="post-date">Publié le 20 mars 2025</p>
                            <!-- Partie visible -->
                            <p class="post-excerpt">
                                Alexandre KOFFI, notre Responsable de la sécurité des systèmes d’information chez KW legal&technologie a récemment participé à l’événement “Plongée dans les profondeurs du web”.
                            </p>
                            <!-- Partie cachée au départ -->
                            <div class="collapse" id="texteComplet">
                                <p>
                                    Une occasion unique d’explorer l’univers méconnu du Dark Web, où l’anonymat est roi… mais où les menaces sont bien réelles.
                                    Il a également eu le privilège de rencontrer et d’échanger avec M. Sami Khoury, Directeur du Centre canadien pour la cybersécurité.
                                    Un événement captivant qui renforce notre engagement à anticiper les risques et à protéger efficacement nos infrastructures numériques.
                                </p>
                            </div>
                            <!-- Bouton dynamique -->
                            <a class="read-more btn btn-primary mt-2" data-bs-toggle="collapse" href="#texteComplet" role="button" aria-expanded="false" aria-controls="texteComplet" id="toggleButton">
                                Lire l'article
                            </a>
                        </div>
                    </article> --}}

                    <article class="blog-post1">
                        <div class="post-image">
                            <img src="{{ asset('images/actualite/actu1/actu1.jpeg') }}" style="object-fit: contain" alt="Titre de l'actualité 1">
                        </div>
                        <div class="post-content">
                            <h2 class="post-title" style="color: #ff6600">PLONGÉE DANS LES PROFONDEURS DU DARK WEB…</h2>
                            <p class="post-date">Publié le 20 mars 2025</p>

                            <!-- Partie visible au chargement -->
                            <p class="post-excerpt">
                                Il a également eu le privilège de rencontrer et d’échanger avec M. Sami Khoury, Directeur du Centre canadien pour la cybersécurité.
                                Un événement captivant qui renforce notre engagement à anticiper les risques et à protéger efficacement nos infrastructures numériques.
                            </p>

                            <!-- Partie masquée (le début de l’histoire) -->
                            <div class="collapse" id="texteComplet">
                                <p class="post-excerpt">
                                    Alexandre KOFFI, notre Responsable de la sécurité des systèmes d’information chez KW legal&technologie a récemment participé à l’événement “Plongée dans les profondeurs du web”.
                                    Une occasion unique d’explorer l’univers méconnu du Dark Web, où l’anonymat est roi… mais où les menaces sont bien réelles.
                                </p>
                            </div>

                            <!-- Bouton dynamique -->
                            <a class="read-more mt-2" data-bs-toggle="collapse" href="#texteComplet" role="button" aria-expanded="false" aria-controls="texteComplet" id="toggleButton1">
                                Lire l'article
                            </a>
                        </div>
                    </article>

                    {{-- Article 2 --}}
                    <article class="blog-post2">
                        <div class="post-image">
                            <img src="{{asset('images/actualite/actu1/actu11.jpeg')}}" style="object-fit: contain" alt="Titre de l'actualité 2">
                        </div>
                        <div class="post-content">
                            <h2 class="post-title" style="color: #ff6600"> IMMERSION AU CŒUR DE LA CYBERSÉCURITÉ : UNE EXPÉRIENCE ENRICHISSANTE</h2>
                            <p class="post-date">Publié le 21 mars 2025</p>
                            <p class="post-excerpt">
                                Alexandre KOFFI, Responsable de la sécurité des systèmes d’information chez KW Legal & Technologie, a récemment pris part à un événement majeur consacré aux enjeux du web invisible et aux nouvelles menaces numériques.
                                Cette immersion a permis d’aborder des thématiques sensibles liées au Dark Web et aux pratiques émergentes en matière de cybersécurité.
                            </p>
                            <div class="collapse" id="texteComplet2">
                                <p  class="post-excerpt">
                                    Un temps fort de l’événement : la rencontre avec M. Éric Caire, Ministre de la Cybersécurité du Canada, avec qui Alexandre a pu échanger sur les défis actuels de la protection des infrastructures critiques.
                                    Chez KW Legal & Technologie, nous faisons de la veille et de la formation continue des piliers de notre stratégie de cybersécurité. Cet événement illustre parfaitement notre volonté d’être à la pointe des connaissances pour mieux sécuriser les systèmes de nos clients.
                                </p>
                            </div>
                            <a class="read-more mt-2" data-bs-toggle="collapse" href="#texteComplet2" role="button" aria-expanded="false" aria-controls="texteComplet2" id="toggleButton2">
                                Lire l'article
                            </a>
                        </div>
                    </article>

                    {{-- Article 3 --}}
                    {{-- <article class="blog-post">
                        <div class="post-image">
                            <img src="path-to-image2.jpg" alt="Titre de l'actualité 2">
                        </div>
                        <div class="post-content">
                            <h2 class="post-title">Titre de l'actualité 2</h2>
                            <p class="post-date">Publié le 19 mars 2025</p>
                            <p class="post-excerpt">
                                Curabitur ac velit et risus auctor fermentum a ac orci. Sed convallis felis id elit condimentum, a auctor ligula tincidunt...
                            </p>
                            <a href="#" class="read-more">Lire l'article</a>
                        </div>
                    </article> --}}
                </div>
            </div>
        </section>
    </main>

<style>
/* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.main-imageDW {
        background-image: url(../images/actualite/actualite.jpeg); /* Ajoutez l'image de fond ici */
        background-size: cover;
        background-position: center;
        padding: 60px 0;
        height: 500px;
        color: white; /* Texte en blanc sur fond sombre */
    }

/* Section du Blog */
.blog-section {
    padding: 50px 0;
    background-color: #fff;
    text-align: center;
}

.container {
    width: 90%;
    margin: 0 auto;
    max-width: 1200px;
}

.blog-title {
    font-size: 3rem;
    color: #333;
    margin-bottom: 40px;
    font-weight: 700;
}

/* Grille des articles */
.blog-posts {
    display: grid;
    /* grid-template-columns: repeat(auto-fill, minmax(300px, 2fr)); */
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    justify-items: center;
}

/* Carte d'article */

.blog-post1, .blog-post2 {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 100%;
    max-width: 350px;
    transition: all 0.3s ease-in-out;
    height: auto; /* Ajuste cette valeur selon la taille maximale que tu veux */
}

.blog-post1:hover, .blog-post2:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}


/* .collapse:not(.show) {
    display: none;
}

.collapse.show {
    display: block;
} */

.post-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-bottom: 2px solid #eee;
}

.post-content {
    padding: 20px;
}

.post-title {
    font-size: 2rem;
    color: #333;
    margin-bottom: 15px;
    font-weight: 700;
}

.post-date {
    font-size: 1rem;
    color: #777;
    margin-bottom: 10px;
}

.post-excerpt {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 15px;
}

.read-more {
    font-size: 1rem;
    color: #ff6600;
    text-decoration: none;
    font-weight: bold;
}

.read-more:hover {
    text-decoration: underline;
}

/* Media Queries pour Mobile */
@media (max-width: 768px) {
    .blog-title {
        font-size: 2.5rem;
    }

    .blog-post {
        margin-bottom: 20px;
    }

    .post-image img {
        height: 150px;
    }
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleButton = document.getElementById('toggleButton1');
        const toggleButton2 = document.getElementById('toggleButton2');
        const collapseContent = document.getElementById('texteComplet');
        const collapseContent2 = document.getElementById('texteComplet2');
        const blogPost1 = toggleButton.closest('.blog-post1');
        const blogPost2 = toggleButton2.closest('.blog-post2');

        collapseContent.addEventListener('shown.bs.collapse', function () {
            toggleButton1.textContent = 'Voir moins';

            // Forcer le recalcul de la hauteur de la carte
            // blogPost1.style.height = 'auto';
        });

        collapseContent.addEventListener('hidden.bs.collapse', function () {
            toggleButton1.textContent = "Lire l'article";

            // Forcer le recalcul après repli
            // blogPost1.style.height = 'auto';
        });

        collapseContent2.addEventListener('shown.bs.collapse', function () {
            toggleButton2.textContent = 'Voir moins';

            // Forcer le recalcul de la hauteur de la carte
            // blogPost2.style.height = 'auto';
        });

        collapseContent2.addEventListener('hidden.bs.collapse', function () {
            toggleButton2.textContent = "Lire l'article";

            // Forcer le recalcul après repli
            // blogPost2.style.height = 'auto';
        });

    });
</script>

{{--
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.toggle-btn');

        buttons.forEach(btn => {
            const card = btn.closest('.blog-post');
            const collapse = card.querySelector('.texteComplet');
            cons
            collapse.addEventListener('shown.bs.collapse', () => {
                btn.textContent = 'Voir moins';
                card.style.height = 'auto';
            });

            collapse.addEventListener('hidden.bs.collapse', () => {
                btn.textContent = "Lire l'article";
                card.style.height = 'auto';
            });
        });
    });
</script> --}}


@endsection

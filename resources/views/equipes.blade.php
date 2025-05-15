{{-- resources/views/actualites.blade.php --}}
@extends('layout.app')

@section('title', 'Actualités')

@section('content')

<section >
    <div class="main-imageDW" >
        <div class="container">
            <h1 style="color: #ff6600" ><span>NOTRE EQUIPE</span></h1>
        </div>
    </div>

    {{-- <div class="profile-container" style="margin-top: 60px;">
        <div class="profile-card">
            <div class="content">
            <div class="img"><img src="images/person3.jpg" alt="Lionel WILSON"></div>
            <div class="cardContent">
                <h3><br>Lionel WILSON<span><br> <b>Associé</b>,Expert en transformation numérique</span></h3>
            </div>
            </div>
            <ul class="sci">
            <li style="--i:1"><a href="https://www.facebook.com/share/1AUB3p5Tko/?mibextid=wwXIfr" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li style="--i:2"><a href="mailto:lwilson@kwlegaltech.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
            <li style="--i:3"><a href="https://www.linkedin.com/in/lionel-wilson/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <div class="profile-card">
            <div class="content">
            <div class="img"><img src="images/person2.jpg" alt="Valencia KONAN"></div>
            <div class="cardContent">
                <h3>Valencia KONAN<br><span><b>Associée Gérante</b>,Experte en Droit Numérique</span></h3>
            </div>
            </div>
            <ul class="sci">
            <li style="--i:1"><a href="https://www.facebook.com/share/1AUB3p5Tko/?mibextid=wwXIfr" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li style="--i:2"><a href="mailto:vkonan@kwlegaltech.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true" ></i></a></li>
            <li style="--i:3"><a href="https://www.linkedin.com/in/marie-ange-valencia-konan-178420153/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <div class="profile-card">
            <div class="content">
            <div class="img"><img src="images/person1.jpg" alt="Alexandre KOFFI"></div>
            <div class="cardContent">
                <h3><br>Alexandre KOFFI<span><br><b>Associé</b>,Expert en cybersécurité</span></h3>
            </div>
            </div>
            <ul class="sci">
            <li style="--i:1"><a href="https://www.facebook.com/share/1AUB3p5Tko/?mibextid=wwXIfr" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li style="--i:2"><a href="mailto:akoffi@kwlegaltech.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
            <li style="--i:3"><a href="https://www.linkedin.com/company/kw-legal-technologie/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div> --}}

    <p style="font-size: 19px;display: flex;justify-content: center;margin-top: 20px;">
        Nos associés et responsables s'appuient sur une équipe d'informaticiens répartis dans
        notre bureau <br> d'Abidjan  (siège opérationnel) et sur des experts externes certifiés sur le continent africain.
    </p>
    <div class="profile-container" style="margin-top: 30px;">
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
                        <h3>{{ $membre['nom'] }}<span><br><b>{{ $membre['poste'] }}</b>,<br>{{ $membre['titre'] }}</span></h3>
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
    <div class="profile-container" style="margin-top: 60px;">
        <!-- 3 cartes profils -->
        @foreach ([
            ['img' => 'images/equipe/person.jpeg', 'nom' => 'Olivia Diabaté', 'poste' => 'Chargée Commerciale et Marketing', 'titre' => 'Management stratégique et gestion des innovations', 'email' => 'odiabate@kwlegaltech.com', 'linkedin' => 'https://www.linkedin.com/in/olivia-diabate-29234a124?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app'],
            ['img' => 'images/favicon.png', 'nom' => 'Bintou Koné', 'poste' => 'Chargée administrative et financière', 'titre' => 'Administration des affaires', 'email' => 'bkone@kwlegaltech.com', 'linkedin' => 'https://www.linkedin.com/in/olivia-diabate-29234a124?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app'],
        ] as $membre)
            <div class="profile-card">
                <div class="content">
                    <div class="img"><img src="{{ $membre['img'] }}" alt="{{ $membre['nom'] }}"></div>
                    <div class="cardContent">
                        <h3>{{ $membre['nom'] }}<span><br><b>{{ $membre['poste'] }}</b>,<br>{{ $membre['titre'] }}</span></h3>
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
<style>
.main-imageDW {
    background-image: url(../images/equipe.jpg); /* Ajoutez l'image de fond ici */
    background-size: cover;
    background-position: center;
    padding: 60px 0;
    height: 500px;
    color: white; /* Texte en blanc sur fond sombre */
}

.container {
    text-align: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.section-title {
    font-size: 2.5rem;
    color: #ff6600;
    margin-bottom: 20px;
    font-weight: bold;
    text-transform: uppercase;
}

.section-title span {
    border-bottom: 3px solid #ff6600; /* Souligner le titre */
    padding-bottom: 10px;
}

.section-description {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #fff;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 15px;
}

</style>
@endsection

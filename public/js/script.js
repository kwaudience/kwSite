document.addEventListener('DOMContentLoaded', function() {

    // Toggle pour la navbar (menu burger)
    document.querySelector('.navbar-toggler').addEventListener('click', function() {
        var navbarNav = document.querySelector('.navbar-nav');
        navbarNav.classList.toggle('active');
    });

    // Dropdown (Menu déroulant) au survol
    const dropdown = document.querySelector('.dropdown');
    const dropdownMenu = dropdown.querySelector('.dropdown-menu');

    dropdown.addEventListener('mouseover', function() {
        dropdownMenu.style.display = 'block'; 
    });

    dropdown.addEventListener('mouseout', function() {
        dropdownMenu.style.display = 'none'; 
    });

    // Marquer l'élément actif du menu dropdown
    const links = dropdown.querySelectorAll('.dropdown-item');
    links.forEach(link => {
        link.addEventListener('click', function() {
            // Réinitialiser le fond de tous les éléments
            links.forEach(item => item.style.backgroundColor = ''); 
            // Ajouter un fond actif à l'élément cliqué
            link.style.backgroundColor = '#ddd';
        });
    });

    // Fonction pour remonter en haut avec un scroll fluide
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: "smooth" });
    }

    // Détecter le scroll pour afficher/masquer la flèche
    window.addEventListener("scroll", function () {
        let button = document.getElementById("backToTop");
        if (window.scrollY > 300) { 
            button.style.display = "flex"; // Afficher
        } else {
            button.style.display = "none"; // Cacher
        }
    });

    // Fonction pour défiler jusqu'au footer
    function scrollToFooter() {
        document.querySelector('footer').scrollIntoView({
            behavior: 'smooth'
        });
    }

document.addEventListener('DOMContentLoaded', function() {

    // Toggle pour le menu burger
    const hamburgerButton = document.getElementById('hamburger-button');
    const menuContent = document.querySelector('.menu-content');

    hamburgerButton.addEventListener('click', () => {
        // Toggle la classe "open" sur le menu burger
        menuContent.classList.toggle('open');
        document.querySelector('.hamburger-menu').classList.toggle('open'); // Ajout de l'animation sur les barres du hamburger
    });

});


    // Activation de l'élément actif dans les services
    const serviceBoxes = document.querySelectorAll('.service-box');
    serviceBoxes.forEach(box => {
        box.addEventListener('click', () => {
            box.classList.toggle('active'); // Ajoute/enlève la classe "active"
        });
    });

    // Masquer le menu de navigation après avoir cliqué sur un lien
    const navbarLinks = document.querySelectorAll('.navbar-collapse a');
    navbarLinks.forEach(link => {
        link.addEventListener('click', () => {
            document.querySelector(".navbar-collapse").classList.remove('show');
        });
    });

    // Animation de défilement fluide pour les liens internes
    const smoothScrollLinks = document.querySelectorAll('.smoothscroll');
    smoothScrollLinks.forEach(link => {
        link.addEventListener('click', function() {
            var el = document.querySelector(this.getAttribute('href'));
            var header_height = document.querySelector('.navbar').offsetHeight;
            scrollToDiv(el, header_height);
            return false;

            // Fonction pour scroller jusqu'à l'élément cible
            function scrollToDiv(element, navheight) {
                var offsetTop = element.getBoundingClientRect().top + window.pageYOffset;
                var totalScroll = offsetTop - navheight;
                window.scrollTo({
                    top: totalScroll,
                    behavior: 'smooth'
                });
            }
        });
    });

});

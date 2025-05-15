// Sélection des éléments du menu déroulant
const dropdown = document.querySelector('.dropdown');
const dropdownMenu = dropdown.querySelector('.dropdown-menu');

// Affichage du menu au survol
dropdown.addEventListener('mouseover', function() {
    dropdownMenu.style.display = 'block'; 
});

// Masquage du menu quand la souris sort
dropdown.addEventListener('mouseout', function() {
    dropdownMenu.style.display = 'none'; 
});

// Sélection des éléments du menu pour marquer celui qui est actif sur clic
const links = dropdown.querySelectorAll('.dropdown-item');
links.forEach(link => {
    link.addEventListener('click', function() {
        // Réinitialiser le fond de tous les éléments
        links.forEach(item => item.style.backgroundColor = ''); 
        // Ajouter un fond actif à l'élément cliqué
        link.style.backgroundColor = '#ddd';
    });
});

    // Détecte le scroll et affiche/cache la flèche
    window.addEventListener("scroll", function () {
      let button = document.getElementById("backToTop");
      if (window.scrollY > 300) { 
          button.style.display = "flex"; // Afficher
      } else {
          button.style.display = "none"; // Cacher
      }
  });

  // Fonction pour remonter en haut avec un scroll fluide
  function scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
  }

document.addEventListener('DOMContentLoaded', function () {
    // Sélection de tous les blocs de services
    const serviceBoxes = document.querySelectorAll('.service-box');

    // Ajout d'un événement de clic pour basculer l'état actif
    serviceBoxes.forEach(box => {
        box.addEventListener('click', () => {
            box.classList.toggle('active'); // Ajoute/enlève la classe "active"
        });
    });

    (function ($) {
        "use strict";

        // Masquer le menu de navigation après avoir cliqué sur un lien
        $('.navbar-collapse a').on('click', function() {
            $(".navbar-collapse").collapse('hide');
        });

        // Animation de défilement fluide pour les liens internes
        $('.smoothscroll').click(function() {
            var el = $(this).attr('href'); // Récupérer l'ID de l'élément cible
            var elWrapped = $(el);
            var header_height = $('.navbar').height(); // Hauteur du menu de navigation

            scrollToDiv(elWrapped, header_height);
            return false;

            // Fonction pour scroller jusqu'à l'élément cible
            function scrollToDiv(element, navheight) {
                var offset = element.offset();
                var offsetTop = offset.top;
                var totalScroll = offsetTop - navheight;

                // Animation de défilement
                $('body,html').animate({
                    scrollTop: totalScroll
                }, 300);
            }
        });

    })(window.jQuery);
});


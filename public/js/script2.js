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

    // Marquer l'élément actif sur clic
    const links = dropdown.querySelectorAll('.dropdown-item');
    links.forEach(link => {
        link.addEventListener('click', function() {
            links.forEach(item => item.style.backgroundColor = ''); // Réinitialiser les fonds
            link.style.backgroundColor = '#ddd'; // Ajouter fond actif
        });
    });

// Afficher ou masquer la navbar
document.querySelector('.scroll-down').addEventListener('click', function () {
    const navbarNav = document.querySelector('.navbar-nav');
    navbarNav.classList.toggle('active');
  });
  
  // Défilement vers le footer quand la flèche est cliquée
  function scrollToFooter() {
    document.querySelector('footer').scrollIntoView({
      behavior: 'smooth'
    });
  }
  function toggleNavbar() {
    const navbarNav = document.querySelector('.navbar-nav');
    navbarNav.classList.toggle('active');
  }
  
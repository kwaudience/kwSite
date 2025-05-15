document.addEventListener("DOMContentLoaded", function() {
    // Dropdown : Affichage et masquage du menu au survol
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

    // Toggle de la visibilité de contenu caché
    const toggleBtns = document.querySelectorAll(".toggle-btn");

    toggleBtns.forEach(button => {
        button.addEventListener("click", function() {
            const hiddenContent = this.parentElement.previousElementSibling;

            // Vérification si le contenu est caché ou visible
            if (hiddenContent.style.display === "none" || hiddenContent.style.display === "") {
                hiddenContent.style.display = "block";
                this.textContent = "Voir moins"; // Texte pour masquer le contenu
            } else {
                hiddenContent.style.display = "none";
                this.textContent = "Voir plus"; // Texte pour afficher le contenu
            }
        });
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const toggleBtn = document.querySelector(".toggle-btn");
    const hiddenContent = document.querySelector(".hidden-content");

    toggleBtn.addEventListener("click", () => {
        hiddenContent.classList.toggle("show");
        
        // Change le texte du bouton selon l'état
        if (hiddenContent.classList.contains("show")) {
            toggleBtn.textContent = "Voir moins";
        } else {
            toggleBtn.textContent = "Voir plus";
        }
    });
});

